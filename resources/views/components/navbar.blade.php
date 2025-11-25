<div class="navbar fixed px-10 bg-transparent z-50 bg-navbar">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            {{-- Mobile --}}
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/hospital.png') }}" alt="Hospital" class="w-10">
            <a href="{{ route('beranda') }}"
                class="font-bold text-transparent bg-clip-text bg-linear-to-r from-(--bg-secondary) to-black/80 bg-size-[200%_auto] bg-right transition-all duration-300 ease-out hover:bg-left text-navbar">Klinik
                Umum</a>
        </div>
    </div>

    {{-- Desktop --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 gap-6">
            <li><a href="{{ route('beranda') }}"
                    class="font-semibold text-transparent bg-clip-text bg-linear-to-r from-(--bg-secondary) text-navbar to-black/80 bg-size-[200%_auto] bg-right transition-all duration-300 ease-out hover:bg-left relative group px-3 py-2">
                    Beranda
                    <span
                        class="absolute bottom-1.5 left-0 w-full h-0.5 bg-linear-to-r from-(--bg-primary) to-(--bg-secondary) {{ request()->routeIs('beranda') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }} transition-transform duration-300 ease-out origin-left"></span>
                </a></li>
            <li><a href="#"
                    class="font-semibold text-transparent bg-clip-text bg-linear-to-r from-(--bg-secondary) text-navbar to-black/80 bg-size-[200%_auto] bg-right transition-all duration-300 ease-out hover:bg-left relative group px-3 py-2">Jadwal
                    Dokter
                    <span
                        class="absolute bottom-1.5 left-0 w-full h-0.5 bg-linear-to-r from-(--bg-primary) to-(--bg-secondary) scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span></a>
            </li>
            <li><a href="#"
                    class="font-semibold text-transparent bg-clip-text bg-linear-to-r from-(--bg-secondary) text-navbar to-black/80 bg-size-[200%_auto] bg-right transition-all duration-300 ease-out hover:bg-left relative group px-3 py-2">Riwayat
                    Reservasi
                    <span
                        class="absolute bottom-1.5 left-0 w-full h-0.5 bg-linear-to-r from-(--bg-primary) to-(--bg-secondary) scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span></a>
            </li>   
        </ul>
    </div>
    <div class="navbar-end">
        @guest
            <a href="{{ route('login') }}"
                class="text-black/80 bg-(--bg-secondary) rounded font-semibold py-1 px-3 hover:bg-[#48a5a2] hover:shadow-md shadow-sm shadow-green-500/80 transition-all ease-out hover:-translate-y-px">Login</a>
        @endguest
        @auth
            <div>Sudah login</div>
        @endauth
    </div>
</div>
