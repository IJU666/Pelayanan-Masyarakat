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
<h3>Form Tanggapan</h3>
</div>
<div class="page-content bg-white p-3 col-lg-8 mx-auto rounded-3 shadow-lg">
    <form action="" method="post">
        <div class="col-lg-10 mb-3 mx-auto">
            <div class="form-floating">
                <textarea name="tanggapan" placeholder="Tanggapan" id="tanggapan" cols="30" rows="10" class="form-control" style="height: 150px;"></textarea>
                <label for="tanggapan">Berikan Tanggapan</label>
            </div>
        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <select name="status" id="" class="form-select">
                <option value="Diproses">Diproses</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>
        <div class="col-lg-10 text-end mx-auto">
            <button type="submit" class="btn btn-primary col-lg-4">Kirim</button>
        </div>
    </form>
</div>
@endsection
