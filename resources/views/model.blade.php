 @extends('layouts.default')

 @section('content')  
      
<div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">About
          <strong>Business Casual</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="img/slide-2.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Our
          <strong>Team</strong>
        </h2>
        <hr class="divider">
        <div class="row">
            @foreach($products as $product)
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('img/9055/9055prev.jpg') }}" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">{{ $product->product }} {{ $product->name }}
                  <small class="text-muted">{{ $product->model }}</small>
                </h4>
              </div>
            </div>
          </div>
            <br>
            @endforeach
    
        </div>
       
   
       
      </div>

    </div>
    
   @endsection