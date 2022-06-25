@extends('admin.layout')
@section('content')

<style>

    .center {
      margin: auto;
      width: 50%;
      padding: 10px;
    }
    .cat{
        color: black;
    }


     </style>

<div class="container-fluid page-body-wrapper" style="margin-top: 70px; padding-butoom:30px;">
    <div class="container text-center" >

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
            {{session()->get('message')}}
        </div>
        @endif


        <div class="center mt-5 mb-4" style="font-size: 20px;">
            <h1>Add Catigory</h1>
            <form action="{{url('/add_catagory')}}"  method="POST">

                @csrf

                <input type="text" name="catagory" placeholder="write catigory name" class="
                cat">
                <input type="submit" name="submit" value="Add Catigory" class="btn btn-primary">
            </form>
        </div>


        <table class="center">
        <tr style="background-color: gray;">
            <td style="padding: 10px;">Catagory Name</td>
            <td style="padding: 10px;">Action</td>

        </tr>
        @foreach ($data as $data)


        <tr style="background-color: black;">
             <td style="padding: 10px;">{{$data->catagory_name}}</td>
            <td style="padding: 10px;"><a onclick="return confirm('Are You Sure To Delete')" href="{{url('delete_catagory',$data->id)}}"  class="btn btn-danger">Delete</a></td>
        </tr>
         @endforeach

        </table>
    </div>
</div>

@endsection
