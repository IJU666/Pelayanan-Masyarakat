@extends('layout.layout-admin')
@section('bebas')
<form action="" method="get">
<div class="row mb-2">
    <div class="col-lg-4">
        <input type="text" name="search" id="" placeholder="Cari pengaduan" class="form-control">
    </div>
    <div class="col-lg-2">
        <button type="submit" class="btn btn-primary">Cari</button>
    </div>
    <div class="col-lg-6 text-end">
        <a href="" class="btn btn-primary">Cetak Data</a>
    </div>
</div>
</form>
<div class="page-content bg-white p-3 rounded-3 shadow-lg">
    <div class="overflow-x-auto">
    <table class="table table-striped rounded-2">
        <th>No</th>
        <th class="col-lg-2">Jenis Laporan</th>
        <th class="col-lg-2">Isi Laporan</th>
        <th class="col-lg-2">Tanggal Kejadian</th>
        <th class="col-lg-2">Asal Pelapor</th>
        <th class="col-lg-2">Alamat Kejadian</th>
        <th>Lampiran</th>
        <th class="col-lg-2 text-center">Aksi</th>
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td><a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat</a></td>
            <td class="text-center"><a href="{{ 'tanggapan' }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>

        {{-- useless --}}
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td><a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat</a></td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td><a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat</a></td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td><a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat</a></td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        {{-- useless --}}
    </table>
</div>
</div>
@include('admin.modal-lampiran')

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="https://saugi.me">Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
