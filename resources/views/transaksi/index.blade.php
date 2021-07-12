@extends('layouts.app')

@section('title', 'Halaman Transaksi')

@section('table_transaksi')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Daftar Transaksi</h4>
        <p class="card-category">Table yang menunjukkan semua daftar transaksi</p>
      </div>
      <div class="card-body">
        <a href="/transaksi/create" class="btn btn-primary">Buat Transaksi Baru</a>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="text-primary">
              <th>nomor</th>
              <th>Nama Transaksi</th>
              <th>Foto</th>
              <th>Tipe</th>
              <th>Waktu Transaksi</th>
              <th>Jumlah Transaksi</th>
              <th>Aksi</th>
            </thead>

            <tbody>
              <?php $nomor = 1; ?>
              @foreach($semuaTransaksi as $transaksi)                        
              <tr>
                <td>{{ $nomor++; }}</td>
                <td>{{ $transaksi->namaTransaksi }}</td>
                <td>
                  <img src="{{ asset('foto_transaksi') }}/{{ $transaksi->fotoTransaksi }}" alt="Foto Transaksi" width="75">
                </td>
                <td>{{ $transaksi->tipeTransaksi }}</td>
                <td>{{ $transaksi->waktuTransaksi }}</td>
                <td>{{ $transaksi->jumlahTransaksi }}</td>
                <td>
                  <a href="/transaksi/hapus/{{ $transaksi->id }}" class="btn btn-sm btn-danger">Hapus</a>
                  <a href="/transaksi/detail/{{ $transaksi->id }}" class="btn btn-sm btn-success">Detail</a>
                  <a href="/transaksi/edit/{{ $transaksi->id }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection