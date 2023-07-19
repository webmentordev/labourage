<nav class="top-0 left-0 sticky z-50 bg-dark-main w-full">
    <div class="max-w-7xl m-auto py-5 px-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-end"><img src="{{ asset('assets/load.png') }}" width="60" alt="Labourage Logo"><span class="text-4xl text-white logo tracking-widest ml-3">Labourage</span></a>
        <ul class="text-white">
            <a class="ml-7 hover:text-main transition-all" href="#">Home</a>
            <a class="ml-7 hover:text-main transition-all" href="#">About</a>
            <a class="ml-7 hover:text-main transition-all" href="#">Services</a>
            <a class="ml-7 hover:text-main transition-all" href="#">Blogs</a>
            <a class="ml-7 hover:text-main transition-all" href="{{ route('contact') }}">Contact</a>
            <a class="bg-main py-4 px-7 ml-7 rounded-lg uppercase text-sm" href="#">Get a Quote</a>
        </ul>
    </div>
</nav>