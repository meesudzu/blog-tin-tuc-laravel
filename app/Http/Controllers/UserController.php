<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ProfilesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Article;
use App\Comment;
use App\Category;

class UserController extends Controller
{
    public function showHome()
    {
        if (Schema::hasTable('articles')) {
            $highlight_articles = Article::with('category', 'user', 'comment')
            ->where([
                ['is_highlight', '=', '1'],
                ['cat_id', '!=', '4'],
            ])
            ->orderby('created_at', 'desc')
            ->take(3)
            ->get();
            $new_articles = Article::with('category')
            ->where('cat_id', '!=', '4')
            ->orderby('created_at', 'desc')
            ->take(10)
            ->get();
            $random_articles = Article::with('category')
            ->inRandomOrder()
            ->where('cat_id', '!=', '4')
            ->orderby('created_at')
            ->take(2)
            ->get();
        } else {
            $highlight_articles = null;
            $new_articles = null;
            $random_articles = null;
        }

        return view('home', compact('highlight_articles', 'new_articles', 'random_articles'));
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('profiles');
        } else {
            return redirect('login')->with([
                'status' => 'danger',
                'message' => __('app.login_failed')
            ]);
        }
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('login')->with([
            'status' => 'success',
            'message' => __('app.register_success')
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showProfiles()
    {
        return view('profiles');
    }

    public function updateProfiles(ProfilesRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('profiles')->with([
            'status' => 'success',
            'message' => __('app.profiles_changed')
        ]);
    }

    public function updateAvatar(Request $request)
    {
        $avatar = "";
        if ($request->hasFile("img")) {
            $upload = $this->uploadAvatar($request->file('img'));
            if (!$upload) {
                return response()->json(['status' => false,'response' => 'Cập nhật Avatar không thành công!']);
            }
            $avatar = $upload;
        }
        $user = Auth::user();
        $user->avatar = $avatar;
        $user->save();
        return response()->json(['status' => true,'response' => $avatar]);
    }

    private function uploadAvatar($file)
    {
        $ext = $file->getClientOriginalExtension();
        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
            $name = $file->getClientOriginalName();
            do {
                $img = str_random(10).'_'.$name;
            } while (file_exists(public_path('upload/avatar/'). $img));
            $file->move(public_path('upload/avatar/'), $img);

            return $img;
        }
        return false;
    }

    public function showArticle($slug)
    {
        $article = Article::with('category', 'comment', 'user', 'comment.user')->where('slug', '=', $slug)->first();
        return view('single', ['article' => $article]);
    }

    public function comment(Request $request)
    {
        Comment::create([
            'user_id' => Auth::id(),
            'article_id' => $request->article_id,
            'content' => $request->content,
        ]);
        return redirect('article/'. Article::find($request->article_id)->slug)->with([
            'status' => 'success',
            'message' => __('app.comment_success')
        ]);
    }

    public function showCategory($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = DB::select(
            DB::raw("
                SELECT articles.*, categories.name as cat_name, categories.slug as cat_slug,
                users.name as user_name, users.avatar FROM `articles`
                INNER JOIN categories ON articles.cat_id = categories.id
                INNER JOIN users ON articles.user_id = users.id
                WHERE articles.`cat_id` = $category->id
                or
                articles.`cat_id` in (SELECT id FROM categories WHERE parent_id = $category->id)
                ORDER BY articles.created_at desc
                ")
        );

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // // Create a new Laravel collection from the array data
        $itemCollection = collect($articles);

        // // Define how many items we want to be visible in each page
        $perPage = 10;

        // // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems, count($itemCollection), $perPage);

        // // set url path for generted links
        $paginatedItems->setPath($request->url());
        return view('category', ['articles' => $paginatedItems, 'category' => $category->name]);
    }

    public function showAllArticles()
    {
        $articles = Article::where('cat_id', '!=', '4')->orderby('created_at', 'desc')->paginate(10);
        return view('archive', ['articles' => $articles]);
    }

    public function showSearch(Request $request)
    {
        $keyword = Input::get('keyword');
        $articles = Article::where('title', 'LIKE', '%'. $keyword .'%')
        ->orWhere('content', 'LIKE', '%'. $keyword .'%')
        ->orWhere('summary', 'LIKE', '%'. $keyword .'%')
        ->orWhere('tags', 'LIKE', '%'. $keyword .'%')
        ->orWhere('source', 'LIKE', '%'. $keyword .'%')
        ->orderby('created_at', 'desc')->paginate(1);
        $articles->appends(Input::except('page'));
        return view('search', compact('keyword', 'articles'));
    }
}
