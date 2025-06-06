@php
    $scale = 0.8;
@endphp
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            function toggleMessageBoxSimple() {
                openMessageBoxSimple('success', 'Link copied!');
                setTimeout(()=>{
                    closeMessageBoxSimple();
                }, 3000)
            }

            function closeMessageBoxSimple() {
                const messageBoxElement = document.getElementById('msgBox');
                messageBoxElement.classList.remove('message-box__opened');
            }

            function openMessageBoxSimple(type, title) {
                var msgBox = document.getElementById('msgBox');
                var msgBoxTitle = document.getElementById('msgBoxTitle');
                msgBox.classList.add('message-box__opened');

                if (type === 'success') {
                    msgBox.classList.add('bg-green-800');
                } else {
                    msgBox.classList.add('bg-red-800');
                }

                msgBoxTitle.innerHTML = title;
            }

            const copyLinkBtn = document.getElementById('copyLinkBtn');
            if (copyLinkBtn) {
                copyLinkBtn.addEventListener('click', () => {
                    copyToClipboard(window.location.href);
                    toggleMessageBoxSimple();
                });
            }
        });

        function copyToClipboard(text) {
            if (!navigator.clipboard) {
                // Fallback for older browsers
                const textarea = document.createElement("textarea");
                textarea.value = text;
                textarea.style.position = "fixed"; // Prevent scrolling to bottom
                document.body.appendChild(textarea);
                textarea.focus();
                textarea.select();
                try {
                    document.execCommand("copy");
                } catch (err) {
                    console.error("Fallback: Copy failed", err);
                }
                document.body.removeChild(textarea);
            } else {
                navigator.clipboard.writeText(text).catch(err => {
                    console.error("Clipboard API: Copy failed", err);
                });
            }
        }

    </script>
@endpush
<div class="flex items-center" role="none">

    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->

    <a
        href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"
        class="cursor-pointer px-4"
        style="transform: scale({{$scale}})">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#111827"
            stroke-width="1"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
        </svg>
    </a>

    <a
        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
        class="cursor-pointer px-4"
        style="transform: scale({{$scale}})"
        target="_blank"
        rel="noopener noreferrer">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#111827"
            stroke-width="1"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
        </svg>
    </a>
    <a
        class="cursor-pointer px-4"
        href="mailto:?subject={{$title}}&body={{ urlencode(url()->current()) }}">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#111827"
            stroke-width="1"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
            <path d="M3 7l9 6l9 -6" />
        </svg>

    </a>
    <div id="copyLinkBtn" class="cursor-pointer px-4" style="transform: scale({{$scale}})">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#111827"
            stroke-width="1"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
        </svg>
    </div>

</div>
