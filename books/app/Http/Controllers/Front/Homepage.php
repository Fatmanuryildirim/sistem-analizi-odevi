<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Book;
use App\Models\Category;

class Homepage extends Controller
{
    public function __construct(){
      view()->share('pages',Page::orderby('order','ASC')->get());
      view()->share('categories',Category::inRandomOrder()->get());
    }
    public function index(){
      $data['books']=Book::orderby('created_at','DESC')->get();
      $data['categories']=Category::inRandomOrder()->get();
      $data['pages']=Page::orderby('order','ASC')->get();
      return view('front.homepage',$data);
    }
    public function single($slug){
        $book=Book::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kitap Bulunamadı!');
        $data['books']=Book::orderby('created_at','DESC')->get();
        $data['books']=$book;
        $data['categories']=Category::inRandomOrder()->get();
        $data['pages']=Page::orderby('order','ASC')->get();

        return view('front.single',$data);
    }

   public function category($slug){
     $category=Category::whereSlug($slug)->first() ?? abort(403,' Böyle Bir Kitap Bulunamadı!');
     $data['pages']=Page::orderby('order','ASC')->get();
     $data['category']=$category;
     $data['books']=Book::where('category_id',$category->id)->orderby('created_at','DESC')->get();
     $data['categories']=Category::inRandomOrder()->get();

     return view('front.category',$data);
   }

  public function page($slug){
    $page=Page::whereSlug($slug)->first() ?? abort(403,' Böyle Bir Kitap Bulunamadı!');
    $data['pages']=Page::orderby('order','ASC')->get();
    $data['page']=$page;
    return view('front.page',$data);
  }

   public function contact(){
     
     return view('front.contact');
   }

   public function contactpost(Request $request){
     print_r($request->post());
   }
}
