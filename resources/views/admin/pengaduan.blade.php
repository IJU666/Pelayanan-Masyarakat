@extends('layout.layout-admin')
@section('bebas')
<div id="app">
    @include('admin.sidebar')
</div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

<div class="page-heading">
<h3>Tabel Data Pengaduan</h3>
</div>
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
            <td>lampiran</td>
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
            <td>lampiran</td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td>lampiran</td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Aspirasi</td>
            <td>Terjadi Perampokan bersenjata</td>
            <td>12/04/05</td>
            <td>Kota Bandung</td>
            <td>Jalan Arcamanik, Kota Bandung</td>
            <td>lampiran</td>
            <td class="text-center"><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
        </tr>
        {{-- useless --}}
    </table>
</div>
</div>

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
