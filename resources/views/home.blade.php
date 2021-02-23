@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->
  
<div class="row justify-content-center">
  <div class="col-md-4">
      <img class="img-profile" src="https://www.flaticon.com/svg/vstatic/svg/747/747376.svg?token=exp=1613971923~hmac=31ec95711da0ac96a087147bec2d4c07" alt="no-image">
  </div>
  <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name</label>
      <p>{{Auth::user()->name}}</p>
      <label for="">Email</label>
      <p>{{Auth::user()->email}}</p>
      <label for="">Address</label>
      <p>{{Auth::user()->address}}</p>
      <label for="">Phone</label>
      <p>{{Auth::user()->phone}}</p>
          </div>
      </div>
</div>
</div>
@endsection
