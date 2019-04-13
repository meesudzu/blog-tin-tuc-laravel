<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $count_article = DB::table('articles')->count();
        $count_category = DB::table('categories')->count();
        $count_user = DB::table('users')->count();
        $count_ads = DB::table('ads')->count();
        return view('admin.dashboard', [
            'count_article' => $count_article,
            'count_category' => $count_category,
            'count_user' => $count_user,
            'count_ads' => $count_ads
        ]);
    }
}
