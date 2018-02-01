@extends('layout')

@section('title', ' View POST');

@section('pages')

<hr>

<div class="row">
  <div class="col-lg-7">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
            @foreach ($post->tags as $tag)
              <span class="label label-primary pull-right">{{ $tag->name }}</span>
            @endforeach
              <h5>{{ $post->title }}</h5>
          </div>

          <div class="ibox-content">

              <h1 class="no-margins">{{ $post->summary }}</h1>
              <p>
                <small>{!! $post->content !!}</small>
              </p>
          </div>
      </div>
  </div>

  <div class="col-lg-4">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <span class="label label-primary pull-right">Image</span>
              <h5>Featured Image</h5>
          </div>
          <div class="ibox-content">

              <div class="row">
                <center>
                  <div class="col-md-2">
                      <img src="{{ asset('images/'. $post->image) }}" width="380" height="180">
                  </div>
                </center>
              </div>


          </div>
      </div>
  </div>

  <div class="col-lg-2">
      <div class="widget style1 navy-bg">
          <div class="row vertical-align">
              <div class="col-xs-3">
                  <i class="fa fa-eye fa-3x"></i>
              </div>
              <div class="col-xs-9 text-right">
                  <h2 class="font-bold">{{ $post->view_count }}</h2>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-2">
      <div class="widget style1 navy-bg">
          <div class="row vertical-align">
              <div class="col-xs-3">
                  <i class="fa fa-thumbs-up fa-3x"></i>
              </div>
              <div class="col-xs-9 text-right">
                  <h2 class="font-bold">{{ $post->like_count }}</h2>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-2">
      <div class="widget style1 navy-bg">
          <div class="row vertical-align">
              <div class="col-xs-3">
                  <i class="fa fa-share-alt fa-3x"></i>
              </div>
              <div class="col-xs-9 text-right">
                  <h2 class="font-bold">{{ $post->share_count }}</h2>
              </div>
          </div>
      </div>
  </div>

</div>


@endsection
