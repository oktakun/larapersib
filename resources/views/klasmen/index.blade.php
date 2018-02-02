@extends('layout')
@section('title', "Daftar Klasmen")

@section('pages')

<div class="col-lg-8">
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
          <th>Poin</th>
      </tr>
      </thead>
      <tbody>
        <tr style="background-color:#a5ffa5;">
          <td>1</td>
          <td><img src="https://upload.wikimedia.org/wikipedia/id/1/12/Logo_Persib.png" width="60" height="60"></td>
          <td>Persib Bandung</td>
          <td>2</td>
          <td>2</td>
          <td>0</td>
          <td>0</td>
          <td>6-2</td>
          <td>6</td>
        </tr>
      </tbody>
  </table>
</div>

@stop
