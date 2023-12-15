@extends('layouts.app')
@section('content')

<style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #092635;
    }

    .gradient-bg {
        background: linear-gradient(to right, #3498db, #8e44ad);
    }

    .form-container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #3498db;
        color: #ffffff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn-primary {
        background-color: #3498db;
        color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .btn-link {
        color: #3498db;
    }

    .btn-link:hover {
        color: #2980b9;
    }

    .table {
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid #3498db;
    }

    .table th {
        background-color: #2980b9;
        color: #ffffff;
    }

    .table td {
        background-color: #ffffff;
        color: #000000;
    }

    .btn-warning {
        background-color: #FFD700;
        border: none;
        border-radius: 5px;
        color: #000000;
    }

    .btn-warning:hover {
        background-color: #B8860B;
    }

    .btn-danger {
        background-color: #DC143C;
        border: none;
        border-radius: 5px;
        color: #ffffff;
    }

    .btn-danger:hover {
        background-color: #8B0000;
    }
</style>

<h2>golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end">Add Golongan</a>

<table class="table table-bordered">
      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @php
            $counter = 1;
      @endphp

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $counter++ }}</td>
                  <td>{{ $row->gol_kode }}</td>
                  <td>{{ $row->gol_nama }}</td>
                  <td><a href="{{ url('golongan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('golongan/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection
