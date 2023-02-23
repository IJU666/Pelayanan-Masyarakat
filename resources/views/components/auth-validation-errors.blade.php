@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="text-danger text-center alert alert-danger">
            {{ __('Ada sesuatu yang salah') }} <br>
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        </div>
    </div>
@endif
