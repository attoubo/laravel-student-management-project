@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
    
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Address : {{ $students->Age }}</p>
        <p class="card-text">Mobile : {{ $students->Email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection