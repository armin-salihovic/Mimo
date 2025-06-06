@push('scripts')
    <script>
        const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
        })

        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'})
        }
    </script>
@endpush

@push('styles')
    <style>
        .to-top {
            background: white;
            position: fixed;
            bottom: 16px;
            right: 32px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: #999 1px solid;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #1f1f1f;
            text-decoration: none;
            opacity: 0;
            pointer-events: none;
            transition: all .4s;
            z-index: 40;
        }

        .to-top.active {
            bottom: 32px;
            pointer-events: auto;
            opacity: 1;
        }
    </style>
@endpush

<button onclick="scrollToTop()" class="to-top">
    <img src="{{ asset('assets/img/icon-top.svg') }}" alt="top" class="w-4 h-4">
</button>
