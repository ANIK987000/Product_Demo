<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    function home()
    {
        return view('main.home');
    }
    function productList(){
       $products=Product::all();
    //    return $products;
    return view('others.productList')
                ->with('products',$products);
        
    }
    function addProduct()
    {
        return view('others/form');
    }
    function addProductPost(Request $req)
    {
        $this->validate($req,
        [
            "name"=>"required",
            "id"=>"required|regex:/^[0-9]{1}-[0-9]{3}-[0-9]{1}+$/i",
            "price"=>"required"
        ],
        [
            "name.required"=>"Provide Product Name",
            "id.required"=>"Provide Product id",
            "id.regex"=>"Product ID should be like this - X-XXX-X",
            "price.required"=>"Provide Product Price"
        ]);
        $p1=new Product();
        $p1->Name=$req->name;
        $p1->Product_id=$req->id;
        $p1->Price=$req->price;
        $p1->save();
        return "Submitted successfully with valid values";
    }


    function productDetails(Request $req)
    {
         return view('others/productDetails')
                    ->with('name',$req->name)
                    ->with('id',$req->id)
                    ->with('price',$req->price);
        // return "Product Details Here";
    }
}
