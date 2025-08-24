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
@media(max-width:500px)
{.font{ font-size: 15px !important;}}
    </style>

    <body>
        


<div class="container-fluid">
    <div class="row bg-secondary d-flex align-items-center">
                
                <div class="col-4 justify-content-start d-flex ">
        <a href="{{route('admin')}}"class="btn border  text-white  ">Back
            <i class="bi bi-arrow-right"></i></a></div>
            <div class="col-4 text-center text-white  p-3 font">Prodect Types</div>
            <div class="col-4 justify-content-end d-flex ">
        <a href="{{route('prodect_type_form')}}"class="btn border  text-white ">Add Prodects Type
            <i class="bi bi-arrow-right"></i></a></div>

                </div>

                
<div class="row justify-content-center">
    <div class="col-6 pt-3">
        <table class="table">
<tr style="width:100%;;">

    <td style="color:white; "class=" fw-bold bg-secondary ">Id</td>
    <td style="color:white; "class=" fw-bold bg-secondary ">Name</td>
    <td style="color:white; "class=" fw-bold bg-secondary ">Update</td> 
    <td style="color:white; "class=" fw-bold bg-secondary ">Delete</td> 
</tr> 
@foreach($data as $type)
<tr >
    <td>{{$type->id}}</td>
    <td>{{$type->name}}</td>

    <td><button class=" fw-bold btn btn-secondary" ><a style="text-decoration:none;color:white;" href="{{route('editprodtype',$type->id)}}">Update</a></button></td> <td >
        <form action="{{route('deleteprodtype',$type->id)}}"method="post">
            @csrf
            @method('Delete')
            <button class=" fw-bold btn btn-secondary"style="text-decoration:none; color:white;"type="submit">Delete</button>
        </form>
</td></tr>
@endforeach
</table>
</div></div>
<div class="row">
    <div class="col">
        @if (session('message'))
        <div class="alert alert-secondary">
            {{session('message')}}
        </div>
            
        @endif
    </div>
</div></div>






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
