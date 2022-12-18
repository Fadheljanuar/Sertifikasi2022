@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                    <div  class="container-fluid" style="margin-top:20px">
                        <div class="fs-6 badge bg-dark text-wrap" style="width: 80rem;">
                            Daftar Buku
                        </div>

                        <div class="card-body ">



                            <br/>
                            <br/>
                            <div class="table-responsive,"style="margin-top:-50px">
                                <table class=",table table-borderless, table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Jumlah Halaman</th>
                                        <th>Tahun Rilis</th>
                                        <th>ISBN</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($book as $book)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $book->judul }}</td>
                                            <td>{{ $book->penulis }}</td>
                                            <td>{{ $book->jumlah_halaman }}</td>
                                            <td>{{ $book->tahun_rilis }}</td>
                                            <td>{{ $book->isbn }}</td>

                                        </tr>
    @endforeach
@endsection
