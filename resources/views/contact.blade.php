@extends('layouts.apps')
@section('content')
    <header class="w-full h-[95vh] bg-center bg-cover flex items-center justify-center" style="background-image: url({{ asset('assets/h1_hero.jpg.webp') }})">
        <div class="w-full max-w-6xl">
            <h1 class="text-white text-7xl title font-semibold">Safe & Reliable <span class="text-main title">Load Dispatch</span><br>SERVICE!</h1>
        </div>
    </header>


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