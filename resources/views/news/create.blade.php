@extends('layout')

@section('title', "buat news POST")

@section('pages')


<hr>
<br>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <i class="fa fa-pencil"></i> buat POST
      </div>
      <div class="panel-body">
{!! Form::open(array('route' => 'news.store', 'class' => 'form-horizontal', 'files' => true )) !!}

  <div class="form-group">
    {{ Form::label('title', 'Title :', array('class' => 'col-lg-2 control-label')) }}
    <div class="col-lg-10">
      {{ Form::text('title', null, array('class' => 'form-control input-lg', 'required')) }}
    </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'Summary :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">
    {{ Form::text('summary', null, array('class' => 'form-control', 'required')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'SLUG :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">
    {{ Form::text('slug', null, array('class' => 'form-control', 'required' , 'minlength' => '5' , 'maxlength' => '191')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'Featured Image :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">
    {{ Form::file('featured_image', array('class' => 'form-control')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'Content :', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-9">
<div class="ibox-content no-padding">
    {{ Form::textarea('content', null, array('class' => 'summernote', 'required')) }}
  </div>
</div>
</div>

<div class="form-group">
  {{ Form::label('tags', 'Tags :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">

      <select data-placeholder="Choose a Tags..." name="tags[]" multiple="multiple" class="js-example-basic-multiple form-control" tabindex="4">
      @foreach($tags as $tag)
        <option value='{{ $tag->id }}'> {{ $tag->name }} </option>
      @endforeach
    </select>

  </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
    {{ Form::hidden('view_count', '0', array('class' => 'form-control', 'required')) }}
  </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
    {{ Form::hidden('like_count', '0', array('class' => 'form-control', 'required')) }}
  </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
    {{ Form::hidden('share_count', '0', array('class' => 'form-control', 'required')) }}
  </div>
</div>

<div class="form-group">
  {{ Form::hidden('is_featured' , '0') }}
  {{ Form::hidden('is_active' , '0') }}

  {{ Form::label('title', 'Featured :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">

    {{ Form::checkbox('is_featured', '1', null ) }}
  </div>
</div>

<div class="form-group">
  {{ Form::label('title', 'Active :', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">

    {{ Form::checkbox('is_active', '1', null ) }}
  </div>
</div>

  {{ Form::submit('Buat POST', array('class' => 'btn btn-success dim')) }}

{!! Form::close() !!}

</div>
</div>
</div>
</div>

@endsection
