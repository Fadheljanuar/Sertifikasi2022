<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $table ='book';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','penulis','jumlah_halaman','tahun_rilis','isbn'];

}
