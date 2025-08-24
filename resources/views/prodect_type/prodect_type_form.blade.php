<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <style>
.font{font-size: 20px;}
@media(max-width:500px){.font{ font-size: 15px !important;}}
    </style>
<br>
    <body>
        
        <div class="container-fluid">
             <div class="row bg-secondary d-flex align-items-center">
                <div class="col-4 justify-content-start d-flex ">
        <a href="{{route('admin')}}"class="btn border  text-white  ">Back
            <i class="bi bi-arrow-right"></i></a></div>
            <div class="col-4 text-center text-white  p-3 font">Add Prodect Type</div>
            <div class="col-4 justify-content-end d-flex ">
        <a href="{{route('prodect_type')}}"class="btn border  text-white ">View All Types
            <i class="bi bi-arrow-right"></i></a></div></div>
@if($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
@endforeach
</ul>
@endif


<form action="{{route('insertprodtype')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class='row justify-content-center mt-5'>
    <div class="col-auto justify-content-center  p-1">
<input class="w-100" type="text" name="name"  placeholder=" Enter Prodect type:">
    </div>
    <div class="col-auto"><button type="submit" class="btn btn-secondary">Upload</button></div>
</div>
</form>

<div class="row">
    <div class="col">
        @if (session('message'))
        <div class="alert alert-secondary">
            {{session('message')}}
        </div>
            
        @endif
    </div>
</div>
</div>



        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


