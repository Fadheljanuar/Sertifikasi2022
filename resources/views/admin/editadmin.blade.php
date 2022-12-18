@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Ubah Data Buku</div>
        <div class="card-body">

            <form action="{{ url('admin/editadmin/' .$books->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
                <label>Nama Buku</label></br>
                <input type="text" name="judul" id="judul" value="{{$books->judul}}" class="form-control"></br>
                <label>Penulis</label></br>
                <input type="text" name="penulis" id="penulis" value="{{$books->penulis}}" class="form-control"></br>
                <label>Bahasa</label></br>
                <input type="text" name="jumlah_halaman" id="jumlah_halaman" value="{{$books->jumlah_halaman}}" class="form-control"></br>
                <label>Halaman</label></br>
                <input type="text" name="tahun_rilis" id="tahun_rilis" value="{{$books->tahun_rilis}}" class="form-control"></br>
                <label>ISBN</label></br>
                <input type="text" name="isbn" id="isbn" value="{{$books->isbn}}" class="form-control"></br>
                <input type="submit" value="Ubah" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
