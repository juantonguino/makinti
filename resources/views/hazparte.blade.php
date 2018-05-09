@extends('layouts.makintisite')
@section('content')
<div class="container">
  <div class="row text-center" style="margin-top: 100px;">
      <div class="col-12" style="margin-bottom: 50px;">
          <h1>Como puedes ayudar</h1>
      </div>
  </div>
  <div class="row text-center">
      <div class="col-sm-4" style="padding: 0px">
          <img src="" alt="Eventos" class="rounded-circle" style="background-color:gray">
          <h3 class="text-center"><strong>Colaborador</strong></h3>
          <p>Desc</p>
      </div>
      <div class="col-sm-4" style="padding: 0px">
          <img src="" alt="ofertas" class="rounded-circle" style="background-color:gray">
          <h3 class="text-center"><strong>Aliado Estrategico</strong></h3>
          <p>Desc</p>
      </div>
      <div class="col-sm-4" style="padding: 0px">
          <img src="" alt="ofertas" class="rounded-circle" style="background-color:gray">
          <h3 class="text-center"><strong>Taller</strong></h3>
          <p>Desc</p>
      </div>
  </div>
  <br>
  <div class="row text-center">
      <div class="col-12">
          <a href="{{route('contactanos')}}" class="btn"><h6>Contactanos</h6></a>
      </div>
  </div>
</div>
@endsection
