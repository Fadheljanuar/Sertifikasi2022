<?php

namespace App\Http\Controllers;

use App\Models\Pinjamanbuku;
use App\Models\User;
use App\Models\Books;

use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PinjamanbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $books = Books::all();
        $pinjaman = Pinjamanbuku::all();

        return view('admin/pinjambuku/indexpinjambuku', compact('users','books','pinjaman'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $books = Books::all();

        $tanggal_pinjam = Carbon::now()->format('Y-m-d');
        $tanggal_kembali = Carbon::now()->addDays(7)->format('Y-m-d');

        return view('admin/pinjambuku/createpinjambuku',compact('users','books','tanggal_pinjam','tanggal_kembali'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Pinjamanbuku::create($input);
        return redirect('admin/pinjambuku/indexpinjambuku')->with('flash_message','Sukses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pinjaman = Pinjamanbuku::find($id);
        $input = $request->all();
        $pinjaman->update($input);
        return redirect('admin/pinjambuku/indexpinjambuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjamanbuku $pinjamanbuku)
    {
        //
        $pinjamanbuku->delete();

        return redirect()->route('admin/pinjamanbuku/indexpinjamanbuku');
    }
}
