@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">Tüm kategoriler</h4>

        <div class="table-responsive">
          <h6 class="card-title" style="margin-left:250px;"><strong>{{$categories->count()}}</strong> Sayfa Bulundu.</h6>
          <table class="table">
            <thead>
              <tr>
                <th>
                  <b>kategori Adı:</b>
                </th>

                <th>
                  <b>Kategori Başlığı:</b>
                </th>


              </tr>
            </thead>
            <tbody>
              <tr>
                  @foreach($categories as $category)

                <td>
                  {{$category->name}}
                </td>

                <td>
                  {{$category->slug}}
                </td>

                <td>
                  <a href="{{route('admin.kategoriler.create')}}" title="ekle" class="btn btn-sm btn-danger"><i class="mdi mdi-plus-box" ></i></a>
                  <a href="{{route('admin.kategoriler.edit',$category->id)}}" title="güncelle" class="btn btn-sm btn-primary"><i class="mdi mdi-lead-pencil" ></i></a>
                  <a href="{{route('admin.category.delete', $category->id)}}" title="sil" class="btn btn-sm btn-danger"><i class="mdi mdi-delete" ></i></a>
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
