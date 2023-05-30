@isset($categories)
<div class="col-md-2" >
  <div class="card">
    <div class="card-header">
     Kategoriler
</div>
  <div class="list-group">

  @foreach($categories as $category)
    <li class="list-group-item">
  <a href="{{route('category',$category->slug)}}">{{$category->name}}</a> &nbsp; &nbsp;<span class="badge bg-danger float-right text-white">{{$category->bookCount()}}</span>
  </li>
  @endforeach

</div>
 </div>
</div>
@endif
