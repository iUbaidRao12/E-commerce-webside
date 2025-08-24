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

    <body>
        


<div class="container-fluid">
    <div class="row bg-secondary d-flex align-items-center">
                
                <div class="col-4 justify-content-start d-flex ">
        <a href="{{route('admin')}}"class="btn border  text-white  ">Back
            <i class="bi bi-arrow-right"></i></a></div>
            <div class="col-4 text-center text-white  p-3 font">All Categories</div>
            <div class="col-4 justify-content-end d-flex ">
        <a href="{{route('cateform')}}"class="btn border  text-white ">Add Category
            <i class="bi bi-arrow-right"></i></a></div>

                </div>

    
    <div class="row d-flex justify-content-center">
 @foreach ($data as $item)
<div class="col-12 col-md-3 m-sm-4 m-2">
<div class="row">
    <ddiv class="col"><img class="img-fluid img-thumbnail"src="{{asset('/storage/'.$item->images)}}" alt=""></ddiv>
</div>
<div class="row">
    <ddiv class="col text-center">{{$item->name}}</ddiv>
</div>
<div class="row m-sm-4 m-2">
    <div class="col-6 justify-content-start d-flex">
        
                  <form action="{{route('delete_cate',$item->id)}}"method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"class="btn btn-danger">Delete</button>
                  </form>
    </div>

    <div class="col-6 justify-content-end d-flex"><a href="{{route('edit_cate',$item->id)}}"><button type="submit"class="btn btn-secondary">Update</button></a></div>
</div>
</div>
@endforeach
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
