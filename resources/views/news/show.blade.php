@extends('layout')

@section('title', ' View POST');

@section('pages')

<hr>

<div class="row">
  <div class="col-lg-7">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
            <span class="label label-primary pull-right">Title POST</span>
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
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <span class="label label-primary pull-right">Total</span>
              <h5>Visit Site</h5>
          </div>
          <div class="ibox-content">

              <div class="row">
                  <div class="col-md-5">
                      <h1 class="no-margins">{{ $post->view_count }}</h1>
                      <div class="font-bold text-navy"><i class="fa fa-eye"></i> <small>View</small></div>
                  </div>
                  <div class="col-md-5">
                      <h1 class="no-margins">{{ $post->like_count }}</h1>
                      <div class="font-bold text-navy"><i class="fa fa-thumbs-up"></i> <small>Like</small></div>
                  </div>
                  <div class="col-md-5">
                      <h1 class="no-margins">{{ $post->share_count }}</h1>
                      <div class="font-bold text-navy"><i class="fa fa-share-alt"></i> <small>Share</small></div>
                  </div>
              </div>


          </div>
      </div>
  </div>



  <div class="col-lg-2">
      <div class="ibox float-e-margins">
          <div class="ibox-title">

              <h5>Detail Content</h5>
          </div>
          <div class="ibox-content">
              <div class="row">
                  <div class="col-md-10">
                      <p>
                        <h4>Date POST</h4>
                      <small> {{ $post->created_at }} </small>
                    </p>
                      <p>
                        <h4>Update POST</h4>
                        <small> {{ $post->updated_at }} </small>
                      </p>
                      <p>
                        <h4>Featured</h4>
                        <small>

                          @if($post->is_featured == 0)
                          off
                          @elseif($post->is_featured == 1)
                          on
                          @endif

                         </small>
                      </p>
                      <p>
                        <h4>Active</h4>
                        <small>

                          @if($post->is_active == 0)
                          off
                          @elseif($post->is_active == 1)
                          on
                          @endif

                        </small>
                      </p>
                  </div>
              </div>


          </div>
      </div>
  </div>

</div>

@endsection
