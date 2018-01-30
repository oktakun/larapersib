@extends('layout')

@section('title', 'Dashboard news POST')

@section('pages')

<h4>
<div class="wrapper wrapper-content animated shake">
<div class="row border-bottom white-bg dashboard-header">
              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">

                          <h4><img src="https://upload.wikimedia.org/wikipedia/id/1/12/Logo_Persib.png" width="50" height="50"></i> News</h4>

                          <br>
                          <p>
                            <a class="btn btn-success btn-outline dim" href="{{ route('news.create') }}">Buat POST <i class="fa fa-upload"></i></a>
                          </p>
                          <div class="ibox-tools">
                              <a class="collapse-link">
                                  <i class="fa fa-chevron-up"></i>
                              </a>

                          </div>
                      </div>
                      <div class="ibox-content">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Judul POST</th>

                                <th><i class="fa fa-eye"></i></th>
                                <th><i class="fa fa-thumbs-up"></i></th>
                                <th><i class="fa fa-share-alt"></i></th>
                                <th>Terbit POST</th>
                                <th>Update POST</ht>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($news as $post)

                                <tr>
                                  <td>
                                    <a href="{{ route('berita.single', $post->slug) }}">{{ $post->title }}</a>
                                  </td>

                                  <td align="center">
                                    {{ $post->view_count }}
                                  </td>
                                  <td>
                                    {{ $post->like_count }}
                                  </td>
                                  <td>
                                    {{ $post->share_count }}
                                  </td>
                                  <td>
                                    {{ $post->created_at }}
                                  </td>
                                  <td>
                                    {{ $post->updated_at }}
                                  </td>
                                  <td>
<div class="btn-group">
  <a class="btn btn-primary btn-outline dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="fa fa-cog fa-fw" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="news/{{ $post->id }}"><i class="fa fa-eye fa-fw"></i> View</a></li>
    <li>{!! Html::linkRoute('news.edit' , 'Edit' , array($post->id)) !!}</li>
    <li><a data-toggle="modal" data-target="#myModal4"><i class="fa fa-trash fa-fw"></i> Delete</a></li>
  </ul>
  <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content animated fadeIn">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <i class="fa fa-trash modal-icon"></i>
                  <h4 class="modal-title">Hapus POST ?</h4>
              </div>
              <div class="modal-body">
                  <p><strong>Apa anda yakin ingin menghapus POST ?</strong></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                  <p>
                  {!! Form::open(['route' => ['news.destroy', $post->id], 'method' => 'DELETE']) !!}

                     {!! Form::submit('Delete POST', ['class' => 'btn btn-danger btn-rounded btn-outline']) !!}

                 {!! Form::close() !!}
               </p>
              </div>
          </div>
      </div>
  </div>
</div>
</td>
                                </tr>

                              @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                          {!! $news->links(); !!}
                        </div>
                      </div>
                  </div>
              </div>
        </div>
</div>
@stop
