<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{asset('back/')}}/index.html"><img src="{{asset('back/')}}/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{asset('back/')}}/index.html"><img src="{{asset('back/')}}/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch" >
        <div class="search-field d-none d-md-block" style="margin-left:180px;">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{asset('back/')}}/images/faces-clipart/pic-2.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Kullanıcı</p>

              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Sayfayı Yenile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('admin.logout')}}">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Çıkış Yap
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-warning"></span>
            </a>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="{{route('admin.logout')}}">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{asset('back/')}}/images/faces-clipart/pic-2.png" alt="profile">
                <span class="login-status online"></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>



          <li class="nav-item">
           <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title " >Kitap İşlemleri</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            </a>
            <div class="collapse"  id="ui-basic">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item">
                  <a class="nav-link"  href="{{route('admin.kitaplar.index')}}">Tüm Kitaplar</a>
                </li>

                <li class="nav-item">
                     <a class="nav-link"  href="{{route('admin.kitaplar.create')}}">Kitap Oluştur</a>
                   </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Sayfa İşlemleri</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-file menu-icon"></i>
            </a>

            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.sayfalar.index')}}"> Tüm Sayfalar </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sayfalar.create')}}"> Sayfa Oluştur </a></li>

              </ul>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.kategoriler.index')}}">
              <span class="menu-title">Kategori İşlemleri</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.kullanicilar.index')}}">
              <span class="menu-title">Kullanıcı İşlemleri</span>
              <i class="mdi mdi mdi-account-circle menu-icon"></i>
            </a>
          </li>

        </ul>
      </nav>
