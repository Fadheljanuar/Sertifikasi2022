<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjamanbuku extends Model
{
    use HasFactory;

    protected $table = 'pinjaman';
    protected $primaryKey = 'id';
    protected $fillable = ['book_id','user_id','tanggal_pinjam','tanggal_pengembalian',"status"];

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
