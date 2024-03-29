@extends('layouts.app')

@section('content')
<div class="container">
    <main role="main">

    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    @if(count($sliders)>0)
    @foreach($sliders as $key=> $slider)

    <div class="carousel-item {{$key == 0 ? 'active' : ''}} ">
      <img src="{{asset('slider/'.$slider->image)}}" >
    </div>
    @endforeach
    @endif

    

  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  <div class="container">
  <h2 id="demotext">Category</h2>
  @foreach(App\Category::all() as $cat)
      <a href="{{route('product.list',[$cat->slug])}}"> <button class="btn btn-info">{{$cat->name}}</button></a>
  @endforeach

  <div class="album py-5 bg-light">
    <div class="container">
        <h2>Products</h2>

      <div class="row">
      
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset('product/'.$product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,120))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{route('product.view',[$product->id])}}"> <button type="button" class="btn btn-sm btn-outline-success">View</button>
                </a>
                
                <a class="addToCart" id="{{$product->id}}">

                    <button type="button" class="btn btn-sm btn-outline-primary">
                    {{-- this is a comment {{$product->id}}s --}} Add to cart
                    </button>

                </a>
                
                </div>
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <center>
      <a href="{{route('more.product')}}"><button class="btn btn-success">More Product</button>
      </a>
    </center>
  
    
   
    </div>

  <div class="jumbotron">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        @foreach($randomActiveProducts as $product)
        <div class="col-4">
                    <div class="card mb-4 shadow-sm">
            <img src="{{asset('product/'.$product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,120))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success">View</button>
            <a href="">
            <a href="{{route('add.cart',[$product->id])}}">  <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a>
            </a>
                </div>
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
    <div class="carousel-item ">
      <div class="row">
        @foreach($randomItemProducts as $product)

        <div class="col-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset('product/'.$product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,120))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('product.view',[$product->id])}}">  <button type="button" class="btn btn-sm btn-outline-success">View</button></a>
                 <a href="{{route('add.cart',[$product->id])}}"> 
                <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a>
                </div>
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
    
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>




</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
   
  </div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
     $("document").ready(function(){
     $(".addToCart").click(function(e){
        e.preventDefault();
        var product = $(this).attr('id');
       // alert(product)
        $.ajax({
            //  headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            type: "GET",
            url: "http://localhost:8000/addToCart/"+product,
           // data: { product: product },
            success: function (data) {

            },
            error: function (data) {
             console.log(data)
            }
          });
     })


    });
</script>
@endsection