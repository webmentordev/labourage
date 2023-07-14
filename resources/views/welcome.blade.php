@extends('layouts.apps')
@section('content')
    <header class="w-full h-[95vh] bg-center bg-cover flex items-center justify-center" style="background-image: url({{ asset('assets/h1_hero.jpg.webp') }})">
        <div class="w-full max-w-6xl">
            <h1 class="text-white text-7xl title font-semibold">Safe & Reliable <span class="text-main title">Load Dispatch</span><br>SERVICE!</h1>
        </div>
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
                <div class="w-full group relative border border-dark-light/20 rounded-md p-12 py-[80px] text-center overflow-hidden">
                    <div class="absolute bg-main w-full h-full left-0 top-0 translate-y-[100%] group-hover:translate-y-0 transition-all"></div>
                    <div class="relative z-10">
                        {{-- <img class="m-auto mb-3 group-hover:hidden" width="60" src="https://api.iconify.design/mdi:truck-fast-outline.svg?color=%23F16024" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="60" src="https://api.iconify.design/mdi:truck-fast-outline.svg?color=%23FFFFFF" alt="Truck Logo"> --}}

                        <img class="m-auto mb-3 group-hover:hidden" width="120" src="{{ asset('assets/icons/truck_1-1.png') }}" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="120" src="{{ asset('assets/icons/truck_1.png') }}" alt="Truck Logo">

                        <h3 class="text-3xl font-bold text-main-2 mb-6 group-hover:text-white">Dry Van Freight</h3>
                        <p class="text-gray-600 leading-8 group-hover:text-white">Today, reach out if you are looking for professional truck dispatching services that can help you achieve a peace of mind. You've found the right truck dispatching company to manage your dry van freight.</p>
                    </div>
                </div>

                <div class="w-full group relative border border-dark-light/20 rounded-md p-12 py-[80px] text-center overflow-hidden">
                    <div class="absolute bg-main w-full h-full left-0 top-0 translate-y-[100%] group-hover:translate-y-0 transition-all"></div>
                    <div class="relative z-10">
                        {{-- <img class="m-auto mb-3 group-hover:hidden" width="60" src="https://api.iconify.design/mdi:truck-flatbed.svg?color=%23F16024" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="60" src="https://api.iconify.design/mdi:truck-flatbed.svg?color=%23FFFFFF" alt="Truck Logo"> --}}


                        <img class="m-auto mb-3 group-hover:hidden" width="120" src="{{ asset('assets/icons/truck_2-2.png') }}" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="120" src="{{ asset('assets/icons/truck_2.png') }}" alt="Truck Logo">

                        <h3 class="text-3xl font-bold text-main-2 mb-6 group-hover:text-white">Flatbed/Stepdeck</h3>
                        <p class="text-gray-600 leading-8 group-hover:text-white">Labourage has you covered if you are looking for professional truck dispatch services for flatbed or conestoga freight. Reach out to our freight dispatchers for reliable management.</p>
                    </div>
                </div>

                <div class="w-full group relative border border-dark-light/20 rounded-md p-12 py-[80px] text-center overflow-hidden">
                    <div class="absolute bg-main w-full h-full left-0 top-0 translate-y-[100%] group-hover:translate-y-0 transition-all"></div>
                    <div class="relative z-10">
                        {{-- <img class="m-auto mb-3 group-hover:hidden" width="60" src="https://api.iconify.design/mdi:truck-snowflake.svg?color=%23F16024" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="60" src="https://api.iconify.design/mdi:truck-snowflake.svg?color=%23FFFFFF" alt="Truck Logo"> --}}

                        <img class="m-auto mb-3 group-hover:hidden" width="120" src="{{ asset('assets/icons/truck_3-3.png') }}" alt="Truck Logo">
                        <img class="m-auto mb-3 hidden group-hover:block" width="120" src="{{ asset('assets/icons/truck_3.png') }}" alt="Truck Logo">
                        <h3 class="text-3xl font-bold text-main-2 mb-6 group-hover:text-white">Reefer Freight</h3>
                        <p class="text-gray-600 leading-8 group-hover:text-white">Labourage offers expert reefer truck dispatchers to manage your reefer freight effectively. Reach out today to speak with one of our dedicated truck dispatchers and start achieving your goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="max-w-7xl m-auto py-[70px] grid grid-cols-2 gap-12">
            <div class="w-full">
                <div class="font-semibold mb-1">
                    <span class="text-main text-lg">About Our Company</span>
                    <h2 class="title text-main-2 text-6xl mt-2 leading-[70px]">Safe Logistic & Transport <br> Solutions That Saves Our <br> Valuable Time!</h2>
                </div>
                <p class="text-gray-600 mb-3 leading-8">Labourage ensures seamless connections between our clients and reputable brokers, facilitated by our team of experienced truck dispatchers. With our comprehensive services, you can focus on driving while we handle all the necessary paperwork. Bid farewell to concerns about lumper and detention pay follow-ups with brokers, as our dedicated in-house dispatchers take care of all administrative tasks on your behalf. You have the flexibility to select your preferred driving areas, while we diligently negotiate for the most lucrative rates and optimal routes</p>
                <p class="text-gray-600 mb-3 leading-8">By collaborating directly with esteemed Shippers and Brokers, you can expect timely compensation for your services. Rest assured, our committed truck dispatcher diligently examines multiple load boards to identify the finest dry freight, flatbed, and reefer loads available. Labourage keeps your trucks on the move, ensuring they never remain stuck for extended periods.</p>
                <a href="#" class="bg-main py-5 px-12 text-white rounded-lg inline-block uppercase text-sm">More About Us</a>
            </div>

            <div class="w-full flex justify-end">
                <img src="{{ asset('assets/about.webp') }}" alt="About Labourage Image">
            </div>
        </div>
    </section>




    <section class="w-full min-h-[1100px] bg-center bg-cover" style="background-image: url({{ asset('assets/section_bg01.jpg') }})">
        <div class="max-w-6xl flex justify-end items-center w-full m-auto py-[70px] h-fit">
            <div class="w-full max-w-2xl bg-gray-100 bg-opacity-90 backdrop-blur-sm p-12 rounded-lg">
                <div class="font-semibold mb-1">
                    <span class="text-main text-lg">Get A Quote For Free</span>
                    <h2 class="title text-main-2 text-4xl mt-2 leading-[70px]">Request A Free Quote</h2>
                    <p class="font-normal">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                </div>
                <form action="#" method="POST" class="grid grid-cols-2 gap-6">
                    @csrf
                    <div class="w-full">
                        <x-input-field id="name" class="block mt-1 w-full"
                                        type="text"
                                        name="name"
                                        required placeholder="Name" autocomplete="off" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="w-full">
                        <x-input-field id="email" class="block mt-1 w-full"
                                        type="email"
                                        name="email"
                                        required placeholder="Email Address" autocomplete="off" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    
@endsection