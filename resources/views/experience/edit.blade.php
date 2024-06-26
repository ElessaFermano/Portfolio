@extends('home')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
<div class="card">
  <div class="card-header">EXPERIENCES PAGE</div>
  <div class="card-body">
  <a href="{{ url('/experience') }}" class="button" title="Back to Skill Page">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
  </a>
      <form action="{{ url('experience/' .$experience->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$experience->id}}" id="id" />
       
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$experience->title}}" class="form-control" required></br>
       
        <label>Details</label></br>
        <input type="text" name="details" id="details" value="{{$experience->details}}" class="form-control" required></br>
       
        <label>Image</label></br>
        <input type="file" name="image" id="image"   value="{{$experience->image}}" class="form-control" required></br>
       
     
        <input type="submit" value="Update" class="btn"></br>
    </form>
   
  </div>
</div>
 <style>
  .card {
    
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 16px;
    width: 600px;
    margin: 20px auto; 
    box-shadow: 5px 5px;
}
  .card-header{
      background-color: #02979d;
      font-size: x-large;
      font-family: sans-serif;
      text-align: center;
      color: white;
      font-weight: bolder;
   
  }
  .card-body{
    background-color:#ffccd5;
   
  }
   .button{
            background-color: #a4133c;
            color: wheat;
            text-decoration: none;
            padding: 2px 3px;
            font-size: small;
            border-radius: 3px;

        }
   .button:hover{
            color: lightcoral;
            transition-duration: 1s;
        }
   .btn{
          background-color: #a4133c;
          color: #ffe5ec;
  }
 </style>
</body>
</html>

@stop