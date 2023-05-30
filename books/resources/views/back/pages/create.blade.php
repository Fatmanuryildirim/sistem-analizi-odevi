@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">Sayfa Oluştur</h4>
        <div class="table-responsive">
        <form method="post" action="{{route('admin.sayfalar.store')}}" enctype="multipart/form-data">
      @csrf
          <div class="form-group">
            <label><h5>Sayfa Adı</h5></label>
            <input type="text" name="title" class="form-control" required></input>
          </div>

          <div class="form-group">
            <label><h5>Sayfa Fotoğrafı</h5> </label>
            <input type="file" name="image" class="form-control" required></input>
          </div>

          <div class="form-group">
            <label><h5>İçerik</h5> </label>
            <input type="text" name="content" class="form-control" required></input>
          </div>


          <div class="form-group">
            <label><h5>Başlık</h5></label>
            <input type="text" name="slug" class="form-control" required></input>
          </div>

          <div class="form-group">
            <label><h5>Sırası</h5></label>
            <input type="text" name="order" class="form-control" required></input>
          </div>

          <div class="form-group">
            <button type="submit"  class="btn btn-primary btn-block">Oluştur</button>
          </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
