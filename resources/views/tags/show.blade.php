@extends('layout')

@section('title', " $tag->name Tag")

@section('pages')


    <div class="row">
      <div class="col-md-8">
        <h1>
          <span class="label label-primary">{{ $tag->name }}</span> Tag <small>{{ $tag->news()->count() }} News</small>
        </h1>
      </div>
    </div>
    <div style="margin-top:25px;">
    </div>

    <div class="row">
    <div class="col-md-5">
      <a href="{{ route('tags.edit', $tag->id ) }}" class="btn btn-primary btn-outline">Edit Tag</a>
      <br>
      {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'])}}
        {{ Form::submit('Delete Tag', ['class' => 'btn btn-danger btn-outline' , 'style' => 'margin-top:20px;']) }}
      {{ Form::close() }}
    </div>
    
    </div>
<br>
  <div class="ibox-content">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Judul POST</th>
            <th>Tags</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($tag->news as $post)
          <tr>
            <td>{{ $post->title }}</td>
            <td>@foreach ($post->tags as $tag)
              <span class="label label-primary">{{ $tag->name }}</span>
              @endforeach
            </td>
            <td><a href="{{ route('news.show', $post->id ) }}" class="btn btn-success btn-outline">View</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
