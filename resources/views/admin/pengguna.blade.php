@extends('layout.layout-admin')
@section('bebas')
<form action="" method="get">
    <div class="row mb-2">
        <div class="col-lg-4">
            <input type="text" name="search" id="" placeholder="Cari Pengguna" class="form-control">
        </div>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
        <div class="col-lg-6 text-end">
            <a href="" class="btn btn-outline-primary">Cetak Data</a>
            <a href="" class="btn btn-primary">Tambah Pengguna</a>
        </div>
    </div>
    </form>
<div class="page-content bg-white p-3 rounded-3 shadow-lg">
    <table class="table table-striped ">
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>tanggal lahir</th>
        <th>jenis kelamin</th>
        <th>no telp</th>
        <th>pekerjaan</th>
        <th>username</th>
        <th>email</th>
        <th>Aksi</th>
        <tr>
            <td>1</td>
            <td >Fauzi Maulana Akbar</td>
            <td>320405120405</td>
            <td>12/04/2005</td>
            <td>Laki - Laki</td>
            <td>085797752287</td>
            <td>Pengusaha</td>
            <td>IJU666</td>
            <td>uji@gmail.com</td>
            <td><a href="/tambah" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
    </table>
</div>
@endsection
