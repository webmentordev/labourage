<footer class="bg-dark-main">
    <div class="max-w-6xl m-auto px-4">
        <div class="flex items-center justify-between py-[80px] border-b border-b-white/10">
            <h2 class="text-4xl text-white font-bold">We Understand The Importance <br> Approaching Each Work!</h2>
            <span class="text-3xl text-main font-bold">+ 1 000-000-0000</span>
        </div>
        <div class="py-[60px] text-white/60 grid grid-cols-4 gap-6">
            <div class="py-3">
                <h3 class="mb-7 text-white font-semibold text-xl">Company</h3>
                <ul class="flex flex-col">
                    <a class="mb-5 font-thin" href="{{ route('home') }}">About Us</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Company</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Press & Blog</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Privacy Policy</a>
                </ul>
            </div>

            <div class="py-3">
                <h3 class="mb-7 text-white font-semibold text-xl">OPEN HOUR</h3>
                <ul class="flex flex-col">
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Monday 11am-7pm</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Tuesday-Friday 11am-8pm</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Saturday 10am-6pm</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Sunday 11am-6pm</a>
                </ul>
            </div>

            <div class="py-3">
                <h3 class="mb-7 text-white font-semibold text-xl">RESOURCES</h3>
                <ul class="flex flex-col">
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Home Insurance</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Travel Insurance</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Car Insurance</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Business Insurance</a>
                    <a class="mb-5 font-thin" href="{{ route('home') }}">Heal Insurance</a>
                </ul>
            </div>

            <div class="py-3">
                <div class="flex items-end mb-8">
                    <img src="{{ asset('assets/load.png') }}" width="60" alt="Labourage Logo"><span class="text-4xl text-white logo tracking-widest ml-3">Labourage</span>
                </div>
                <p>Our expert team at Labourage ensures secure and dependable load dispatch, guaranteeing smooth workflows and peace of mind.</p>
                <ul class="flex items-center mt-6">
                    <a class="mr-6" href="#"><img src="https://api.iconify.design/devicon:twitter.svg" width="18" alt="Twitter Logo"></a>
                    <a class="mr-6" href="#"><img src="https://api.iconify.design/logos:facebook.svg" width="18" alt="Facebook Logo"></a>
                    <a class="mr-6" href="#"><img src="https://api.iconify.design/skill-icons:instagram.svg" width="18" alt="Instagram Logo"></a>
                    <a href="#"><img src="https://api.iconify.design/logos:google-icon.svg" width="18" alt="Google+ Logo"></a>
                </ul>
            </div>
        </div>
        <div class="py-[50px] text-white/80">
            <p class="text-center">Copyright &copy; {{ date("Y") }} All rights reserved</p>
        </div>
    </div>
</footer>