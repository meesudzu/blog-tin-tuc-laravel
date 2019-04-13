<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlideRequest;
use App\Slide;

class SlideController extends Controller
{
    public function showList()
    {
        $slides = Slide::all();
        return view('admin.slide.list', ['slides' => $slides]);
    }

    public function showAdd()
    {
        return view('admin.slide.add');
    }

    public function showEdit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.edit', ['slide' => $slide]);
    }

    public function add(SlideRequest $request)
    {
        $img = '404.jpg';
        if ($request->hasFile('img')) {
            $img = $this->uploadImage($request->file('img'));
            if (!$img) {
                return redirect('admin/slide/add')->with([
                    'status' => 'danger',
                    'message' => __('app.add_failed')
                ]);
            }
        }
        Slide::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => $img,
            'order' => $request->order
        ]);
        return redirect('admin/slide/add')->with([
            'status' => 'success',
            'message' => __('app.added')
        ]);
    }

    public function edit(SlideRequest $request, $id)
    {
        if ($request->hasFile('img')) {
            $img = $this->uploadImage($request->file('img'));
            if (!$img) {
                return redirect('admin/slide/edit/'. $id)->with([
                    'status' => 'danger',
                    'message' => __('app.edited_failed')
                ]);
            }
            Slide::updateOrCreate(
                ['id'=>$id],
                [
                    'title' => $request->title,
                    'description' => $request->description,
                    'img' => $img,
                    'order' => $request->order
                ]
            );
        } else {
            Slide::updateOrCreate(
                ['id'=>$id],
                [
                    'title' => $request->title,
                    'description' => $request->description,
                    'order' => $request->order
                ]
            );
        }

        return redirect('admin/slide/edit/'. $id)->with([
            'status' => 'success',
            'message' => __('app.edited')
        ]);
    }

    public function delete($id)
    {
        try {
            Slide::destroy($id);
            return redirect('admin/slide')->with([
                'status' => 'success',
                'message' => __('app.deleted')
            ]);
        } catch (\Exception $e) {
            return redirect('admin/slide')->with([
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
            } while (file_exists(public_path('upload/slide/'). $img));
            $file->move(public_path('upload/slide/'), $img);

            return $img;
        }
        return false;
    }
}
