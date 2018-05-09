@extends('layouts.makintisite')
@section('content')
<div class="container">
  <div class="row text-center" style="margin-top: 100px;">
      <div class="col-12" style="margin-bottom: 50px;">
          <h1>Quines nos Apoyan</h1>
      </div>
  </div>
  <div class="row text-center">
      <div class="col-sm-6" style="padding: 0px">
          <img src="http://cjuridicos.udenar.edu.co/oficinanarino/images/gobernar.png" alt="GObernacion de Nariño" height="200" width="200">
      </div>
      <div class="col-sm-6" style="padding: 0px">
          <img src="https://pbs.twimg.com/profile_images/968226495545118720/J9xrnjr2_400x400.jpg" alt="Onu Mujeres" height="200" width="200">
      </div>
  </div>
  <br>
  <div class="row text-center">
      <div class="col-12">
          <a href="{{route('contactanos')}}" class="btn"><h6>Unete</h6></a>
      </div>
  </div>
</div>
@endsection
