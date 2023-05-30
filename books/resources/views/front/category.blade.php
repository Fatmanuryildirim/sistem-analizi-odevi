@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi |' .count($books). ' kitap bulundu.')
@section('content')
    <br>

    <section class="py-4">
           <div class="container px-4 px-lg-5 mt-5" >
               <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                 @if(count($books)>0)
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
                           </div>
                         </div>
                           @endforeach
                 @else
<div class="alert-alert-danger">
  <h1>Bu Kategoriye Ait Kitap Bulunamadı!.. </h1>
</div>
                @endif
    </div>
  </div>
    </section>
       @endsection
