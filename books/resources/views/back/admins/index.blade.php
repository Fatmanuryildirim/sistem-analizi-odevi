@extends('back.layouts.master')
@section('content')

<div class="col">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="color:purple;">Tüm Kullanıcılar</h4>

        <div class="table-responsive">
          <h6 class="card-title" style="margin-left:250px;"><strong>{{$admins ->count()}}</strong> Kullanıcı Bulundu.</h6>
          <table class="table">
            <thead>
              <tr>
                <th>
                  <b>Kullanıcı Adı:</b>
                </th>

                <th>
                  <b>Kullanıcı Maili:</b>
                </th>
                <th>
                  <b>Kullanıcı Şifresi:</b>
                </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                  @foreach($admins as $admin)


                <td>
                  {{$admin->name}}
                </td>

                <td>
                  {{$admin->email}}
                </td>

                <td>
                  {{$admin->password}}
              </td>
                <td>
                  <a href="{{route('admin.kullanicilar.create')}}" title="ekle" class="btn btn-sm btn-danger"><i class="mdi mdi-plus-box" ></i></a>
                  <a href="{{route('admin.kullanicilar.edit',$admin->id)}}" title="güncelle" class="btn btn-sm btn-primary"><i class="mdi mdi-lead-pencil" ></i></a>
                  <a href="{{route('admin.delete',$admin->id)}}" title="sil" class="btn btn-sm btn-danger"><i class="mdi mdi-delete" ></i></a>
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
