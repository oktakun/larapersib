@extends('layout')
@section('title', "Daftar Klasmen")

@section('pages')
<br>
<div class="row">
  <div class="col-md-2">
    <p>
      <a href="{{ route('klasmen.create')  }}" class="btn btn-success btn-rounded"> Tambah Klub </a>
    </p>
  </div>
</div>

<div class="col-lg-8">
  <blockquote><h2> Gojek Traveloka Liga 1 </h2></blockquote>
  <table class="table table-hover">
      <thead>
      <tr>
          <th>Peringkat</th>
          <th>Klub</th>
          <th>Nama Klub</th>
          <th>Main</th>
          <th>Menang</th>
          <th>Seri</th>
          <th>kalah</th>
          <th>GF-GA</th>
          <th>GD</th>
          <th>Poin</th>
      </tr>
      </thead>
      <tbody>

        @foreach ($klasmen as $klaslist)
        <tr style="background-color:#a5ffa5;">
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{ asset('images/'. $klaslist->image) }}" width="60" height="60"></td>
          <td>{{ $klaslist->klub }}</td>
          <td>{{ $klaslist->main }}</td>
          <td>{{ $klaslist->menang }}</td>
          <td>{{ $klaslist->seri }}</td>
          <td>{{ $klaslist->kalah }}</td>
          <td>{{ $klaslist->goal_cetak }} - {{ $klaslist->goal_masuk }}</td>
          <td>{{ $klaslist->goal_cetak  -  $klaslist->goal_masuk }}</td>
          <td>{{ $klaslist->poin }}</td>
        </tr>
        @endforeach

      </tbody>
  </table>
</div>

@stop
