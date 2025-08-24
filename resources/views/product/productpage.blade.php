 @extends('product.layout')
 @section('content')
<div class="row"><div class="col"style="height:100px;"></div></div>
  <div class="row g-0 mx-0 align-items-sm-end align-items-center" id="page2part1">
    <div class="col-12 text-center pb-sm-5 pt-3">
      <h1>{{ $category->name }}</h1>
    </div>
  </div><hr>

<div class="container pb-5">
<h2></h2>

    <div class="row">
        @forelse($category->products as $product)
            <div class="col-md-4 mb-4">
                
        
                <div class="card">
                    {{-- First image only --}}
                    @if($product->images->first())
                    <a href="{{route('addtocart',$product->id)}}">
                    <img src="{{ asset($product->images->first()->image) }}" class="card-img-top" alt="..."></a>
                    @endif
                    <div class="card-body ">
                    <div class="col-12 text-center"> <h5 class="card-title">{{ $product->name }}</h5></div>
                    <div class="col-12 text-center"> <p class="card-text">Price: Rs {{ $product->price }}</p></div>
                    <div class="col-12 text-center"><p class="card-text">Pieces: {{ $product->piece }}</p></div> 
                    </div>
                </div>
            </div>
        @empty
            <p>No products found in this category.</p>
        @endforelse
    </div>
</div>






    
 @endsection