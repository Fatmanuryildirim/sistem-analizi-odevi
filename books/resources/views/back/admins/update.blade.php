@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">{{$admins->name}}  Kullanıcısını Güncelle </h4>
        <div class="table-responsive">
        <form method="post" action="{{route('admin.kullanicilar.update',$admins->id)}}" enctype="multipart/form-data">
          @method('PUT')
      @csrf
          <div class="form-group">
            <label><h5>Kullanıcı Adı</h5></label>
            <input type="text" name="name" class="form-control" value="{{$admins->name}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Kullanıcı Maili</h5> </label>
            <input type="text" name="email" class="form-control" value="{{$admins->email}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Kullanıcı Şifresi</h5> </label>
            <input type="text" name="password" class="form-control" value="{{$admins->password}}" required></input>
          </div>

          <div class="form-group">
            <button type="submit"  class="btn btn-primary btn-block">Güncelle</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
