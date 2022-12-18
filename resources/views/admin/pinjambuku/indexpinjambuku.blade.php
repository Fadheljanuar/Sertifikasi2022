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
                                    <th>Judul Buku</th>
                                    <th>Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        @foreach($pinjaman as $pinjam)
                                            <td>{{ $loop->iteration }}</td>
                                            @foreach ($books as $book)
                                                @if ($pinjam->book_id == $book->id)
                                                    <td class=>
                                                        {{ $book->judul }}
                                                    </td>
                                                @endif
                                            @endforeach

                                            @foreach ($users as $user)
                                                @if ($pinjam->user_id == $user->id)
                                                    <td class=>
                                                        {{ $user->email }}
                                                    </td>
                                                @endif
                                            @endforeach
                                            <td>{{ $pinjam->tanggal_pinjam }}</td>
                                            <td>{{ $pinjam->tanggal_kembali }}</td>
                                            <td>@if($pinjam->status == 0)
                                                    Selesai di Pinjam
                                                @endif

                                                @if($pinjam->status == 1)
                                                    Sedang di Pinjam
                                                @endif</td>

                                            <td>
                                                @if ($pinjam->status == 1)
                                                    <form method="POST" action="{{ url('/admin/pinjambuku/indexpinjambuku/' . $pinjam->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('Patch') }}
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                                               value= 0 />
                                                        <button type="submit" class="btn btn-danger btn-sm" title="DONE" onclick="return confirm(&quot;Buku sudah dikembalikan?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Selesai</button>
                                                    </form>
                                                @endif
                                            </td>
                                    </tr>
    @endforeach
@endsection


