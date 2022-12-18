@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ url('/admin/createbuku') }}" class="btn btn-primary " title="Tambah Buku"
                   style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin-left:12px">
                    <i class="fa fa-plus" aria-hidden="true"></i> Tambah Buku

                <a href="{{ url('admin/pinjambuku/createpinjambuku') }}" class="btn btn-primary" title="Tambah Peminjam"
                   style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin-left:12px">
                    <i class="fa fa-plus" aria-hidden="true"></i> Tambah Peminjam
                </a>

                <a href="{{ url('admin/pinjambuku/indexpinjambuku') }}" class="btn btn-secondary" title="Daftar Pinjam"
                       style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin-left:12px">
                        <i class="fa fa-book" aria-hidden="true"></i> Daftar Pinjam
                </a>



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
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->judul }}</td>
                                        <td>{{ $book->penulis }}</td>
                                        <td>{{ $book->jumlah_halaman }}</td>
                                        <td>{{ $book->tahun_rilis }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td>
                                            <a href="{{ url('/admin/editadmin/' . $book->id ) }}" title="Edit Book"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>



                                            <form method="POST" action="{{ url('/admin/adminaccess/' . $book->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>

                                        </td>
                                    </tr>
    @endforeach
@endsection
