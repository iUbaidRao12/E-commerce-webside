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

    <body>
        


<div class="container-fluid">
   <div class="row bg-secondary d-flex align-items-center">
                <div class="col-6"><h2 class="text-start text-white  p-3">Update Video</h2></div>
                <div class="col-6 justify-content-end d-flex ">
        <a href="{{route('all_video')}}"class="btn border  text-white  ">Back
            <i class="bi bi-arrow-right"></i></a></div></div>

<form action="{{route('update_video',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row d-flex justify-content-center">
<div class="col-12 col-md-3 m-sm-4 m-2  border border-info ">

<div class="row">
    <div class="col">
        <video width="100%" height="500" controls>
        <source src="{{asset('/storage/'.$data->video)}}" type="video/mp4" name="video"id="output">
        </video>
    </div></div>

<div class="row d-flex justify-content-center">
<div class="col-12 justify-content-center  p-1">
<input class="w-100" type="text" name="title" value="{{$data->title}}" placeholder=" Enter Video Title:">
<input type="file"name="video"onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])">
<label>
    <input type="checkbox" name="visible" value="1" {{ $data->visible ? 'checked' : '' }}>
    Show on Website
</label>
</div>
<div class="col-auto"><button type="submit" class="btn btn-secondary">Update</button></div>
</div>

</div></div>

</form>


    



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
