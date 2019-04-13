<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdRequest;
use App\Ad;

class AdController extends Controller
{
    public function showList()
    {
        $ads = Ad::all();
        return view('admin.ad.list', ['ads' => $ads]);
    }

    public function showAdd()
    {
        return view('admin.ad.add');
    }

    public function showEdit($id)
    {
        $ad = Ad::find($id);
        return view('admin.ad.edit', ['ad' => $ad]);
    }

    public function add(AdRequest $request)
    {
        $img = '404.jpg';
        if ($request->hasFile('img')) {
            $img = $this->uploadImage($request->file('img'));
            if (!$img) {
                return redirect('admin/ad/add')->with([
                    'status' => 'danger',
                    'message' => __('app.add_failed')
                ]);
            }
        }
        Ad::create([
            'name' => $request->name,
            'link' => $request->link,
            'img' => $img,
            'note' => $request->note,
            'order' => $request->order
        ]);
        return redirect('admin/ad/add')->with([
            'status' => 'success',
            'message' => __('app.added')
        ]);
    }

    public function edit(AdRequest $request, $id)
    {
        if ($request->hasFile('img')) {
            $img = $this->uploadImage($request->file('img'));
            if (!$img) {
                return redirect('admin/ad/edit/'. $id)->with([
                    'status' => 'danger',
                    'message' => __('app.edited_failed')
                ]);
            }
            Ad::updateOrCreate(
                ['id'=>$id],
                [
                    'name' => $request->name,
                    'link' => $request->link,
                    'img' => $img,
                    'note' => $request->note,
                    'order' => $request->order
                ]
            );
        } else {
            Ad::updateOrCreate(
                ['id'=>$id],
                [
                    'name' => $request->name,
                    'link' => $request->link,
                    'note' => $request->note,
                    'order' => $request->order
                ]
            );
        }

        return redirect('admin/ad/edit/'. $id)->with([
            'status' => 'success',
            'message' => __('app.edited')
        ]);
    }

    public function delete($id)
    {
        try {
            Ad::destroy($id);
            return redirect('admin/ad')->with([
                'status' => 'success',
                'message' => __('app.deleted')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/ad')->with([
                'status' => 'danger',
                'message' => __('app.delete_failed')
                // 'message' => $e->getMessage()
            ]);
        }
    }

    private function uploadImage($file)
    {
        $ext = $file->getClientOriginalExtension();
        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
            $name = $file->getClientOriginalName();
            do {
                $img = str_random(10).'_'.$name;
            } while (file_exists(public_path('upload/ad/'). $img));
            $file->move(public_path('upload/ad/'), $img);

            return $img;
        }
        return false;
    }
}
