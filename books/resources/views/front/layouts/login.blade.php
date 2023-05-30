<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title','Panel Giriş')</title>
  <link rel="stylesheet" href="{{asset('back/')}}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('back/')}}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{asset('back/')}}/css/style.css">
  <link rel="shortcut icon" href="{{asset('back/')}}/images/favicon.png" />
</head>
<body>
  
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="{{asset('back/')}}/images/logo.svg">
              </div>
              <h3 style="text-align:center">Çeşit Kitap Giriş</h3>

              @if($errors->any())
              <div class="alert alert-danger">
                {{$errors->first()}}
              </div>
              @endif

              <form class="pt-3" method="post" action="{{route('admin.login.post')}}">
                @csrf
                <div class="form-group"> <h6>Mail Giriniz</h6>
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Adresi" >
                </div>
                <div class="form-group"><h6>Şifre Giriniz</h6>
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Şifre" >
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >GİRİŞ YAP</button>
                </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="{{asset('back/')}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('back/')}}/vendors/js/vendor.bundle.addons.js"></script>
  <script src="{{asset('back/')}}/js/off-canvas.js"></script>
  <script src="{{asset('back/')}}/js/misc.js"></script>

</body>
</html>
