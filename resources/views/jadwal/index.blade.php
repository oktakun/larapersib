@extends('layout')

@section('title', 'Shedule Match')

@section('pages')

<div class="row">
    <div class="col-lg-10">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h4>Next Schedule</h4>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

            <table class="table table-hover">
                <thead>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="https://upload.wikimedia.org/wikipedia/id/1/12/Logo_Persib.png" width="100" height="100">
                    </td>
                    <td align="center">
                      <h1>VS</h1>
                    </td>
                    <td align="right">
                      <img src="http://1000logos.net/wp-content/uploads/2017/06/Real-Madrid-Logo.png" width="100" height="100">
                    </td>
                    <td>
                      <div class="widget style navy-bg">
                          <div class="row">
                              <div class="col-xs-2">
                                  <!--
                                    <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/23748-200.png" width="50" height="50">
                                  -->
                                  <i class="fa fa-handshake-o fa-5x"></i>

                              </div>
                              <div class="col-xs-10 text-right">
                                  <span> Si Jalak Harupat </span>
                                  <h2 class="font-bold">19.30</h2>
                                  <span> Friendly Match </span>
                              </div>
                          </div>
                      </div>
                    </td>
                    <td>
                      <div class="widget style navy-bg">
                          <div class="row">
                              <div class="col-xs-2">
                                  <i class="fa fa-window-maximize fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <h2 class="font-bold">3-1</h2>
                              </div>
                          </div>
                      </div>
                    </td>
                    <td>
                      <div class="widget style navy-bg">
                          <div class="row">
                              <div class="col-xs-2">
                                  <i class="fa fa-soccer-ball-o fa-5x"></i>
                              </div>
                              <div class="col-xs-8 text-right">
                                  <p><span>12' Ronaldo</span></p>
                                  <p><span>40' In Kyun</span></p>
                                  <p><span>55' Atep</span></p>
                                  <p><span>90+2' N'Douassel</span></p>
                              </div>
                          </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--
<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Add Schedule </h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>
      -->

        <!--
        <div class="ibox-content">
            {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

              {{ Form::label('title', 'Nama Tag :') }}
              {{ Form::text('name', null, ['class' => 'form-control']) }}
              <br>
              {{ Form::submit('Buat TAG', ['class' => 'btn btn-success btn-h1-spacing btn-block']) }}

            {!! Form::close() !!}
        </div>
      -->

    </div>
</div>
</div>

@stop
