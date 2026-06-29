<nav class="bg-blue-800 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('landingpage') }}" class="text-xl font-bold">
            UHNP
        </a>
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="{{ route('landingpage') }}" class="hover:text-yellow-300">Beranda</a></li>
            <li><a href="{{ route('profile') }}" class="hover:text-yellow-300">Profil</a></li>
            <li><a href="{{ route('lectures') }}" class="hover:text-yellow-300">Dosen</a></li>
            <li><a href="{{ route('students') }}" class="hover:text-yellow-300">Mahasiswa</a></li>
            <li><a href="{{ route('announcements') }}" class="hover:text-yellow-300">Pengumuman</a></li>
            <li><a href="{{ route('news') }}" class="hover:text-yellow-300">Berita</a></li>
        </ul>
    </div>
</nav>