@extends('layout.layout-admin')
@section('bebas')
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

@endsection
