<nav class="bg-blue-800 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('landingpage') }}" class="text-xl font-bold">
            UHNP
        </a>

        {{-- Hamburger Button (mobile) --}}
        <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
            class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        {{-- Desktop Menu --}}
        <ul class="hidden md:flex gap-6 text-sm font-medium">
            <li><a href="{{ route('landingpage') }}" class="hover:text-yellow-300">Beranda</a></li>
            <li><a href="{{ route('profile') }}" class="hover:text-yellow-300">Profil</a></li>
            <li><a href="{{ route('lectures') }}" class="hover:text-yellow-300">Dosen</a></li>
            <li><a href="{{ route('students') }}" class="hover:text-yellow-300">Mahasiswa</a></li>
            <li><a href="{{ route('announcements') }}" class="hover:text-yellow-300">Pengumuman</a></li>
            <li><a href="{{ route('news') }}" class="hover:text-yellow-300">Berita</a></li>
        </ul>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
        <ul class="flex flex-col gap-3 text-sm font-medium">
            <li><a href="{{ route('landingpage') }}" class="hover:text-yellow-300">Beranda</a></li>
            <li><a href="{{ route('profile') }}" class="hover:text-yellow-300">Profil</a></li>
            <li><a href="{{ route('lectures') }}" class="hover:text-yellow-300">Dosen</a></li>
            <li><a href="{{ route('students') }}" class="hover:text-yellow-300">Mahasiswa</a></li>
            <li><a href="{{ route('announcements') }}" class="hover:text-yellow-300">Pengumuman</a></li>
            <li><a href="{{ route('news') }}" class="hover:text-yellow-300">Berita</a></li>
        </ul>
    </div>
</nav>