@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">{{$books->name}}  Kitabını Güncelle </h4>
        <div class="table-responsive">
        <form method="post" action="{{route('admin.kitaplar.update',$books->id)}}" enctype="multipart/form-data">
          @method('PUT')
      @csrf
          <div class="form-group">
            <label><h5>Kitap Adı</h5></label>
            <input type="text" name="name" class="form-control" value="{{$books->name}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Kitap Fotoğrafı</h5> </label>
            <img src="{{asset($books->image)}}" class="img-thumbnail rounded" width="200" />
            <input type="file" name="image" class="form-control"></input>
          </div>

          <div class="form-group">
            <label> <h5>Kategorisi</h5> </label>
            <input type="text" name="category_id" class="form-control" value="{{$books->category_id}}" required></input>
          </div>
          <div class="form-group">
            <label> <h5>Açıklama</h5> </label>
            <input type="text" name="content" class="form-control" value="{{$books->content}}" required></input>
          </div>
          <div class="form-group">
            <label> <h5>Başlık</h5> </label>
            <input type="text" name="slug" class="form-control" value="{{$books->slug}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Kitap Kodu</h5> </label>
            <input type="text" name="book_code" class="form-control" value="{{$books->book_code}}" required></input>
          </div>

          <div class="form-group">
            <label> <h5>Kitap Fiyatı</h5> </label>
            <input type="text" name="price" class="form-control" value="{{$books->price}}" required></input>
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
