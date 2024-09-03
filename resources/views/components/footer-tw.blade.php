@push('scripts')
    <script>
        const email = document.getElementById('e');
        email.href = 'mailto:info@mimo.ba';
        email.innerHTML = 'info@mimo.ba';
    </script>
@endpush
<div id="nav-desktop" class="relative bg-white sticky top-0 z-20 border-t-2 border-gray-100 transition ease-in-out duration-300 delay-200">
    <div class="mx-auto px-4 sm:px-6">
        <div class="flex flex-col items-center justify-between py-6 md:justify-between md:flex-row">
            <div class="">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Emir Salihović Mimo</span>
                    <span class="h-8 w-auto sm:h-10 text-sm text-slate-900 uppercase">&copy; {{ date("Y") }} Emir Salihović</span>
                </a>
            </div>
            <nav class="space-x-5 md:space-x-10 md:flex">
                <a href="https://www.instagram.com/mimoarchitect/" class="text-sm uppercase font-medium text-black-500 hover:underline">Instagram</a>
                <a id="e" href="#" class="text-sm uppercase font-medium text-black-500 hover:underline"></a>
            </nav>
        </div>
    </div>
</div>
