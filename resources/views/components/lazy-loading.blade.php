@push('styles')

    <style>
        .blur-div {
            background-size: cover;
            background-position: center;
        }

        .blur-div.loaded img {
            opacity: 1;
        }

        .blur-div img {
            opacity: 0;
            transition: opacity 200ms ease-in-out;
        }
    </style>
@endpush

@push('scripts')
    <script>
        const blurDivs = document.querySelectorAll('.blur-div')
        blurDivs.forEach(div => {
            const img = div.querySelector('img')

            function loaded() {
                div.classList.add('loaded')
            }

            if (img.complete) {
                loaded();
            } else {
                img.addEventListener('load', loaded)
            }
        })
    </script>
@endpush
