@extends('front.layouts.master')
@section('title','Kitap Dünyası')
@section('content')
<br>
    <div class="col-md-10">
           <div class="container px-4 px-lg-5 mt-5" style="margin-left:40px;">
               <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                 @foreach($books as $book)
                 <a href="{{route('single',$book->slug )}}">
                   <div class="col mb-5">
                       <div class="card h-100">
                           <!-- Product image-->
                           <img class="card-img-top" src="{{$book->image}}" alt="..." />
                           <!-- Product details-->
                           <div class="card-body p-4">
                               <div class="text-center">
                                   <!-- Product name-->
                                   <h5 class="fw-bolder">{{$book->name}}</h5>
                                   <!-- Product price-->
                                   {{$book->price}} TL
                               </div>
                             </div>
                           </div> </div>
                         @endforeach
                         @include('front.widgets.categorywidgets')
                         </div> </div> </div>
       @endsection
