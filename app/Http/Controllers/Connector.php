<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Product;

class Connector extends Controller
{
    public function Index()
    {
        return view('index');
    }
     public function Contact()
    {
        return view('others.contact');
    }
    public function AC()
    {
         $product = DB::table('product')->where('subcategory_name', 'ac')->distinct('company_name')->get();
        return view('categories.appliances.ac',['mobile' => $product]);
    }
     public function HomeEntertainment()
    {
         $product = DB::table('product')->where('subcategory_name', 'homeentertainment')->distinct('company_name')->get();
        return view('categories.appliances.homeentertainment',['mobile' => $product]);
    }
     public function Refrigerator()
    {
         $product = DB::table('product')->where('subcategory_name', 'refrigerator')->distinct('company_name')->get();
        return view('categories.appliances.refrigerator',['mobile' => $product]);
    }
     public function TV()
    {
         $product = DB::table('product')->where('subcategory_name', 'tv')->distinct('company_name')->get();
        return view('categories.appliances.tv',['mobile' => $product]);
    }
     public function WashingMachine()
    {
         $product = DB::table('product')->where('subcategory_name', 'washingmachine')->distinct('company_name')->get();
        return view('categories.appliances.washingmachine',['mobile' => $product]);
    }
       public function Book()
    {
         $product = DB::table('product')->where('subcategory_name', 'book')->distinct('company_name')->get();
        return view('categories.bookmore.book',['mobile' => $product]);
    }
      public function Clothing()
    {
         $product = DB::table('product')->where('subcategory_name', 'clothing')->distinct('company_name')->get();
        return view('categories.bookmore.clothing',['mobile' => $product]);
    }
       public function Gaming()
    {
         $product = DB::table('product')->where('subcategory_name', 'gaming')->distinct('company_name')->get();
        return view('categories.bookmore.gaming',['mobile' => $product]);
    }
       public function Fitness()
    {
         $product = DB::table('product')->where('subcategory_name', 'fitness')->distinct('company_name')->get();
        return view('categories.bookmore.fitness',['mobile' => $product]);
    }
       public function Movies()
    {
         $product = DB::table('product')->where('subcategory_name', 'movies')->distinct('company_name')->get();
        return view('categories.bookmore.movies',['mobile' => $product]);
    }
       public function Music()
    {
         $product = DB::table('product')->where('subcategory_name', 'music')->distinct('company_name')->get();
        return view('categories.bookmore.music',['mobile' => $product]);
    }
       public function Sports()
    {
         $product = DB::table('product')->where('subcategory_name', 'sports')->distinct('company_name')->get();
        return view('categories.bookmore.sports',['mobile' => $product]);
    }
       public function Stationary()
    {
         $product = DB::table('product')->where('subcategory_name', 'stationary')->distinct('company_name')->get();
        return view('categories.bookmore.stationary',['mobile' => $product]);
    }
       public function Camera()
    {
        $product = DB::table('product')->where('subcategory_name', 'camera')->distinct('company_name')->get();
        return view('categories.electronics.camera',['mobile' => $product]);

    }
    public function Mobiles()
    {
       $product = DB::table('product')->where('subcategory_name', 'mobile')->distinct('company_name')->get();
        return view('categories.electronics.mobile',['mobile' => $product]);
    }
       public function Laptop()
    {
        $product = DB::table('product')->where('subcategory_name', 'laptop')->distinct('company_name')->get();
        return view('categories.electronics.laptop',['mobile' => $product]);
    }
       public function NetworkComponent()
    {
        $product = DB::table('product')->where('subcategory_name', 'networkcomponent')->distinct('company_name')->get();
        return view('categories.electronics.networkcomponent',['mobile' => $product]);
    }
       public function Tablet()
    {
        $product = DB::table('product')->where('subcategory_name', 'tablet')->distinct('company_name')->get();
        return view('categories.electronics.tablet',['mobile' => $product]);
    }
       public function Dinning()
    {
         $product = DB::table('product')->where('subcategory_name', 'dinning')->distinct('company_name')->get();
        return view('categories.homefurniture.dinning',['mobile' => $product]);
    }
     public function Furniture()
    {
         $product = DB::table('product')->where('subcategory_name', 'furniture')->distinct('company_name')->get();
        return view('categories.homefurniture.furniture',['mobile' => $product]);
    }
     public function KitchenDinning()
    {
         $product = DB::table('product')->where('subcategory_name', 'kitchen')->distinct('company_name')->get();
        return view('categories.homefurniture.kitchendinning',['mobile' => $product]);
    }
     public function KitchenStorage()
    {
         $product = DB::table('product')->where('subcategory_name', 'kitchenstorage')->distinct('company_name')->get();
        return view('categories.homefurniture.kitchenstorage',['mobile' => $product]);
    }
     public function Lightning()
    {
         $product = DB::table('product')->where('subcategory_name', 'lightning')->distinct('company_name')->get();
        return view('categories.homefurniture.lightning',['mobile' => $product]);
    }
     public function BabyCare()
    {
         $product = DB::table('product')->where('subcategory_name', 'babycare')->distinct('company_name')->get();
        return view('categories.kids.babycare',['mobile' => $product]);
    }
       public function ClothingKids()
    {
         $product = DB::table('product')->where('subcategory_name', 'clothingkids')->distinct('company_name')->get();
        return view('categories.kids.clothing',['mobile' => $product]);
    }
       public function FootwearKids()
    {
         $product = DB::table('product')->where('subcategory_name', 'footwearkids')->distinct('company_name')->get();
        return view('categories.kids.footwear',['mobile' => $product]);
    }
       public function School()
    {
         $product = DB::table('product')->where('subcategory_name', 'school')->distinct('company_name')->get();
        return view('categories.kids.school',['mobile' => $product]);
    }
     public function Toys()
    {
         $product = DB::table('product')->where('subcategory_name', 'toys')->distinct('company_name')->get();
        return view('categories.kids.toys',['mobile' => $product]);
    }
     public function AccesoriesMens()
    {
         $product = DB::table('product')->where('subcategory_name', 'accesoriesmens')->distinct('company_name')->get();
        return view('categories.mens.accesories',['mobile' => $product]);
    }
      public function ClothingMens()
    {
         $product = DB::table('product')->where('subcategory_name', 'clothingmens')->distinct('company_name')->get();
        return view('categories.mens.clothing',['mobile' => $product]);
    }
      public function FootwearMens()
    {
         $product = DB::table('product')->where('subcategory_name', 'footwearmens')->distinct('company_name')->get();
        return view('categories.mens.footwear',['mobile' => $product]);
    }
      public function PersonalMens()
    {
         $product = DB::table('product')->where('subcategory_name', 'personalmens')->distinct('company_name')->get();
        return view('categories.mens.personal',['mobile' => $product]);
    }
      public function WatchesMens()
    {
         $product = DB::table('product')->where('subcategory_name', 'watcheswomen')->distinct('company_name')->get();
        return view('categories.mens.watches',['mobile' => $product]);
    }
        public function AccesoriesWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'accesorieswomen')->distinct('company_name')->get();
        return view('categories.womens.accesories',['mobile' => $product]);
    }
      public function ClothingWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'clothingwomen')->distinct('company_name')->get();
        return view('categories.womens.clothing',['mobile' => $product]);
    }
      public function FootwearWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'footwearwomen')->distinct('company_name')->get();
        return view('categories.womens.footwear',['mobile' => $product]);
    }
      public function PersonalWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'personalwomen')->distinct('company_name')->get();
        return view('categories.womens.personal',['mobile' => $product]);
    }
      public function WatchesWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'watcheswomen')->distinct('company_name')->get();
        return view('categories.womens.watches',['mobile' => $product]);
    }
         public function JewelleryWomen()
    {
         $product = DB::table('product')->where('subcategory_name', 'jewellerywomen')->distinct('company_name')->get();
        return view('categories.womens.jewellery',['mobile' => $product]);
    }

}
