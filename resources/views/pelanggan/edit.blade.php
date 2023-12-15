@extends('layouts.app')

@section('content')
    <h2>Edit pelanggan</h2>

    <form action="{{ url('pelanggan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">ID GOLONGAN</label>
            <input type="text" name="pel_id_gol" id="" class="form-control" value="{{ $row->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}">
        </div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->pel_seri }}">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label for="pel_aktif">AKTIF</label>
            <select name="pel_aktif" id="pel_aktif" class="form-control">
                <option value="Y" @if($row->pel_aktif == 'Y') selected @endif>Aktif</option>
                <option value="N" @if($row->pel_aktif == 'N') selected @endif>Tidak Aktif</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_user">ID USER</label>
            <input type="text" name="pel_id_user" id="pel_id_user" class="form-control" value="{{ $yourModel->pel_id_user ?? auth()->id() }}" readonly>
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
