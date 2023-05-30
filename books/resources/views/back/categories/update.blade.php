@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">{{$categories->name}}  Kategorisini Güncelle </h4>
        <div class="table-responsive">
        <form method="post" action="{{route('admin.kategoriler.update',$categories->id)}}" enctype="multipart/form-data">
          @method('PUT')
      @csrf
          <div class="form-group">
            <label><h5>Kategori Adı</h5></label>
            <input type="text" name="name" class="form-control" value="{{$categories->name}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Başlık</h5> </label>
            <input type="text" name="slug" class="form-control" value="{{$categories->slug}}" required></input>
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
