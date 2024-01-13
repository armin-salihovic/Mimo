@php
    $meta = [
       "title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
       "description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
       "thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
    ];
@endphp

<x-main-layout :meta="$meta">
    <x-lightbox />

    <div class="container mx-auto">
        <div class="flex justify-center">
            <h1 class="px-4 text-3xl my-12 sm:text-4xl lg:text-5xl md:my-24 uppercase">Contact</h1>
        </div>

        <div class="md:col-span-3 col-span-6 px-6">
            <div class="mb-10 3xl:mb-12 4xl:mb-20 w-full flex flex-col sm:flex-row">
                <div class="flex flex-col w-full sm:w-1/2 mb-10 sm:mb-0 sm:pr-5 3xl:pr-7 4xl:pr-10">
                    <input bind:value="{emailData.name}" on:keyup="{validateName}" on:focus="{closeMessageBox}" class="{validations.name.errors ? 'border-red-500' : 'border-black focus:border-green-400'} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="name" type="text" placeholder="Name">
{{--                    {#if validations.name.errors}--}}
{{--                    <small class="text-red-500">{ validations.name.message }</small>--}}
{{--                    {/if}--}}
                </div>
                <div class="flex flex-col w-full sm:w-1/2 sm:pl-5 3xl:pl-7 4xl:pl-10">
                    <input bind:value="{emailData.email}" on:focus="{closeMessageBox}" class="{validations.email.errors ? 'border-red-500' : 'border-black focus:border-green-400'} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="email" type="email" placeholder="Email">
{{--                    {#if validations.email.errors}--}}
{{--                    <small class="text-red-500">{ validations.email.message }</small>--}}
{{--                    {/if}--}}
                </div>
            </div>
            <div class="flex flex-col w-full mb-10 3xl:mb-12 4xl:mb-20">
                <input bind:value="{emailData.subject}" on:keyup="{validateSubject}" on:focus="{closeMessageBox}" class="{validations.subject.errors ? 'border-red-500' : 'border-black focus:border-green-400 '} py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none" id="subject" type="text" placeholder="Subject">
{{--                {#if validations.subject.errors}--}}
{{--                <small class="text-red-500">{ validations.subject.message }</small>--}}
{{--                {/if}--}}
            </div>
            <div class="flex flex-col w-full mb-5 3xl:mb-7 4xl:mb-10">
                <textarea bind:value="{emailData.message}" on:keyup="{validateMessage}" on:focus="{closeMessageBox}" placeholder="Message" class="{validations.message.errors ? 'border-red-500' : 'border-black focus:border-green-400'} h-48 3xl:h-64 4xl:h-96 resize-none py-2 3xl:py-2.5 4xl:py-4 border-b text-gray-600 placeholder-gray-400 outline-none"></textarea>
{{--                {#if validations.message.errors}--}}
{{--                <small class="text-red-500">{ validations.message.message }</small>--}}
{{--                {/if}--}}
            </div>
            <button on:click="{sendEmail}" class="py-2 3xl:py-2.5 4xl:py-4 px-10 3xl:px-12 4xl:px-20 mr-2 3xl:mr-2.5 4xl:mr-4 mb-2 3xl:mb-2.5 4xl:mb-4 text-base font-bold focus:outline-none bg-white border border-black focus:z-10 focus:ring-4 focus:ring-gray-200 transition ease-in-out {sending ? 'bg-black text-white cursor-not-allowed' : 'hover:bg-black hover:text-white'}" disabled='{sending}'>
{{--                {#if sending}--}}
{{--                <img class="animate-paw-wave icon-white h-5 3xl:h-7 4xl:h-10" src="/img/icon-paw.svg" alt="icon paw">--}}
{{--                {:else}--}}
                <span>Send</span>
{{--                {/if}--}}
            </button>
        </div>
    </div>

    </div>
</x-main-layout>


