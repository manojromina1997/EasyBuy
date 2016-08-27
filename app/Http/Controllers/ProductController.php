<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
      public function getProduct(Request $request)
    {
     return view('admins.newproduct');
    }

    public function postProduct(Request $request)
    {
      Product::create ([
      'category_name'=> $request->input('category_name'),
      'subcategory_name'=> $request->input('subcategory_name'),
      'company_name'=> $request->input('company_name'),
      'model_name'=> $request->input('model_name'),
      'image_url'=> $request->input('image_url'),
      'features'=> $request->input('features'),
      'price'=> $request->input('price'),
      'description'=> $request->input('description'),


      
      ]);
       return redirect()->route('product')->with('info','Message has been sent successfully');
    }
}
