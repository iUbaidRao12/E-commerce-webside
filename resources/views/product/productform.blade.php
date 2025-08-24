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
            <div class="col-4 text-center text-white  p-3 font">Add prodect</div>
            <div class="col-4 justify-content-end d-flex ">
        <a href="{{route('All_product')}}"class="btn border  text-white ">View prodects
            <i class="bi bi-arrow-right"></i></a></div></div>

<div class="row">
    <div class="col">
        @if (session('message'))
        <div class="alert alert-secondary">
            {{session('message')}}
        </div>
            
        @endif
    </div>
</div>
@if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
      </ul>
@endif
<form action="{{route('storeprod')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class='row justify-content-center mt-5'>
   <div class="col-6 border border-info">

 <div class="mb-3">
    <label for="cate_id" class="form-label">Category</label>
    <select class="form-select" id="cate_id" name="cate_id" required>
      <option selected disabled>Select category</option>
      @foreach ($allcate as $req)
      <option value="{{ $req->id }}">{{ $req->name }}</option>
      @endforeach
    </select>
 </div>

  <!-- Product Name -->
  <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <!-- Description -->
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows=""></textarea>
  </div>

  <!-- Price -->
  <div class="mb-3">
    <label for="price" class="form-label">Price (PKR)</label>
    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
  </div>

  <!-- Stock -->
  <div class="mb-3">
    <label for="stock" class="form-label">Piece</label>
    <input type="number" class="form-control" id="piece" name="piece" value="0" required>
  </div>


{{-- all images --}}
      <div class="mb-3">
      <label for="images" class="form-label">Product Images</label>
      <input 
        class="form-control" 
        type="file" 
        id="images" 
        name="images[]" 
        multiple 
        accept="image/*">
      <small class="form-text text-muted">
        You can select all prodect images in one time.
      </small>
    </div>

    <div class=""><button type="submit" class="btn btn-secondary">Upload</button></div>
   </div></div></form>




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

