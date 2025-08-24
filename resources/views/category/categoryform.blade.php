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
            <div class="col-4 text-center text-white  p-3 font">Add Categories</div>
            <div class="col-4 justify-content-end d-flex ">
        <a href="{{route('All_Categories')}}"class="btn border  text-white ">View Categories
            <i class="bi bi-arrow-right"></i></a></div></div>
@if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
      </ul>
@endif


<form action="{{route('insertcate')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class='row justify-content-center mt-5'>
    <div class="col-auto justify-content-center  p-1">
        <input type="file"name="image">
    </div>
    <div class="col-auto justify-content-center  p-1">
<input class="w-100" type="text" name="name"  placeholder=" Enter Category Name:">
    </div>
    <div class="col-auto p-1">
            <label>
                <input type="checkbox" name="is_visible" value="1">
                Show on Website
            </label>
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



        {{-- <div class="col-6 border border-info">
            <div class="row">
                <div class="col text-center"><h2>All posts of user {{Auth::user()->name}} </h2></div>
            </div>
            <table class="table ">
                <tr>
                    <td class="bg-dark text-white">ID</td>
                    <td class="bg-dark text-white">TITLE</td>
                    <td class="bg-dark text-white">DESCRIPTION</td>
                    <td class="bg-dark text-white">UPDATE</td>
                    <td class="bg-dark text-white">DELETE
                        
                    </td>
                </tr>
                @foreach ($data as $req)
                <tr>
                    <td>{{$req->id}}</td>
                    <td>{{$req->title}}</td>
                    <td>{{$req->description}}</td>
                    <td><a href="{{route('postupdate',$req->id)}}"><button class="bg-info text-white">Update</button></a></td>
                    <td><a href="{{route('postdelete',$req->id)}}"><button class="bg-danger text-white">delete</button></a></td>
                    
                    
                </tr>
                    
                @endforeach
                
            </table>
            <a href="{{route('dashboardroute')}}"><button type="submit" class="btn btn-danger">back</button></a>
        </div> --}}