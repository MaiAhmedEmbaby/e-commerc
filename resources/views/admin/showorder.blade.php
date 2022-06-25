@extends('admin.layout')
@section('content')

<style>

    .center {
      margin: auto;
      width: 80%;
      border: 3px solid black;
      padding: 10px;
    }


     </style>

<div class="container-fluid page-body-wrapper" style="margin-top: 70px; padding-butoom:30px;">
    <div class="container text-center" >

        <table class="center">
        <tr style="background-color: gray;">
            <td style="padding: 10px;">Customer Name</td>
            <td style="padding: 10px;">Phone</td>
            <td style="padding: 10px;">Address</td>
            <td style="padding: 10px;">Product</td>
            <td style="padding: 10px;">Price</td>
            <td style="padding: 10px;">Quantity</td>
            <td style="padding: 10px;">Status</td>
            <td style="padding: 10px;">Action</td>
        </tr>

        @foreach ($order as $orders)

        <tr  style="background-color: black">
        <td style="padding: 10px;" >{{$orders->name}}</td>
        <td style="padding: 10px;">{{$orders->phone}}</td>
        <td style="padding: 10px;">{{$orders->address}}</td>
        <td style="padding: 10px;">{{$orders->product_name}}</td>
        <td style="padding: 10px;">{{$orders->price}}</td>
        <td style="padding: 10px;">{{$orders->quantity}}</td>
        <td style="padding: 10px;">{{$orders->status}}</td>
        <td style="padding: 10px;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a></td>
        </tr>

        @endforeach

        </table>


    </div>
</div>
@endsection
