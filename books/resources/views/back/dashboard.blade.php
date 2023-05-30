@extends('back.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span>
        @yield('title','Kitap DünyasıYönetim Paneli')
      </h3>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('back/')}}/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Weekly Sales
              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">$ 15,0000</h2>
            <h6 class="card-text">Increased by 60%</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('back/')}}/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Weekly Orders
              <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">45,6334</h2>
            <h6 class="card-text">Decreased by 10%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('back/')}}/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Visitors Online
              <i class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">95,5741</h2>
            <h6 class="card-text">Increased by 5%</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Visit And Sales Statistics</h4>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Traffic Sources</h4>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Fotoğraf Galerimiz</h4>
            <div class="d-flex">
              <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
              </div>
              <div class="d-flex align-items-center text-muted font-weight-light">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-6 pr-1">
                <img src="{{{asset('back/')}}}/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                <img src="{{asset('back/')}}/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
              </div>

              <div class="col-6 pl-1">
                <img src="{{asset('back/')}}/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                <img src="{{asset('back/')}}/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
