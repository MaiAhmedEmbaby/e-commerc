
        @extends('admin.layout')
        @section('content')
        <div class="container " style="margin-top: 100px; padding:100px;" >

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="container text-center">Add Product</div>
        <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3" >
              <label for="exampleInputEmail1" class="form-label">Product Name</label>
              <input type="text" class="form-control" required=""
               name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter Product Name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Price</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="price"required="" >
            </div>
            <select class="form-select"  name="type"  aria-label="Default select example"required="" >
                <option selected>Select Department</option>
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="kides">Kides</option>
                <option value="accesorise">Accesorise</option>
              </select>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="file" required="">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form></div>
    <!-- plugins:js -->
    @endsection
