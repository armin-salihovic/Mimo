<div id="msgBox" class="message-box p-6 sm:px-12 3xl:px-16 4xl:px-24 fixed bottom-0 left-0 mr-auto w-full z-50">
    <div class="flex items-center justify-center py-0 lg:py-3 3xl:py-4 4xl:py-6">
        <div class="md:col-span-3 col-span-6 mt-4 md:mt-0">
            <h5 class="text-white text-lg md:text-xl 3xl:text-3xl 4xl:text-4xl font-bold" id="msgBoxTitle"></h5>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var msgCloseBtn = document.getElementById('msgCloseBtn');
        var msgBox = document.getElementById('msgBox');
        var msgBoxTitle = document.getElementById('msgBoxTitle');
        var msgBoxMsgs = document.getElementById('msgBoxMsgs');

        function closeMessageBox() {
            msgBox.classList.remove('message-box__opened');
            msgBoxTitle.innerHTML = '';
            msgBoxMsgs.innerHTML = '';
        }

        msgCloseBtn.addEventListener('click', () => {
            closeMessageBox();
        })

    </script>
@endpush

<style>
    .message-box {
        opacity: 0;
        height: 0;
        transition: transform 300ms ease, -webkit-transform 300ms ease;
        transform: translateY(70px);
    }
    .message-box.message-box__opened {
        opacity: 1;
        height: unset;
        transform: none;
    }
</style>
