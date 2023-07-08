@extends('layouts.apps')
@section('content')
    <header class="w-full h-[95vh] bg-center bg-cover" style="background-image: url({{ asset('assets/h1_hero.jpg.webp') }})">

    </header>
    <section class="bg-gray-50">
        <div class="max-w-7xl m-auto grid grid-cols-3 gap-6 py-[70px]">
            <div class="flex">
                <img src="https://api.iconify.design/fluent:people-call-20-regular.svg?color=%23F16024" width="58" alt="Calling logo">
                <div class="flex flex-col ml-5">
                    <span class="mb-1 text-dark-light">Call Us Anytime</span>
                    <strong class="text-xl">+ (123) 1800-567-8990</strong>
                </div>
            </div>

            <div class="flex">
                <img src="https://api.iconify.design/mdi:clock-time-five-outline.svg?color=%23F16024" width="58" alt="Clock logo">
                <div class="flex flex-col ml-5">
                    <span class="mb-1 text-dark-light">Sunday CLOSED</span>
                    <strong class="text-xl">Mon - Sat 8.00 - 18.00</strong>
                </div>
            </div>

            <div class="flex">
                <img src="https://api.iconify.design/mingcute:location-2-line.svg?color=%23F16024" width="58" alt="Location logo">
                <div class="flex flex-col ml-5">
                    <span class="mb-1 text-dark-light">Columbia, SC 29201</span>
                    <strong class="text-xl">USA, New York - 10620</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="max-w-6xl m-auto py-[70px]">
            <div class="text-center font-semibold mb-12">
                <span class="text-main text-lg">Our Services</span>
                <h2 class="title text-main-2 text-5xl mt-3">What We Can Do For You</h2>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div class="w-full border border-dark-light/20 rounded-md p-12 py-[80px] text-center">
                    <img class="m-auto mb-3" width="60" src="https://api.iconify.design/mdi:truck-fast-outline.svg?color=%23F16024" alt="Truck Logo">
                    <h3 class="text-3xl font-bold text-main-2 mb-6">Land Transport</h3>
                    <p class="text-gray-600 leading-8">The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                </div>

                <div class="w-full border border-dark-light/20 rounded-md p-12 py-[80px] text-center">
                    <img class="m-auto mb-3" width="60" src="https://api.iconify.design/fluent:vehicle-ship-24-filled.svg?color=%23F16024" alt="Truck Logo">
                    <h3 class="text-3xl font-bold text-main-2 mb-6">Ship Transport</h3>
                    <p class="text-gray-600 leading-8">The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                </div>

                <div class="w-full border border-dark-light/20 rounded-md p-12 py-[80px] text-center">
                    <img class="m-auto mb-3" width="60" src="https://api.iconify.design/fa6-solid:plane-departure.svg?color=%23F16024" alt="Truck Logo">
                    <h3 class="text-3xl font-bold text-main-2 mb-6">Air Transport</h3>
                    <p class="text-gray-600 leading-8">The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="max-w-6xl m-auto py-[70px] grid grid-cols-2 gap-12">
            <div class="w-full">
                <div class="font-semibold mb-12">
                    <span class="text-main text-lg">About Our Company</span>
                    <h2 class="title text-main-2 text-6xl mt-6 leading-[70px]">Safe Logistic & Transport <br> Solutions That Saves Our <br> Valuable Time!</h2>
                </div>
                <p class="text-gray-600 mb-6 leading-8">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                <p class="text-gray-600 mb-6 leading-8">Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                <a href="#" class="bg-main py-5 px-12 text-white rounded-lg inline-block uppercase text-sm">More About Us</a>
            </div>

            <div class="w-full flex justify-end">
                <img src="{{ asset('assets/about.webp') }}" alt="About Labourage Image">
            </div>
        </div>
    </section>
@endsection