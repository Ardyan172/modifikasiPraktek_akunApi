<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
// untuk menggunakan fungsi redirect
use Illuminate\Http\UploadedFile;
// sepertinya digunakan untuk request foto
use App\Http\Controllers\Controller;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->Transaksi = new Transaksi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semuaTransaksi = $this->Transaksi->ambilSemuaBaris();

        return view('transaksi.index', ['semuaTransaksi' => $semuaTransaksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("transaksi.formulirCreateTransaksi");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            // validasi semua permintaan data yang diisi di formulir method create
            'namaTransaksi' => ['required', 'min:2', 'max:50'],
            'tipeTransaksi' => ['required'],
            'jumlahTransaksi' => ['required', 'numeric', 'min:1000'],
            'fotoTransaksi' => ['required', 'mimes:jpg,png,jpeg']
        ],

        [
            'namaTransaksi.required' => 'ups, nama transaksi harus diisi',
            'tipeTransaksi.required' => 'ups, tipe transaksi harus diisi',
            'jumlahTransaksi.required' => 'ups, jumlah transaksi harus diisi',
            'fotoTransaksi.required' => 'ups, foto transaksi harus dimasukan'
        ]);

        if ($request->hasFile('fotoTransaksi') ) {
            $dapatkanFoto = $request->fotoTransaksi;
            $namaFotoBaru = $request->namaTransaksi . '.' . $request->fotoTransaksi->extension();
            $dapatkanFoto->move(public_path('foto_transaksi'), $namaFotoBaru);
        }

        $this->Transaksi->tambahData($request, $namaFotoBaru);
        // kalau user memasukkan type transaksi tapi mengaktifkan translate maka akan error

        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailData = $this->Transaksi->detailData($id);
        return view('transaksi.detailTransaksi', ['detailData' => $detailData]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailData = $this->Transaksi->detailData($id);

        if (file_exists(public_path('foto_transaksi/' . $detailData->fotoTransaksi)) ) {
            unlink(public_path('foto_transaksi/' . $detailData->fotoTransaksi));
        }
        
        $this->Transaksi->hapusData($id);
        return redirect('/transaksi');
    }
}
