<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use App\Http\Requests;

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
        return view('categories.appliances.ac',array('name' => 'Air Conditoner'));
    }
     public function HomeEntertainment()
    {
        return view('categories.appliances.homeentertainment',array('name' => 'Home Entertainment'));
    }
     public function Refrigerator()
    {
        return view('categories.appliances.refrigerator',array('name' => 'Refrigerator'));
    }
     public function TV()
    {
        return view('categories.appliances.tv',array('name' => 'Television'));
    }
     public function WashingMachine()
    {
        return view('categories.appliances.washingmachine',array('name' => 'Washing Machine'));
    }
       public function Book()
    {
        return view('categories.bookmore.book',array('name' => 'Book'));
    }
      public function Clothing()
    {
        return view('categories.bookmore.clothing',array('name' => 'Clothing'));
    }
       public function Gaming()
    {
        return view('categories.bookmore.gaming',array('name' => 'Gaming'));
    }
       public function Fitness()
    {
        return view('categories.bookmore.fitness',array('name' => 'Fitness'));
    }
       public function Movies()
    {
        return view('categories.bookmore.movies',array('name' => 'Movies'));
    }
       public function Music()
    {
        return view('categories.bookmore.music',array('name' => 'Music'));
    }
       public function Sports()
    {
        return view('categories.bookmore.sports',array('name' => 'Sports'));
    }
       public function Stationary()
    {
        return view('categories.bookmore.stationary',array('name' => 'Stationary'));
    }
       public function Camera()
    {
        return view('categories.electronics.camera',array('name' => 'Camera'));

    }
    public function Mobiles()
    {
        return view('categories.electronics.mobile',array('name' => 'Mobiles'));
    }
       public function Laptop()
    {
        return view('categories.electronics.laptop',array('name' => 'Laptop'));
    }
       public function NetworkComponent()
    {
        return view('categories.electronics.networkcomponent',array('name' => 'Network Component'));
    }
       public function Tablet()
    {
        return view('categories.electronics.tablet',array('name' => 'Tablet'));
    }
       public function Dinning()
    {
        return view('categories.homefurniture.dinning',array('name' => 'Dinning'));
    }
     public function Furniture()
    {
        return view('categories.homefurniture.furniture',array('name' => 'Furniture'));
    }
     public function KitchenDinning()
    {
        return view('categories.homefurniture.kitchendinning',array('name' => 'Kitchen & Dinning'));
    }
     public function KitchenStorage()
    {
        return view('categories.homefurniture.kitchenstorage',array('name' => 'Kitchen & Storage'));
    }
     public function Lightning()
    {
        return view('categories.homefurniture.lightning',array('name' => 'Lightning'));
    }
     public function BabyCare()
    {
        return view('categories.kids.babycare',array('name' => 'BabyCare'));
    }
       public function ClothingKids()
    {
        return view('categories.kids.clothing',array('name' => 'Clothing'));
    }
       public function FootwearKids()
    {
        return view('categories.kids.footwear',array('name' => 'Footwear'));
    }
       public function School()
    {
        return view('categories.kids.school',array('name' => 'School'));
    }
     public function Toys()
    {
        return view('categories.kids.toys',array('name' => 'Toys'));
    }
     public function AccesoriesMens()
    {
        return view('categories.mens.accesories',array('name' => 'Accesories'));
    }
      public function ClothingMens()
    {
        return view('categories.mens.clothing',array('name' => 'Clothing'));
    }
      public function FootwearMens()
    {
        return view('categories.mens.footwear',array('name' => 'Footwear'));
    }
      public function PersonalMens()
    {
        return view('categories.mens.personal',array('name' => 'Personal Care Appliances'));
    }
      public function WatchesMens()
    {
        return view('categories.mens.watches',array('name' => 'Watches'));
    }
        public function AccesoriesWomen()
    {
        return view('categories.womens.accesories',array('name' => 'Accesories'));
    }
      public function ClothingWomen()
    {
        return view('categories.womens.clothing',array('name' => 'Clothing'));
    }
      public function FootwearWomen()
    {
        return view('categories.womens.footwear',array('name' => 'Footwear'));
    }
      public function PersonalWomen()
    {
        return view('categories.womens.personal',array('name' => 'Personal Care Appliances'));
    }
      public function WatchesWomen()
    {
        return view('categories.womens.watches',array('name' => 'Watches'));
    }
         public function JewelleryWomen()
    {
        return view('categories.womens.jewellery',array('name' => 'Jewellery'));
    }

}
