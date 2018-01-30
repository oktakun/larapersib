@extends('layout')

@section('title', ' View POST');

@section('pages')

<hr>
<div class="row">
                                 <div class="col-md-10">
                                     <div class="panel panel-info">
                                         <div class="panel-heading">
                                             <i class="fa fa-info-circle"></i> Info POST
                                         </div>
                                         <div class="panel-body">
                                           <p><h3>Judul POST :</h3> {{ $post->title }}<br></p>
                                           <p><h3>Summary :</h3> {{ $post->summary }}<br></p>
                                           <p><h3>Slug URL :</h3><a href="{{ route('berita.single', $post->slug) }}"> {{ url('berita/'.$post->slug) }} </a><br></p>
                                           <p><h3>Conten POST :</h3> {!! $post->content !!}<br></p>

                                           <p><h3>Views :</h3> {{ $post->view_count }}<br></p>
                                           <p><h3>Likes :</h3> {{ $post->like_count }}<br></p>
                                           <p><h3>Shares :</h3> {{ $post->share_count }}<br></p>
                                           <p><h3>Is Featured :</h3> {{ $post->is_featured }}<br></p>
                                           <p><h3>Is Active :</h3> {{ $post->is_active }}<br></p>
                                           <p><h3>Dibuat POST :</h3> {{ date('M j, Y H:ia', strtotime($post->created_at)) }}<br></p>
                                           <p><h3>Update Terakhir :</h3> {{ date('M j, Y H:ia', strtotime($post->updated_at)) }}<br></p>
                                           <p><h3>OPTION : </h3></p>
                                           <p></p>
                                          <p>



                                          </p>
                                         </div>
                                         <div class="panel-footer">
                                            ID POST : {{ $post->id }}
                                         </div>
                                     </div>

                                 </div>
</div>

@endsection
