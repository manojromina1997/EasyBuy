<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='Product';

    protected $fillable = [
        'category_name',
        'subcategory_name', 
        'company_name', 
        'model_name',  
        'image_url',  
        'features',  
        'price', 
        'description',  
 


        
         

 
    ];

}
