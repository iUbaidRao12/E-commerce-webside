<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\video;
use App\Models\subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $data = Category::where('is_visible', 1)->get();
        //  $data=category::all();
        //  $vid=video::all();
        $vid = video::where('visible', 1)->get();
        $allcate = category::all();
        $var = [
            'data' => $data,
            'vid' => $vid,
            'allcate' => $allcate,
        ];
        return view('main', $var);
    }
    function cateform()
    {
        return view('category.categoryform');
    }

    public function insertcate(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'image' => 'required|image'
            ],
            [
                'name.required' => 'Enter  Category Name',
                'image.required' => 'Upload  Category picture',
            ]
        );

        $img_path = $req->file('image')->store('image_folder', 'public');
        $data = new category();
        $data->name = $req->name;
        $data->images = $img_path;
        $data->is_visible = $req->has('is_visible') ? 1 : 0;
        $data->save();
        return redirect()->route('cateform')->with('message', 'Add Category Successfully');
    }

    function All_Categories()
    {
        $data = category::all();
        return view('category.cate_images', compact('data'));
    }

    function delete_cate($id)
    {
        $data = category::find($id);
        $data->delete();

        $pickimgpath = public_path('storage/') . $data->images;
        if (file_exists($pickimgpath)) {
            @unlink($pickimgpath);
        }
        return redirect()->route('All_Categories')->with('message', 'img deleted successfully.');
    }


    function edit_cate($id)
    {
        $data = category::find($id);
        return view('category.update', compact('data'));
    }
    function update_cate(Request $req, $id)
    {
        $req->validate(
            ['name' => 'required'],
            ['name.required' => 'Enter  Category Name']
        );
        $data = category::find($id);
        $data->name = $req->name;
        $data->is_visible = $req->has('is_visible') ? 1 : 0;

        if ($req->hasfile('image')) {
            // (has file ma jab ayy ga jab image change ho giii)
            $pickimgpath = public_path('storage/') . $data->images;
            if (file_exists($pickimgpath)) {
                @unlink($pickimgpath);
            }
            $img_path = $req->file('image')->store('image_folder', 'public');
            $data->images = $img_path;
        }
        $data->save();
        return redirect()->route('All_Categories')->with('message', 'update Category Successfully');
    }
}
