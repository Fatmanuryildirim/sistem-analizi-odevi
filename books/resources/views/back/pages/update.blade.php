@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">{{$pages->name}}  Sayfasını Güncelle </h4>
        <div class="table-responsive">
        <form method="post" action="{{route('admin.sayfalar.update',$pages->id)}}" enctype="multipart/form-data">
          @method('PUT')
      @csrf
          <div class="form-group">
            <label><h5>Sayfa Adı</h5></label>
            <input type="text" name="title" class="form-control" value="{{$pages->title}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Sayfa Fotoğrafı</h5> </label>
            <img src="{{asset($pages->image)}}" class="img-thumbnail rounded" width="200" />
            <input type="file" name="image" class="form-control"></input>
          </div>

          <div class="form-group">
            <label> <h5>içerik</h5> </label>
            <input type="text" name="content" class="form-control" value="{{$pages->content}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Başlık</h5> </label>
            <input type="text" name="slug" class="form-control" value="{{$pages->slug}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Sırası</h5> </label>
            <input type="text" name="order" class="form-control" value="{{$pages->order}}" required></input>
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
