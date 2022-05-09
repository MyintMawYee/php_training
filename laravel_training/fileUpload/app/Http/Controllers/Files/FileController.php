<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('file', compact('galleries'));
    }

    //Store image into database and Storage_path
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'image.*' => 'image'
        ]);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('upload', $filename);

                $gallery = new Gallery();
                $gallery->name = $filename;
                $gallery->save();
            }
        }
        return back()->with('status', 'The images are compleletely uploaded');
    }

    //delete image from database and user view
    public function destory($id)
    {
        $gallery = Gallery::findOrfail($id);
        Storage::delete('upload/' . $gallery->name);
        $gallery->delete();
        return back()->with('status','A image is completely deleted');
    }

    //download image into local
    public function download($id)
    {
        $gallery = Gallery::findOrfail($id);
        return Storage::download('upload/' . $gallery->name);
    }
}
