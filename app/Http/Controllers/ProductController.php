<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // compact,with,array
    public function index()
    {
        // get all posts from database
        // if we want to pass data from database to view ,first we make variable to pass data
        // passing with array
        $products = Product::all();

        return view('admin.products.view_products',compact('products'));
    }


    public function create()

        {
            $categories = Category::all();
            return view('admin.products.insert_product', compact('categories'));
        }

        // return view('admin.products.insert_product');



    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|min:3|max:15',
        //     'description' => 'required',
        //     'is_publish' => 'required'

        // ]);


        // method 2 for uploading image
        $input =$request->all();

        // checking if image in present
        if($request->hasFile('product_images1')){
        // destination where the image upload
        $destination_path='public/image/products';
        // get the image from input
        $image=$request->file('product_images1');
        // get the original name from its object and stores it in the $image_name variable.
        $image_name=$image->getClientOriginalName();
        // This line stores the uploaded image file in the specified destination path with the original name using the storeAs() method. The method takes two parameters: the destination path and the new name for the uploaded file. The new name is the original name of the uploaded file.
        $path=$request->file('product_images1')->storeAs($destination_path,$image_name);
        //
        $input['product_images1'] = $image_name;
        }

        if($request->hasFile('product_images2')){
        $destination_path='public/image/products';
        $image=$request->file('product_images2');
        $image_name=$image->getClientOriginalName();
        $path=$request->file('product_images2')->storeAs($destination_path,$image_name);
        $input['product_images2'] = $image_name;
    }

        if($request->hasFile('product_images2')){
        $destination_path='public/image/products';
        $image=$request->file('product_images3');
        $image_name=$image->getClientOriginalName();
        $path=$request->file('product_images3')->storeAs($destination_path,$image_name);
        $input['product_image1'] = $image_name;
        $input['product_images2'] = $image_name;
    }

        $product=Product::create([

            'product_title' => $request->product_title,
            'product_description' => $request->description,
            'product_keywords'  => $request->product_keywords,
            'categories_id'  => $request->product_category,
            'brand_id'  => $request->product_brands,
            // img method 1 not complete
            // 'product_image1' => $request->file('product_images1')->getClientOriginalName(),

            // 'product_image2' => $request->file('product_images2')->getClientOriginalName(),
            // 'product_image3' => $request->file('product_images3')->getClientOriginalName(),
            'product_price'  => $request->product_price,
            'products_status' => true,
            'product_image1' => $input['product_image1'],
            'product_image2' => $input['product_image1'],
            'product_image3' => $input['product_image1']



        ]);
        // img method 1
        // $path=$request->file('product_images1')->storeAs('public/images/product');
//    $request->session()->flash('alert-success', 'post saved');


         return redirect()->route('user.index');


        //return redirect()->route('post.create');
        // Session::flash('alert-success');

        // if(Session::get('alert-success')){
        //     return 'set';
        // }
        // else
        // {
        //     return 'no';
        // }

    }




    public function update(Request $request, $id)
    {


    }


    public function destroy($id)
    {
        //
    }

    public function here(){

    }
}



