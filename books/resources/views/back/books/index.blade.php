@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">Tüm Kitaplar</h4>

        <div class="table-responsive">
          <h6 class="card-title" style="margin-left:250px;"><strong>{{$books->count()}}</strong> Kitap Bulundu.</h6>
          <table class="table">
            <thead>
              <tr>
                <th>
                  <b>Fotoğraf:</b>
                </th>

                <th>
                  <b>Kitap Adı:</b>
                </th>
                <th>
                  <b>Kitap Kodu:</b>
                </th>

                <th>
                  <b>Fiyatı:</b>
                </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                  @foreach($books as $book)
                <td>
                <img src="{{$book->image}}" width="100" >
                </td>

                <td>
                  {{$book->name}}
                </td>

                <td>
                  {{$book->book_code}}
                </td>

                <td>
                  {{$book->price}}
                </td>
                <td>
                  <a href="{{route('admin.kitaplar.edit',$book->id)}}" title="güncelle" class="btn btn-sm btn-primary"><i class="mdi mdi-lead-pencil" ></i></a>
                  <a href="{{route('admin.delete',$book->id)}}" title="sil" class="btn btn-sm btn-danger"><i class="mdi mdi-delete" ></i></a>
                </td>
              </tr>
                  @endforeach
                </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
