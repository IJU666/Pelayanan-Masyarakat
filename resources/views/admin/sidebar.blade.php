<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
<div class="sidebar-header position-relative">
<div class="d-flex justify-content-between align-items-center">
    <div class="logo col-lg-12 text-center">
        <h3 class="fw-semibold ">Freedom</h3>
    </div>
    <div class="sidebar-toggler  x">
        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
    </div>
</div>
</div>
<div class="sidebar-menu">
<ul class="menu" style="height: 65vh;">
    <li class="sidebar-title">Menu</li>

    <li
        class="sidebar-item {{ ($title === 'Pengaduan') ? 'active' : '' }}">
        <a href="{{ 'pengaduan' }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Data Pengaduan</span>
        </a>
    </li>
    <li
        class="sidebar-item  {{ ($title === 'Pengguna') ? 'active' : '' }}">
        <a href="{{ 'pengguna' }}" class='sidebar-link'>
            <i class="fa-solid fa-user"></i>
            <span>Data Pengguna</span>
        </a>
    </li>
    <li
    class="sidebar-item {{ ($title === 'Hasil') ? 'active' : '' }} ">
    <a href="{{ 'hasil' }}" class='sidebar-link'>
        <i class="fa-solid fa-check"></i>
        <span>Hasil Pengaduan</span>
    </a>
</li>
</ul>
{{-- <div class="sidebar-item"> --}}
<ul class="menu float-bottom">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <li class="sidebar-item">
                            <li class="sidebar-link">
                        <i class="fa-solid fa-door-open"></i>
                <span class="">
            {{ __('Keluar') }}
        </span>
            </li>
        </x-responsive-nav-link>
    </form>
        </li>
</ul>
{{-- </div>  --}}
</div>
