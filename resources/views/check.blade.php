 @extends('layout')
 @section('part_3')


   <div class="row ">
<div class="col-12"style="position:relative">
 <div class="row ">
<div class="col-12"id="mainimg">
<img src="{{asset('image/main.webp')}}" alt=""class="img-fluid">

</div>
</div>

<div class="row"id="part3botton">
    <div class="col-auto ">
        <a href="#"id="part3bottonanimate"><span>SHOP NOW</span></a>
    </div>
</div>

</div></div> 


@endsection



 @section('categories')
    @foreach ($data as $req)
       <div class="row justify-content-center"><div class="col-10  ham-items">

       <a class="ham-items"href="#"id="ham-item2">{{$req->name}}</a>
       <i class="bi bi-arrow-right"style="position: absolute;right:10px;"></i></div></div> 
       <div class="row d-flex justify-content-center "><div class="col-10 m-sm-2" id="ham-line"></div></div>
@endforeach
@endsection