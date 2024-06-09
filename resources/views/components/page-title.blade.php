<div class="py-24">
    <div class="mx-auto">
        <div class="px-4 {{ isset($subtitle) ? 'md:mt-24 md:mb-11' : 'md:my-24' }}">
            <h1 class="text-3xl sm:text-4xl lg:text-7xl uppercase text-center text-neutral-900 font-bold tracking-wider">{{ $title }}</h1>
            @if(isset($subtitle))
                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-3xl text-center text-neutral-900 tracking-wider">{{ $subtitle }}</h2>
            @endif
        </div>
    </div>
</div>
