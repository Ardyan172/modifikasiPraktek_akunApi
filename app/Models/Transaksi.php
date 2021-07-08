<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    public function ambilSemuaBaris()
    {
        return DB::table('transaksi')->get();
    }

    public function tambahData($request, $namaFotoBaru)
    {
        return DB::table('transaksi')->insert([
            'namaTransaksi' => $request->namaTransaksi,
            'tipeTransaksi' => $request->tipeTransaksi,
            'jumlahTransaksi' => $request->jumlahTransaksi,
            'fotoTransaksi' => $namaFotoBaru
        ]);
    }

    public function hapusData($id) 
    {
        return DB::table('transaksi')->where('id', '=', $id)->delete();
    }

    public function detailData($id) 
    {
        return DB::table('transaksi')->find($id);
    }
}
