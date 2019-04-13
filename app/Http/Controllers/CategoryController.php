<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function showList()
    {
        $categories = Category::with('parent')->get();
        return view('admin.category.list', ['categories' => $categories]);
    }

    public function showAdd()
    {
        $categories = Category::all();
        return view('admin.category.add', ['categories' => $categories]);
    }

    public function add(CategoryRequest $request)
    {
        try {
            Category::create([
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'parent_id' => $request->cat_id,
                'order' => $request->order
            ]);
            return redirect('admin/category/add')->with([
                'status' => 'success',
                'message' => __('app.added')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/category/add')->with([
                'status' => 'danger',
                'message' => __('app.add_failed')
                // 'message' => $e->getMessage()
            ]);
        }
    }

    public function showEdit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function edit(CategoryRequest $request, $id)
    {
        try {
            Category::updateOrCreate(
                ['id'=>$id],
                [
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'parent_id' => $request->cat_id,
                'order' => $request->order
                ]
            );
            return redirect('admin/category/edit/'.$id)->with([
                'status' => 'success',
                'message' => __('app.edited')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/category/edit/'.$id)->with([
                'status' => 'danger',
                'message' => __('app.edit_failed')
                // 'message' => $e->getMessage()
            ]);
        }
    }
    public function delete($id)
    {
        try {
            Category::destroy($id);
            return redirect('admin/category')->with([
                'status' => 'success',
                'message' => __('app.deleted')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/category')->with([
                'status' => 'danger',
                'message' => __('app.delete_failed')
                // 'message' => $e->getMessage()
            ]);
        }
    }
}
