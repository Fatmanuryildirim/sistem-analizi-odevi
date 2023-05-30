@extends('front.layouts.master')
@section('title','İletişim')
@section('content')
<br>
@include('front.widgets.categorywidgets')
             <html>
             <head>
             </head>
             <body>
                 <div class="container">
                     <form id="contact" method="post" action="{{route('contact.post')}}">
                       @csrf
                         <h2>İletişim Sayfası</h2>
                         <div class="form-control">
                             <input placeholder="Adınız Soyadınız" type="name" required >
                         </div>
                         <div class="form-control">
                             <input placeholder="E-Posta Adresiniz" type="email" required>
                         </div>
                         <div class="form-control">
                             <input placeholder="Konu" type="text" required>
                         </div>
                         <div class="form-control">
                             <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
                         </div>
                         <div class="form-control">
                             <button name="submit" type="submit" id="submit">GÖNDER</button>

                         </div>
                     </form>
                 </div>
             </body>
             </html>
                          <br>
                          <br>
                          <br>
      @endsection
