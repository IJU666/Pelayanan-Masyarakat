@extends('layout.layout-admin')
@section('bebas')
<form action="" method="get">
    <div class="text-end mb-2">
        <a href="" class="btn btn-primary">Cetak Data</a>
    </div>
</form>
<div class="page-content bg-white p-3 rounded-3 shadow-lg">
    <table class="table table-striped">
        <th>Jenis laporan</th>
        <th>Isi Laporan</th>
        <th>pengirim</th>
        <th>tanggal kejadian</th>
        <th>Asal pelapor</th>
        <th>Alamat kejadian</th>
        <th>Lampiran</th>
        <th>Status</th>
        <tr>
            <td>Pengaduan</td>
            <td>Terjadi perampokan bersenjata</td>
            <td>Fauzi Maulana Akbar</td>
            <td>12/04/12</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik</td>
            <td><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat</a></td>
            <td>Selesai</td>
        </tr>
    </table>
</div>
    @include('admin.modal-lampiran')
@endsection
