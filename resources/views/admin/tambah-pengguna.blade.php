@extends('layout.layout-admin')
@section('bebas')
    <div class="page-content bg-white p-3 rounded-3 shadow-lg">
        <form action="{{ route('register') }}" method="post"></form>
        <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="col-lg-11 mt-3 mx-auto">
                    <h5 class="fw-semibold">Data Diri</h5>
                    <div class="row">
                {{-- nama --}}
                    <div class="col-lg-6">
                        <label for="nama" class="form-text">Nama Lengkap</label>
                        <input type="text" name="name" id="nama" placeholder="Masukan Nama Lengkap" class="form-control" :value="old('name')" required autofocus>
                    </div>
                    <div class="col-lg-6">
                        <label for="nik" class="form-text">Nomor Induk Keluarga (NIK)</label>
                        <input type="number" name="nik" :value="old('nik')" id="nik" required placeholder="Masukan NIK" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="tglahir" class="form-text">Tanggal Lahir</label>
                        <input type="date" name="tglahir" :value="old('tglahir')" id="nik" required class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="kelamin" class="form-text">Pilih jenis kelamin</label>
                        <select name="kelamin" id="kelamin" :value="old('kelamin')" class="form-select">
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="telp" class="form-text">No telepon aktif</label>
                        <input type="number" name="telp" id="telp" :value="old('telp')" class="form-control" placeholder="Masukan no telepon">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="pekerjaan" class="form-text">Pekerjaan saat ini</label>
                        <input type="text" name="telp" id="telp" :value="old('pekerjaan')" class="form-control" placeholder="Masukan Nama Pekerjaan">
                    </div>
                </div>
                <h5>Akun</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="username" class="form-text">Nama Pengguna</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Nama Pengguna" id="">
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-text">Nama Email Aktif</label>
                        <input type="email" name="email" :value="old('email')" class="form-control" placeholder="Masukan Email" id="" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="password" class="form-text">Masukan Kata Sandi</label>
                        <input type="password" name="email" :value="old('email')" class="form-control" placeholder="Masukan Email" id="" required  required autocomplete="new-password">
                    </div>
                    <div class="col-lg-6">
                        <label for="password_confirmation" class="form-text">Ulangi Kata Sandi</label>
                        <input type="password" placeholder="Masukan Kata Sandi" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                    </div>
                    <label for="" class="form-text">Role</label>
                    <div class="col-lg-10 mx-auto row">
                    <div class="form-check col-lg-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Masyarakat
                        </label>
                      </div>
                      <div class="form-check col-lg-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Petugas
                        </label>
                      </div>
                      <div class="form-check col-lg-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Admin
                        </label>
                      </div>
                </div>
            </div>
                <div class="text-center mt-4 mb-3">
                    <button type="submit" class="btn btn-primary col-lg-5">Kirim</button>
                </div>
            </div>
    </div>
@endsection
