@extends('layout')

@section('title', ' Edit POST')

@section('pages')

<div class="row">
                                 <div class="col-lg-11">
                                     <div class="panel panel-primary">
                                         <div class="panel-heading">
                                             <i class="fa fa-pencil"></i> Edit POST
                                         </div>
                                         <div class="panel-body">
                                           {!! Form::model($post, ['route' => ['news.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

                                           <p><h3>Judul POST :</h3> {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}<br></p>
                                           <p><h3>Summary :</h3> {{ Form::text('summary', null, ["class" => 'form-control']) }}<br></p>
                                           <p><h3>Slug URL :</h3> {{ Form::text('slug', null, ["class" => 'form-control']) }}<br></p>
                                           <p><h3>Featured Image :</h3>{{ Form::file('featured_image', ["class" => 'form-control']) }}<br></p>
                                           <p><h3>Conten POST :</h3> {{ Form::textarea('content', null, ["class" => 'summernote']) }} <br></p>
                                           <p><h3>Tags :</h3> {{ Form::select('tags[]', $tags, null, ['class' => 'js-example-basic-multiple form-control', 'multiple' => 'multiple'] ) }} <br></p>
                                           <p> {{ Form::hidden('view_count', null, ["class" => 'form-control']) }}<br></p>
                                           <p> {{ Form::hidden('like_count', null, ["class" => 'form-control']) }}<br></p>
                                           <p> {{ Form::hidden('share_count', null, ["class" => 'form-control']) }}<br></p>
                                           {{ Form::hidden('is_featured' , '0') }}
                                           {{ Form::hidden('is_active' , '0') }}
                                           <p><h3>Is Featured :</h3> {{ Form::checkbox('is_featured', '1', ["class" => 'form-control']) }}<br></p>
                                           <p><h3>Is Active :</h3> {{ Form::checkbox('is_active', '1', ["class" => 'form-control']) }}<br></p>
                                           <p><h3>Dibuat POST :</h3> {{ date('M j, Y H:ia', strtotime($post->created_at)) }}<br></p>
                                           <p><h3>Update Terakhir :</h3> {{ date('M j, Y H:ia', strtotime($post->updated_at)) }}<br></p>

                                           <p>{{ Form::submit('Update POST', ['class' => 'btn btn-success dim btn-block']) }}</p>
                                           {!! Form::close() !!}
                                           <p>{!! Html::linkRoute('news.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger dim btn-block')) !!}</p>

                                         </div>
                                     </div>
                                 </div>
</div>


@stop
