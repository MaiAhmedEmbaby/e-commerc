 @extends('user.layout')

 @section('content')
 <style>

.center {
  margin: auto;
  width: 70%;
  border: 3px solid black;
  padding: 10px;
}


 </style>
<!--start allert message-->
 <div style="padding: 100px; align-item:center;" >
    <div class="container text-center">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
            {{session()->get('message')}}
        </div>
        @endif
        <!--end alert message-->


        <form  action="{{url('order')}}"  method="POST">

            @csrf
        <table class="center">
        <tr style="background-color: black;">
            <td style="padding: 20px; color:white; font-size:20px">Product Name</td>
            <td style="padding: 20px; color:white; font-size:20px" >Quantity</td>
            <td  style="padding: 20px; color:white; font-size:20px">Price</td>
            <td  style="padding: 20px; color:white; font-size:20px">Action</td>
        </tr>
        @foreach ($cart as $carts)


        <tr style="background-color: black">
            <td style="padding: 10px; color:white;">
                <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                {{$carts->product_title}}</td>
            <td  style="padding: 10px; color:white;">
                <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                {{$carts->quantity}}</td>
            <td  style="padding: 10px; color:white;">
                <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                {{$carts->price}}</td>
            <td  style="padding: 10px; color:white;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a></td>

        </tr>
        @endforeach
    </table>

<button class="btn btn-success">Confirm Order</button>


</form>
 </div>
 </div>

 @endsection
