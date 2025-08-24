<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BAROQUE</title>
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
<div class="row"style="position:sticky;top:0px; z-index:1000;">
    <div class='col-12'style="position:relative;">

<div class="row "id="rowtwo">
    {{-- session1 --}}

    <div class="col-4 ">
            <div class="row  part_2 align-items-center d-flex justify-content-between">
            <div class="col-auto">
            <i class="bi bi-list ham_size "onclick=" hamburger.style.transform='translateX(0%)';hamburger.style.display='block';"></i></div></div>
{{-- hamburger row start --}}
<div class="row">
<div class="col-4" id="hamburger">
<div class="row bg-white justify-content-center">
<div class="col-10 mb-md-3 "id="ham-icon"><i class="bi bi-x-lg"onclick="hamburger.style.display='block'; hamburger.style.transform='translateX(-100%)';catetypes.style.display='none';catetypes.style.transform='translateX(-100%)';"></i></div>


<div class="row"id="scrol">
    <div class="col">
@foreach ($allcate as $req)
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
 </div></div></div></div></div></div>

{{-- session2 --}}

        <div class="col-4 justify-content-center d-flex "style="position:relative">
        <div class="row justify-content-center  align-items-center part_2 ">
        <div class="col-auto "><img src="{{ asset('image/LOGO.png') }}"class=" img-fluid logo">
        </div></div>
        </div> 
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
</div></div>
    
    </div></div>
  
    

{{-- part two end --}}
{{-- part three --}}

<div class="row">
<div class="col-12"style="position:relative">


 <div class="row ">
<div class="col-12"id="mainimg">
<img src="{{asset('image/main.webp')}}" alt=""class="img-fluid">
</div>
</div>
<div class="row"id="part3botton">
    <div class="col-auto ">
    <a href="{{route('product',$req->id)}}"id="part3bottonanimate"><span>SHOP NOW</span></a>
    </div>
</div>

</div></div> 

{{-- part three end--}}
{{-- part four start --}}

   <div class="row d-flex justify-content-center "><div class="col-12 p-sm-5 p-3">
   <div class="row part4mainrow mt-3  d-flew justify-content-around">

@foreach($data as $req)
    <div class="col-md-4 col-10 p-sm-4 p-3 ">
        <a href="{{route('product',$req->id)}}">
            <div class="row ">
<div class="col-12"id="part4col">
    <img src="{{asset('/storage/'.$req->images)}}" class="img-fluid ps-0 ms-0"alt="Image"id="part4img">
</div></div>
        </a>
<div class="row">
        <div class="col-12 text-center"id="lastparttext2">{{$req->name}}</div>
       </div>
      <div class="row justify-content-center  "style="width:100%;"id="mainimg">
                <div class="col-auto  ">
        <a href="{{route('product',$req->id)}}"id="blackbtn"><span>SHOP NOW</span></a>
    </div></div></div>
@endforeach
</div></div></div><hr>

{{-- part four end --}}
{{-- part six start --}}


 <hr class="pt-md-3 pt-1">
<div class="container-fluid pb-3">
    <div class="row  w-100 d-flex justify-content-center "style="position: relative;height:100px;">
    <div class="col-auto  fs-2  mb-4  text-center"id="partstext">BE INSPIRED</div>
    </div></div>
      <div class="container-fluid d-flex mb-5 pb-5 justify-content-center"id="vediomain">
    <div class="row  "id="videorow">

@foreach ($vid as $item)
     <div class=" col-sm-4 col-12 pt-sm-3 pt-5 pb-sm-3 pb-5"style="position:relative;">
            <div class="video-container">
                <video muted autoplay loop><source src="{{asset('/storage/'.$item->video)}}" type="video/mp4"></video>
            </div>
         <div class="row part5row ">
                <div class="col-auto  ">
        <a href="#"id="blackbtn"><span>{{$item->title}}</span></a>
    </div></div></div>
@endforeach
 </div></div>



{{-- part six end --}}
{{-- part seven start--}}



 <hr>
<div class="container-fluid  pb-5 pt-5 mt-5">
<div class="row  w-100 d-flex justify-content-center "style="position: relative;">
    <div class="col-auto text-center "style="position:absolute;bottom:0px;font-weight:500;font-family:initial-scale;">SUBSCRIBE FOR NEWSLETTER</div>
</div></div>

 <div class="container-fluid pb-5">
  <form action="" >
            <div class="row ">
                <div class="col-sm-6 d-flex justify-content-sm-end d-flex justify-content-center"><input type="email"placeholder="Email..."required=""id="pninput"></div>
                <div class="col-sm-6 pt-2  pt-sm-0 d-flex justify-content-sm-start justify-content-center"><a href="#"id="lastpart5"><span>SUBSCRIBE</span></a></div></div>       
 </form>
</div> 
<hr class="pt-3  pb-3"> 
 <hr class="pt-3  pb-3">
{{-- footer start --}}


<div class="container-fluid">
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



