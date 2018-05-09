@extends('layouts.makintisite')
@section('content')
<article class"godown">
    <div class="container">
        <div class="row text-center" style="margin-top: 100px;">
            <div class="col-12" style="margin-bottom: 50px;">
                <h1>Contactanos</h1>
            </div>
        </div>
          {!! Form::open(['route'=>'contactsendmail', 'method'=>'POST']) !!}
            <div class="row">
              <div class="col-lg-6 form-group">
                <div class="">
                  {!!Form::label('name', 'Nombre:')!!}
                  {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">

              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">

              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">

              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">

              </div>
            </div>
          {!! Form::close() !!}
    </div>
</article>
@endsection
