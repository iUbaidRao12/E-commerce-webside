<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<!-- part one -->

 <div class="container-fluid bg-dark">
        <div class="row justify-content-center">
            <div  class="col-auto pb-sm-2 pb-1 pt-sm-2 pt-1">
               <span class=" p_1  ">FOR INTERNATIONAL WEBSITE VISIT <a href="" class="a_1 ">WWW.BAROQUE.COM.PK</a></span>
            </div>
            
        </div>
    </div>

<!-- part one end -->
<!-- part two start -->
<div class="container-fluid"style="position:relative;">

<div class="row "style="position:sticky;top:0px; z-index:1000; ">
    <div class='col-12 'style="position:relative;">

<div class="row "id="rowtwo" style="background-color: #f8f9fa;border-bottom: 1px solid rgba(0, 0, 0, 0.13);">
    {{-- session1 --}}
    <div  class="col-4">
            <div class="row  part_2 align-items-center d-flex justify-content-between">
            <div class="col-auto">
            <i class="bi bi-list ham_size "onclick=" hamburger.style.transform='translateX(0%)';hamburger.style.display='block';"></i>
        </div></div>
{{-- hamburger row start --}}
<div class="row">
<div class="col-4" id="hamburger">
<div class="row bg-white justify-content-center">
<div class="col-10 mb-md-3 "id="ham-icon"><i class="bi bi-x-lg"onclick="hamburger.style.display='block'; hamburger.style.transform='translateX(-100%)';catetypes.style.display='none';catetypes.style.transform='translateX(-100%)';"></i></div>


<div class="row"id="scrol">
    <div class="col">
@foreach($allcate as $req)
       <div class="row justify-content-center"><div class="col-10  ham-items">

       <a class="ham-items"href="{{route('product',$req->id)}}"id="ham-item2">{{$req->name}}</a>
       <i class="bi bi-arrow-right"style="position: absolute;right:10px;"></i></div></div> 
       <div class="row d-flex justify-content-center "><div class="col-10 m-sm-2" id="ham-line"></div></div>
@endforeach


</div></div>
<div class="row">
<div class="col-12 d-flex pb-2 justify-content-center">

    <a href="https://web.facebook.com/pages/creation/?_rdc=1&_rdr"  target="_blank">
        <i class="bi bi-facebook  img  img-fluid " id="iconhover"></i></a>
    <a href="https://www.instagram.com/"target="_blank">
        <i class="bi bi-instagram ps-sm-3 p-1 img  img-fluid " id="iconhover"></i></a>
    <a href="https://www.messenger.com/"target="_blank">
        <i class="bi bi-messenger ps-sm-3 p-1 img  img-fluid" id="iconhover"></i></a>
    <a href="https://www.google"target="_blank">
        <i class="bi bi-twitter ps-sm-3 p-1 img  img-fluid" id="iconhover"></i></a>
    <a href="https://www.youtube.com/"target="_blank">
        <i class="bi bi-youtube ps-sm-3 p-1 img  img-fluid" id="iconhover"></i></a>
    <a href="https://www.snapchat.com/"target="_blank">
        <i class="bi  bi-snapchat ps-sm-3 p-1 img  img-fluid" id="iconhover"></i></a>
 </div></div>
</div></div></div> 

 {{-- hamburger row end --}}
 
</div>

{{-- session2 --}}

        <div class="col-4 justify-content-center d-flex "style="position:relative">

        <div class="row justify-content-center  align-items-center part_2 ">
        <div class="col-auto "><img src="{{ asset('image/LOGO.png') }}"class=" img-fluid logo">
        </div></div></div> 
        {{-- session3 --}}
        <div class="col-4 ">
            <div class="row justify-content-end  align-items-center part_2 ">
            <div class="col-auto country">Pakistan<i class="bi bi-chevron-down ps-1 "></i></div>
            <div class="col-auto login-icon"><i class="bi bi-person icons_size"></i></div>
            <div class="col-auto"><i class="bi bi-search icons_size"></i></div>
            
            <div class="col-auto"style="position:relative">
                <i class="bi bi-bag icons_size cart "onclick="addtocart.style.transform='translateX(0%)'; addtocart.style.display='block';"></i>
                <div class="row"><div class="col-auto"id="ordercount">{{ session('countpro', 0) }}</div></div>
            </div>
        </div></div></div>

    <div class="row justify-content-end">
                <div class="col"id="addtocart">
                    <div class="row p-2 ">
                        <div class="col-6 cart_text ps-md-3 ps-1">CART</div>
                        <div class="col-6 text-end fs-5"><i class="bi bi-x-lg"
                            onclick="addtocart.style.transform='translateX(100%)';"
                            ></i></div>
                    </div>
                    <hr>
                    <div class="row"><div class="col text-center">You are eligible for free shipping.</div></div>
                    <hr>
                    <div class="row">
                        <div class="col-12"id="scrol2">
@php
    $cartItems = session('cart', []);
@endphp

@if(count($cartItems) > 0)
    <ul>
    @foreach($cartItems as $productId => $item)

<div class="row pb-sm-2 pb-1">
    <div class="col-5 "><img class="img-fluid w-100" src="{{ asset($item['product']->images->first()->image ?? 'default.jpg') }}" 
                     alt="Product Image" width="100"></div>
    <div class="col-7 "style="position:relative;">
