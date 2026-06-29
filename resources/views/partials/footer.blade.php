@php $footer = \App\Models\Footer::first(); @endphp

@if($footer)
<footer class="bg-blue-900 text-white mt-10">
    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        
        {{-- Logo & Alamat --}}
        <div>
            @if($footer->image)
                <img src="{{ Storage::url($footer->image) }}" alt="Logo" class="h-16 mb-3">
            @endif
            <p class="text-sm">{{ $footer->alamat }}</p>
            <p class="text-sm mt-1">📧 {{ $footer->email }}</p>
            <p class="text-sm mt-1">📱 {{ $footer->wa }}</p>
        </div>

        {{-- Media Sosial --}}
        <div>
            <h4 class="font-bold mb-3">Media Sosial</h4>
            <ul class="space-y-2 text-sm">
                @if($footer->link_instagram)
                    <li><a href="{{ $footer->link_instagram }}" target="_blank" class="hover:text-yellow-300">Instagram</a></li>
                @endif
                @if($footer->link_youtube)
                    <li><a href="{{ $footer->link_youtube }}" target="_blank" class="hover:text-yellow-300">YouTube</a></li>
                @endif
                @if($footer->link_facebook)
                    <li><a href="{{ $footer->link_facebook }}" target="_blank" class="hover:text-yellow-300">Facebook</a></li>
                @endif
                @if($footer->link_linkedin)
                    <li><a href="{{ $footer->link_linkedin }}" target="_blank" class="hover:text-yellow-300">LinkedIn</a></li>
                @endif
            </ul>
        </div>

        {{-- Google Maps --}}
        <div>
            <h4 class="font-bold mb-3">Lokasi</h4>
            @if($footer->link_gmaps)
                <a href="{{ $footer->link_gmaps }}" target="_blank" class="text-sm hover:text-yellow-300">📍 Lihat di Google Maps</a>
            @endif
        </div>

    </div>
    <div class="text-center text-xs py-3 bg-blue-950">
        © {{ date('Y') }} Universitas HKBP Nommensen Pematangsiantar. All rights reserved.
    </div>
</footer>
@endif