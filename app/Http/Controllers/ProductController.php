<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::with('category')->get();
        $category= Category::with('products')->get();
        return view('index',compact('product','category'));
    }
    public function Products(){
        return view('addProduct');
    }
    public function addProducts(Request $request){
        $request->validate(
            [
                'name'=>'required',
            ]
            );
        $products= new Product();
        $products->product_name=$request['name'];
        $products->category_id=$request['categroy'];
        $products->save();
        return redirect('/')->with('success','Product Added Succesfully');
    }

    public function editView($id){
        $product = Product::with('category')->where('product_id', $id)->first();

        if($product){
            return view('editProduct',compact('product','id'));
        }
        else{
            return redirect('/')->with('fail','The id you entered not on database');
        }
    }

    public function update(Request $request, $id){
        $product = Product::with('category')->where('product_id', $id)->first();
        $product->product_name=$request['name'];
        $product->category_id=$request['category'];
        // echo ($product->category_id);
        echo "<pre>";
        print_r($product->toArray());
        // $res= $product->save();
        // if($res){
        //     return view('/')->with('success','Product Edited Succefully');
        // }
        // else{
        //     return redirect()->back();
        // }


    }

     public function deleteProduct($id){
        $products= Product::find($id);
        if($products){
            $products->delete;
            return view('/');
        }
    }
}
