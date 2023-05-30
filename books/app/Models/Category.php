<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
     public function BookCount(){
       return $this->hasMany('App\Models\Book','category_id','id')->count();
     }

}
