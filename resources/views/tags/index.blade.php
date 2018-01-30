@extends('layout')

@section('title', 'TAG list')

@section('pages')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h4>Tags List</h4>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tags</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td><a href="{{ route('tags.show', $tag->id)}}">{{ $tag->name }}</a></td>
                    </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                  {!! $tags->links(); !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tambah Tags </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

                  {{ Form::label('title', 'Nama Tag :') }}
                  {{ Form::text('name', null, ['class' => 'form-control']) }}
                  <br>
                  {{ Form::submit('Buat TAG', ['class' => 'btn btn-success btn-h1-spacing btn-block']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>


</div>
@endsection
