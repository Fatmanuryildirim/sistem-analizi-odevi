<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Book;

class Book extends Model
{
  function getCategory(){
     return $this->hasOne('App\Models\Category','category_id','id');
     

  }
}
