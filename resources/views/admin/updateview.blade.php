@extends('admin.layout')
<base href="/puplic">
@section('content')

<div class="container " style="margin-top: 100px; padding:100px; coler:black;" >

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
        {{session()->get('message')}}
    </div>
    @endif
<form action="{{url('updateproduct',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Product Name</label>
      <input type="text" class="form-control" required=""
       name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="price"required="" value="{{$data->price}}" >
    </div>
    <select class="form-select"  name="type"  aria-label="Default select example"required="" value="{{$data->type}}" >
        <option selected>Select Department</option>
        <option value="men">Men</option>
        <option value="women">Women</option>
        <option value="kides">Kides</option>
        <option value="accesorise">Accesorise</option>
      </select>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Old Image</label>
        <img height="100px" width="100px" src="/productimage/{{$data->image}}">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Change the image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="file" required="">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form></div>




@endsection
