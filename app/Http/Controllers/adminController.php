<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Books::all();
        return view('admin/adminaccess')->with('books', $books);
    }
}
