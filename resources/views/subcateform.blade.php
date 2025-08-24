
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>categories</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

<body>

<div class="row d-flex justify-content-center">
  <div class="col-6 border border-info">


    @if ($errors->any())
      <ul class="alert alert-success">
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
      </ul>
  @endif

<form action="{{route('insertsubcate')}}" method="post" onsubmit=" return validate()">
@csrf
<select name="id">
            <option value=""selected class="text-white">Select a Category</option>
            {{-- @foreach($data as $req)
            <option class="text-black bg-success" value="{{$req->id}}">{{$req->name}}</option>
            @endforeach --}}
</select>
<input class="name" type="" id="nam" name="name"  placeholder="Name:">
<span id="error1" style="color: red;"></span>
<input  type="submit" value="Add">
</form>  
<a href="{{route('main')}}"class="btn btn-success">back</a>


</div></div>







<script>
function validate()
{
var name = document.getElementById('nam').value;
console.log(name)
if (name=="") {
document.getElementById("error1").innerHTML="Name is required";  
return false
}}
</script>

</body>

</html>

