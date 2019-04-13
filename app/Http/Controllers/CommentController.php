<?php

namespace App\Http\Controllers;

use App\Comment;

class CommentController extends Controller
{
    public function showList()
    {
        $cmts = Comment::all();
        return view('admin.comment.list', ['cmts' => $cmts]);
    }

    public function delete($id)
    {
        try {
            Comment::destroy($id);
            return redirect('admin/comment')->with([
                'status' => 'success',
                'message' => __('app.deleted')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/comment')->with([
                'status' => 'danger',
                'message' => __('app.delete_failed')
                // 'message' => $e->getMessage()
            ]);
        }
    }
}
