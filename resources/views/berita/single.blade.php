@extends('layout')

@section('title', " $news->title ")

@section('pages')



<div class="ibox">
    <div class="ibox-content">
      <h2 class="btn-link">
          {{ $news->title }}
      </h2>
      <div class="small m-b-xs">
        <span class="text-muted">
            <i class="fa fa-clock-o"></i> {{ $news->created_at }} </span>
      </div>
<hr>
      <center>
        <img src="{{ asset('images/'. $news->image) }}" width="800" height="400">
      </center>
      <hr>



        <p>
            {!! $news->content !!}
            <p>
        <div class="row">

            <div class="col-md-6">
                    <h5>Tags:</h5>
                    @foreach ($news->tags as $tag)
                    <span class="label label-primary">{{ $tag->name }}</span>
                    @endforeach
            </div>

            <div class="col-md-6">
                <div class="small text-right">
                    <h5>Stats:</h5>
                    <div>
                      <i class="fa fa-share"> </i> {{ $news->share_count }}
                    </div>
                    <div>
                    <i class="fa fa-eye"> </i> {{ $news->view_count }}
                    </div>
                    <div>
                    <i class="fa fa-thumbs-up"> </i> {{ $news->like_count }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
