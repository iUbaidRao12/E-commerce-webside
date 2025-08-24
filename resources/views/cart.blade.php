 @extends('product.layout')
 @section('content')

  <div class="row"><div class="col"style="height:100px;"></div></div>
<div class="container-fluid">
    {{-- <div class="row"><div class="col cartpagediv"></div></div> --}}
<div class="row pb-md-5 pb-3">

        <div class="col-md-7 col-12 cartimg">
            @foreach ($product->images as $img)
            <div><img class="w-100 pb-3" src="{{asset($img->image)}}" alt=""></div>
            @endforeach
    </div>


    <div class="col-md-5 col-12 ">
            <div class="row  justify-content-center pb-2"><div class="col-10"id="cart_text">{{$product->name}}</div></div>
            <div class="row  justify-content-center pb-2"><div class="col-10"style="font-weight: 600;font-family:serif;">PKR {{$product->price}}</div></div>
            <div class="row  justify-content-center pb-2"><div class="col-10"id="cart_text">{{$product->piece}}PIECE</div></div>
            <div class="row  justify-content-center pb-2"><div class="col-10"><hr class="p-2"></div></div>
<div class="row justify-content-center pb-2">
        <div class="col-10" id="cart_text">Quantity</div>
    </div>
<form action="{{ route('storesession',$product->id) }}" method="POST">
    @csrf
    <!-- Quantity input -->
    
    <div class="row pb-2 justify-content-center">
        <div class="col-10">
            <div class="input-group mb-3 w-25">
                <input type="number" 
                       name="quantity" 
                       class="form-control"
                       value="1" 
                       min="1">
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <div class="row justify-content-center pb-2">
        <div class="col-10 pt-2 pt-sm-0 d-flex justify-content-sm-start justify-content-center">
            <button id="lastpart5" type="submit">
                <span>ADD TO CART</span>
            </button>
        </div>
    </div>
    <div class="row">
    <div class="col">
        @if (session('message'))
        <div class="alert alert-secondary">
            {{session('message')}}
        </div>
            
        @endif
    </div>
</div>



</form>



            
             




              <div class="row pt-md-3 pt-2">
                <div class="col-12">
                     <div class="accordion accordion-flush border border-secondary border-opacity-25" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"id="cart_text">
            <i class="bi bi-tag text-dark pe-2"></i>Description
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Experience elegance with this embroidered chiffon set, featuring a delicately crafted shirt and dupatta that bring a graceful touch to your wardrobe. The comfortable grip trousers complete the ensemble, ensuring ease of movement. This complete outfit includes all accessories, making it a perfect choice for special occasions or refined everyday wear.</div>
        </div>
      </div>

      
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"id="cart_text">
            <i class="bi bi-box text-dark pe-2"></i>Product Details
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Shirt fabric : embroidered chiffon
Dupatta fabric : embroidered chiffon
Trouser: grip
Includes : shirt, trouser and dupatta with accessories</div>
        </div>
      </div>
 <div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" id="cart_text">
      <i class="bi bi-airplane-engines text-dark pe-2"></i>Delivery
    </button>
  </h2>
  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
Dispatch Time : Within 1 Week</div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingFour">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" id="cart_text">
      <i class="bi bi-arrow-counterclockwise text-dark pe-2"></i> Returns and Exchange
    </button>
  </h2>
  <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">We offer 10-days exchange policy starting from the date of order delivery.
In case of any damaged OR missing item, the concern must be raised within 48 hours to our customer care team for further assistance, otherwise the complaints cannot be accepted.</div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingFive">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" id="cart_text">
      <i class="bi bi-feather text-dark pe-2"></i>Care Instructions
    </button>
  </h2>
  <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
 Dry clean recommended
Iron the clothes at moderate temperature
Do not use any type of bleach or stain removing chemicals
Actual color may slightly vary from the image shown
Unstitched includes fabric only
Slight variation in colour and embellishments may occur after restocking of specific articles
Custom length or any other changing which varies from our standard size chart comes under customized stitching for stitched articles.
Pret/Ready to wear articles can not be customized
All the sleeveless dresses are stitched with sleeves by default until sleeveless is requested by the customer. Straight sleeves are attached.</div>
  </div>
</div>

</div></div></div>
        




        
</div>







</div></div>
 @endsection







