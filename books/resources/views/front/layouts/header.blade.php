<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title','Kitap Dünyası')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="front/assets/favicon.png" />
        <!-- Bootstrap icons-->
        <link href="{{asset('front/')}}/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front/')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body>
      <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{route('homepage')}}">Çeşit Kitap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" href="{{route('homepage')}}">Anasayfa</a>
                        </li>
                        @foreach($pages as $page)
                        <li class="nav-item"><a class="nav-link active"  href="{{route('page',$page->slug)}}">{{$page->title}}</a>
                         </li>
                        @endforeach
                         <li class="nav-item"><a class="nav-link active " href="{{route('contact')}} ">İletişim</a>
                         </li>


                      </ul>

                </div>
            </div>

         <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Sepet
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                      </form>
                      <ul class="navbar-nav me-left">
                        <li class="nav-item"><a class="nav-link active " href="{{route('admin.login')}} ">Giriş Yap</a>
                        </li>

                   </ul>
        </nav>
        <header class="bg-dark py-5" style="background-image:url('@yield('bg',asset('front/image/bg.jpg'))')">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">@yield('title')</h1>
                </div>
              </div>

        </header>
