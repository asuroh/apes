<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['kode_transaksi', 'user_id', 'buku_id', 'tgl_pinjam', 'tgl_kembali', 'status', 'ket'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function buku()
    {
    	return $this->belongsTo(Buku::class);
    }
}
