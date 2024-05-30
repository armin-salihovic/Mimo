<x-main-layout :meta="$meta">
    <x-lightbox />

    <div class="mx-auto">

        <div class="py-24">
            <div class=" mx-auto  w-1/3">
                <h1 class="px-4 text-3xl sm:text-4xl lg:text-7xl md:my-24 uppercase text-center text-neutral-900 font-bold tracking-wider">Design</h1>
            </div>
        </div>

        <div class="py-24 px-6">
            <div class=" mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
                    <a href="{{ route('designs.show',$designs[0]->slug) }}">
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </a>
                    <div>
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </div>
                    <div>
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </div><div>
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </div>
                    <div>
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </div>
                    <div>
                        <img src="{{ $designs[0]->image('thumbnail') }}" alt="">
                        <h2 class="font-bold text-xl mt-4">{{ $designs[0]->title }}</h2>
                        <h3 class="text-xl mt-2">{{ $designs[0]->title }}</h3>
                    </div>

                </div>
            </div>

{{--            @foreach($designs as $design)--}}
{{--                <div></div>--}}
{{--            @endforeach--}}
        </div>
    </div>
</x-main-layout>

