@extends('home')
@section('content')
 
<br>
<div class="card">
  <div class="card-header">
    <h2 class="h">SEMINAR PAGE</h2>
  </div>
  <div class="card-body">
  <a href="{{ url('/seminar') }}" class="button" title="Back to seminar Page">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
  </a>
  <br>
      <form action="{{ url('seminar') }}" method="post">
        {!! csrf_field() !!}

        <label>Agenda</label></br>
        <input type="text" name="agenda" id="agenda" class="form-control" required></br>
     
        <label>Host Name</label></br>
        <input type="text" name="host_name" id="host_name" class="form-control" required></br>
     
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control" required></br>
     
        <input type="submit" value="Save" class="btn"></br>
    </form>
   
  </div>
</div>
<style>
  .card{
    background-color: #c2e9e7;
    border-radius: 20px;
  }
  .card-header{
    background-color: #02979d;
    border-radius: 20px;
  }
  .h{
    color: white;
    font-family: sans-serif;
    text-align: center;
    font-size: larger;
    font-weight: bolder;
  }

  .btn{
    background-color: #a4133c;
    color: #ffe5ec;
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
</style>
@stop