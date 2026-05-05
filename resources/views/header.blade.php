<header class="relative w-full h-[140px]">


    <!-- Overlay -->
    <div class="absolute inset-0 bg-white/10  border-b border-white/20"></div>

    <!-- Navbar -->
    <nav class="relative z-10 flex justify-between items-center h-full px-8 text-white">

        <!-- Logo + Title -->
        <div class="flex items-center gap-4">
            <img src="{{ asset('storage/lele/logo fix.png') }}"
                 class="w-20 h-20 object-contain">

            <div class="font-bold text-2xl uppercase">
                Ternak Lele Saiful
            </div>
        </div>

        <!-- Menu -->
        <div class="hidden md:flex gap-10 text-sm uppercase tracking-widest">
            <a href="/" class="hover:text-blue-300">Beranda</a>
            <a href="#" class="hover:text-blue-300">Tentang Kami</a>
            <a href="#" class="hover:text-blue-300">Produk</a>
            <a href="#" class="border px-5 py-2 rounded-full hover:bg-white hover:text-black transition">
                Login
            </a>
        </div>

    </nav>
</header>