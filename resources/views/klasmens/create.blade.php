@extends('layout')

@section('title', "Buat Klub Dan Klasmen")

@section('pages')

<div class="row">
    <div class="col-lg-12">
    <h2>Buat Klub Baru</h2>

    {!! Form::open(array('route' => 'klasmen.store', 'class' => 'form-horizontal', 'files' => true )) !!}

    <div class="form-group">
      {{ Form::label('title', 'Nama Liga :', array('class' => 'col-lg-2 control-label')) }}
      <div class="col-lg-4">
        {{ Form::select('liga', ['Liga 1' => 'Gojek Traveloka Liga 1' , 'Piala Presiden' => 'Piala Presiden'] , null , ['placeholder' => 'Pilih Jenis Liga ...' , 'class' => 'form-control'] ) }}
      </div>
  </div>

  <div class="form-group">
    {{ Form::label('title', 'Nama Klub :', array('class' => 'col-lg-2 control-label')) }}
    <div class="col-lg-4">
      {{ Form::text('klub', null, array('class' => 'form-control input-lg', 'required')) }}
    </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'Logo Klub :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-4">
    {{ Form::file('featured_image', null, array('class' => 'form-control input-lg', 'required')) }}
  </div>
</div>
<!-- hidden value -->
{{ Form::hidden('main', 0) }}
{{ Form::hidden('menang', 0) }}
{{ Form::hidden('seri', 0) }}
{{ Form::hidden('kalah', 0) }}
{{ Form::hidden('goal_cetak', 0) }}
{{ Form::hidden('goal_masuk', 0) }}
{{ Form::hidden('poin', 0) }}

<center>
  {{ Form::submit('Daftarkan Klub', ['class' => 'btn btn-success btn-rounded', 'style' => 'margin-top:20px;']) }}
</center>
    {!! Form::close() !!}
  </div>
</div>

@stop
