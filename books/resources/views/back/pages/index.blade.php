@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">Tüm Sayfalar</h4>

        <div class="table-responsive">
          <h6 class="card-title" style="margin-left:250px;"><strong>{{$pages->count()}}</strong> Sayfa Bulundu.</h6>
          <table class="table">
            <thead>
              <tr>
                <th>
                  <b>Sayfa Başlığı:</b>
                </th>


                <th>
                  <b>Sayfa İçeriği:</b>
                </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                  @foreach($pages as $page)


                <td>
                  {{$page->title}}
                </td>

                <td>
                  {{$page->content}}
                </td>

                <td>

                  <a href="{{route('admin.sayfalar.edit',$page->id)}}" title="güncelle" class="btn btn-sm btn-primary"><i class="mdi mdi-lead-pencil" ></i></a>
                  <a href="{{route('admin.page.delete',$page->id)}}" title="sil" class="btn btn-sm btn-danger"><i class="mdi mdi-delete" ></i></a>
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
