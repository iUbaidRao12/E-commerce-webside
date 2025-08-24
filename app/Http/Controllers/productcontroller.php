<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\productimg;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
     function productpage($id)
    {
    $allcate=category::all();
       $category = Category::with('products.images')->findOrFail($id);
    return view ('product.productpage',compact('allcate','category'));
    }
function All_product()
{
return view('product.allproduct');
}
    function productform(){
    $allcate=category::all();
    return view ('product.productform',compact('allcate'));
}


     public function storeprod(Request $request)
    {
        $request->validate([
            'cate_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'piece' => 'required|integer',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Save product
        $product = product::create([
            'cate_id' => $request->cate_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'piece' => $request->piece,
        ]);

        // Save each image
        if ($request->hasFile('images')){
            foreach ($request->file('images') as $file){
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/products'), $filename);
                productimg::create([
                    'prod_id' => $product->id,
                    'image' => 'uploads/products/' . $filename,
                ]);
            }
        }
        return redirect()->back()->with('message', 'Product added successfully!');
    }

    
}
