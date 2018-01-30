@extends('layout')

@section('pages')

<div class="row border-bottom white-bg dashboard-header">

              <div class="col-lg-12">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">
                          <h4>Berita PERSIB Bandung<i class="fa fa-home" aria-hidden="true"></i></h4>

                          <br>
                          <p>
                            <a class="btn btn-success btn-outline" href="news/create">Buat POST baru <i class="fa fa-upload"></i></a>
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
                                <th>No</th>
                                <th>Judul POST</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td> merasa ...</td>
                                  <td><button class="btn btn-primary dim"><i class="fa fa-eye"></i></button> | <button class="btn btn-success dim"><i class="fa fa-pencil"></i></button> | <button class="btn btn-danger dim"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            </tbody>
                        </table>

                      </div>
                  </div>
              </div>
        </div>

@endsection
