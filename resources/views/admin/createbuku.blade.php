@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="fs-6 badge bg-dark text-wrap">Masukan Data Buku Baru</div>
        <div class="card-body">

            <form action="{{ url('admin/createbuku') }}" method="post">
                {!! csrf_field() !!}
                <label>Judul Buku</label></br>
                <input type="text" name="judul" id="judul" class="form-control"></br>
                <label>Penulis</label></br>
                <input type="text" name="penulis" id="penulis" class="form-control"></br>
                <label>Jumlah Halaman Buku</label></br>
                <input type="text" name="jumlah_halaman" id="jumlah_halaman" class="form-control"></br>
                <label>Tahun Rilis</label></br>
                <input type="text" name="tahun_rilis" id="tahun_rilis" class="form-control"></br>
                <label>ISBN</label></br>
                <input type="text" name="isbn" id="isbn" class="form-control"></br>
                <input type="submit" value="Tambahkan" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
