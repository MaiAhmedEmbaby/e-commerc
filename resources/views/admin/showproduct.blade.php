@extends('admin.layout')
@section('content')
<div class="container-fluid page-body-wrapper" style="margin-top: 70px; padding-butoom:30px;">
<div class="container" align="center">

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
        {{session()->get('message')}}
    </div>
    @endif

<table  style="coler:white; !important">
  <thead>
    <tr style="background-color: black; align-items:center;">
      <th style="padding: 50px">Name</th>
      <th style="padding: 50px">Price</th>
      <th style="padding: 50px">Type</th>
      <th style="padding: 50px">Image</th>
      <th style="padding: 50px">Update</th>
      <th style="padding: 50px">Delete</th>

    </tr>
  </thead>
  <tbody>

    @foreach ($data as $product)


    <tr align="center" style="background-color: rgba(34, 9, 255, 0.59);">
      <td >{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->type}}</td>
      <td><img height="140px" width="140px" src="/productimage/{{$product->image}}"></td>
    <td>
        <a class="btn btn-success" href="{{url('updateview',$product->id)}}">Update</a>
    </td>
    <td>
        <a class="btn btn-danger" onclick="return confirm('Are You Sure')"
         href="{{url('deleteproduct',$product->id)}}">Delete</a>
    </td>



    </tr>
  @endforeach

  </tbody>
</table>

</div>
</div>




@endsection
