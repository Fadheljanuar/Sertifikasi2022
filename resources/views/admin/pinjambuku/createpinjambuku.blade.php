@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="fs-6 badge bg-dark text-wrap">Masukan Data Peminjam</div>
        <div class="card-body">

            <form action="{{ url('admin/pinjambuku/indexpinjambuku') }}" method="post">
                {!! csrf_field() !!}
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="book_id" class="block font-medium text-sm text-gray-700">Book</label>
                        <select name="book_id" id="book_id" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full" multiple="multiple">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}">{{$book->judul . ' (' . $book->tahun_rilis .')'}}</option>
                            @endforeach
                        </select>
                        @error('book_id')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="user_id" class="block font-medium text-sm text-gray-700">User</label>
                        <select name="user_id" id="user_id" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full" multiple="multiple">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{$user->email . ' (' . $user->name .')'}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tanggal_pinjam">Loan Date</label>
                        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control"
                               value="{{ $tanggal_pinjam }}" readonly/>
                        @error('$tanggal_pinjam')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="return_date">Return Date</label>
                        <input type="date" name="tanggal_pengembalian" id="tanggal_pegembalian" class="form-control"
                               value="{{ $tanggal_kembali }}" readonly/>
                        @error('$tanggal_kembali')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                <input type="hidden" value=1 name="status" id="status" class="form-control"></br>
                <input type="submit" value="Tambahkan" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

