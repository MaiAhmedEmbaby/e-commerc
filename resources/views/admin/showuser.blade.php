
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper" style="margin-top: 70px; padding-butoom:30px;">
        <div class="container" align="center">

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                {{session()->get('message')}}
            </div>
            @endif

        <!-- partial -->
        <table  style="coler:white; !important">
            <thead>
              <tr style="background-color: black; align-items:center;">
                <th style="padding: 50px">Name</th>
                <th style="padding: 50px">Email</th>
                <th style="padding: 50px">Phone</th>
                <th style="padding: 50px">Address</th>
                <th style="padding: 50px">Delete</th>


              </tr>
            </thead>

            <tbody>

                @foreach ($data as $user)


                <tr style="background-color: rgba(34, 9, 255, 0.59);">
                  <td style="padding: 30px" >{{$user->name}}</td>
                  <td style="padding: 30px">{{$user->email}}</td>
                  <td style="padding: 30px">{{$user->phone}}</td>
                  <td style="padding: 30px">{{$user->address}}</td>
                   <td>
                     <a class="btn btn-danger" href="{{url('deleteuser',$user->id)}}">Delete</a>
                </td>


            </tr>
            @endforeach

            </tbody>
          </table>

        </div>
      </div>



    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>
