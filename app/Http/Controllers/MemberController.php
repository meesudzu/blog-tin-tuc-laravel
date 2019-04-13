<?php

namespace App\Http\Controllers;

use App\User;

class MemberController extends Controller
{
    public function showList()
    {
        $users = User::all();
        return view('admin.member.list', ['users' => $users]);
    }

    public function block($id)
    {
        $user = User::find($id);
        if ($user->status == 0) {
            $user->status = 1;
            $user->save();

            return redirect('admin/member')->with([
                'status' => 'success',
                'message' => __('app.unblocked')
            ]);
        } else {
            $user->status = 0;
            $user->save();

            return redirect('admin/member')->with([
                'status' => 'success',
                'message' => __('app.blocked')
            ]);
        }
    }

    public function mod($id)
    {
        $user = User::find($id);
        if ($user->permission_id == 2) {
            $user->permission_id = 3;
            $user->save();

            return redirect('admin/member')->with([
                'status' => 'success',
                'message' => __('app.unmoded')
            ]);
        } elseif ($user->permission_id == 3) {
            $user->permission_id = 2;
            $user->save();

            return redirect('admin/member')->with([
                'status' => 'success',
                'message' => __('app.moded')
            ]);
        } else {
            return redirect('admin/member')->with([
                'status' => 'danger',
                'message' => __('app.mod_failed')
            ]);
        }
    }
}
