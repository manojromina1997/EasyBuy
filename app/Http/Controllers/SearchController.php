<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\View;


class SearchController extends Controller
{
    public function Search()
    {
      $results = Product::where('category_name', 'LIKE', '%'. Input::get('search') .'%')
        ->orWhere('subcategory_name', 'LIKE', '%'. Input::get('search') .'%')
        ->orWhere('company_name', 'LIKE', '%'. Input::get('search') .'%')
        ->orWhere('model_name', 'LIKE', '%'. Input::get('search') .'%')
        ->get();
    return View::make('others.search')->with('product', $results);
    }
}