<div class="row">
    <div class="col-12"id="cartpage-position">

     <div class="row  justify-content-center pb-2"><div class="col-10"id="cart_textcart">{{ $item['product']->name }}</div></div>
            <div class="row  justify-content-center pb-2"><div class="col-10"style="font-weight: 400;font-family:serif;fs-3">- PKR {{ $item['product']->price }}</div></div>
             <div class="row pb-2 justify-content-center">
        <div class="col-md-6 col-8">
            <div class="input-group mb-3 w-100">
                <input type="number" 
                       name="quantity" 
                       class="form-control"
                       value="{{ $item['quantity'] }}" 
                       min="1">
            </div></div>
        <div class="col"><a href="{{route('removesession',$productId)}}"style="color:black">Remove</a></div>
        </div></div></div></div></div>
    @endforeach
    </ul>
@else
    <p>Your cart is empty</p>
@endif
</div></div>
<hr>
</div></div></div></div>
{{-- part two end --}}
<div class="row"><div class="col"style="height:100px;"></div></div>
@yield('content')

{{-- footer start --}}

<div class="container-fluid border">
    <div class="row d-flex justify-content-sm-center">

             <div class="col-sm-4 ps-5 justify-content-center">
             <div class="row d-flex justify-content-start ">
             <div class="col-auto r">
             <div class="row"><div class=" col-auto mb-1 fs-5 fw-samibold  text-dark "id="ptheading"style="font-family:initial-scale;">ABOUT</div></div>              
             <div class="row"><div class="col-auto  mb-1 d-flex   "><a href="#"  id="pt">Who We Are</a></div></div>      
             <div class="row"><div class="col-auto  mb-1 d-flex   "><a href="#"  id="pt">Our Responsibility</a></div></div>         
             <div class="row"><div class="col-auto  mb-1 d-flex   "><a href="#"  id="pt">Service We Provide</a> </div></div>         
             <div class="row"> <div class="col-auto  mb-1 d-flex   "><a href="#"  id="pt">Careers</a></div></div>        
             <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Legal</a></div></div>         
             </div></div></div>

        <div class="col-sm-4 ps-5 pt-3 pt-sm-0 justify-content-center">
            <div class="row d-flex justify-content-start  ">
                <div class="col-auto ">
                <div class="row"><div class=" col-auto mb-1 fs-5 fw-samibold text-dark "id="ptheading"style="font-family:initial-scale;">CUSTOMER SERVICE</div></div>              
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Contact Us</a></div></div>      
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Dispatch Timeline</a></div></div>         
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Email: info@baroque.pk</a> </div></div>         
                <div class="row"> <div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Call: +92 325 700 1111</a></div></div>        
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">WhatsApp: +92 325 7001111</a></div></div>         
                </div></div></div>

        <div class="col-sm-4 ps-5 pt-3 pt-sm-0 justify-content-center">
            <div class="row d-flex justify-content-start  ">
                <div class="col-auto ">
                <div class="row"><div class=" col-auto mb-1 fs-5 fw-samibold text-dark "id="ptheading"style="font-family:initial-scale;">POLICIES</div></div>              
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Privacy Policy</a></div></div>      
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Refund Policy</a></div></div>         
                <div class="row"><div class="col-auto  mb-1 d-flex "><a href="#"  id="pt">Shipping Policy</a> </div></div>         
                <div class="row"> <div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Terms of Service</a></div></div>        
                <div class="row"><div class="col-auto  mb-1 d-flex  "><a href="#"  id="pt">Exchange Information</a></div></div>         
                </div></div></div></div></div>



 
 <div class="row  d-flex ps-0 ps-sm-5  w-100">
    <div class="col-10  pb-2 pt-5 d-flex justify-content-sm-start justify-content-center ">

        <a href="https://web.facebook.com/pages/creation/?_rdc=1&_rdr"  target="_blank">
            <i class="bi bi-facebook  img p-sm-4 img-fluid" id="iconhover2"></i></a>
        <a href="https://www.instagram.com/"target="_blank">
            <i class="bi bi-instagram ps-sm-3 p-2 p-sm-4 img  img-fluid" id="iconhover2"></i></a>
        <a href="https://www.messenger.com/"target="_blank">
            <i class="bi bi-messenger ps-sm-3 p-2 p-sm-4 img  img-fluid" id="iconhover2"></i></a>
        <a href="https://www.google"target="_blank">
            <i class="bi bi-twitter ps-sm-3 p-2 p-sm-4 img  img-fluid" id="iconhover2"></i></a>
        <a href="https://www.youtube.com/"target="_blank">
            <i class="bi bi-youtube ps-sm-3 p-2 p-sm-4 img  img-fluid" id="iconhover2"></i></a>
        <a href="https://www.snapchat.com/"target="_blank">
            <i class="bi  bi-snapchat  ps-sm-3 p-2  p-sm-4 img  img-fluid" id="iconhover2"></i></a>
    
     </div></div> 

<div class="container-fluid">
    <div class="row pt-5 pb-5 ">
        <div class="col">
            <div class="dropdown-center">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">pakistan</button>
            </div>
        </div>
        <div class="col pt-2 text-end"id="p12">© 2024 - BAROQUE</div>
    </div>
</div>
{{-- footer end --}}
 {{-- main container div --}}
</div> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>



