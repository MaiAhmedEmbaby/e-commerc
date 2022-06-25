<section>
    <div class="container text-center mt-4"><strong>Featured Items</strong></div>
<div class="container text-center">
  <p>
    <span><a class= "" href="#">All</a></span>
    <span><a class= "" href="#">Man</a></span>
    <span><a class= "" href="#">Women</a></span>
    <span><a class= "" href="#">Kides</a></span>
</p>

</div>



<div class="container mt-4 " id="footwear">
  <div class="row justify-content-center">

<form class="form-inline" action="{{url('search')}}" method="get">
    @csrf
    <div class="container">
        <div class="row">
    <div class="col-md-5 col-sm-10">
<input class="form-control" type="search" name="search" placeholder="search">
    </div>
    <div class="col-2">
<input type="submit" value="search" style="color: black;" class="btn btn-success">
    </div></div></div>
</form>

    @foreach ($product as $products)

    <div class=" col-lg-3 col-sm-6 mb-5 text-center card ">
      <div class="sale">{{$products->price}}</div>
      <img  style="height: 300px" src="productimage/{{$products->image}}" class="card-img-top img-tow " alt="...">
      <div class="card-body">
        <h5 class="card-title mt-4">{{$products->name}}</h5>
        <span style="color: rgb(255, 0, 183);">
          <i class="fas fa-star"></i></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
        </span>
        <span>
          <i class="fa-solid fa-star"></i>
        </span>
        <p style="border-radius: 50%;">
          <i class="fa-solid fa-heart"></i><i class="fa-solid fa-cart-shopping"></i><i class="fa-solid fa-share-nodes"></i>
        </p>

       <form action="{{url('addcart',$products->id)}}" method="POST">
        @csrf
        <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">
        <br>
        <input class="btn btn-success" style="color: black" type="submit" value="Add Cart">


       </form>

       </div>
       </div>
    @endforeach

    @if (method_exists($product,'links'))

    <div class="d-flex justify-content-center">
    {!!$product->links()!!}
    </div>

   @endif
     </div>
  </div>
</section>
