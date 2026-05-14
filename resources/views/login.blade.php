<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="icon" type="image/png" href="{{ asset('storage/lele/logo fix.png') }}">
    <title>Login - Ternak Lele Saiful</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS custom -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="min-h-screen font-sans text-white bg-black overflow-x-hidden">

    <!-- BACKGROUND -->
    <div class="fixed inset-0 z-0">
        <img 
            src="{{ asset('storage/lele/1207.jpg') }}" 
            alt="Background Kolam Lele Saiful"
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- WRAPPER UTAMA -->
    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- HEADER -->

        <!-- LOGIN SECTION -->
        <main class="flex-grow flex items-center justify-center p-6 py-20">
            <div class="glass-card p-10 w-full max-w-[400px] shadow-2xl relative">

                <!-- CLOSE BUTTON -->
                <button 
                    onclick="window.history.back()" 
                    class="absolute top-5 right-6 text-2xl hover:scale-110 transition"
                >
                    &times;
                </button>

                <!-- TITLE -->
                <h2 class="text-3xl font-bold text-center mb-10 tracking-tight">
                    Login
                </h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- EMAIL -->
                    <div class="mb-8 border-b border-white/40 pb-2">
                        <label class="text-[10px] uppercase tracking-[0.2em] text-white/70 block mb-1">
                            Email
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="bg-transparent w-full text-white outline-none placeholder-white/30"
                            placeholder="Masukkan email anda..."
                        >
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-6 border-b border-white/40 pb-2">
                        <label class="text-[10px] uppercase tracking-[0.2em] text-white/70 block mb-1">
                            Password
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            required
                            class="bg-transparent w-full text-white outline-none placeholder-white/30"
                            placeholder="********"
                        >
                    </div>

                    <!-- OPTIONS -->
                    <div class="flex justify-between items-center text-[10px] mb-10 uppercase tracking-widest">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="accent-white">
                            <span class="hover:text-blue-300 transition">
                                Remember me
                            </span>
                        </label>

                        <a href="#" class="hover:text-blue-300 transition">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- LOGIN BUTTON -->
                    <button 
                        type="submit"
                        class="w-full bg-white text-black py-3 rounded-full font-bold uppercase tracking-widest hover:bg-black hover:text-white transition duration-300 shadow-lg"
                    >
                        Login
                    </button>

                    <!-- REGISTER -->
                    <p class="text-center text-xs mt-6 text-white/70">
                        Don't have an account?
                        <a 
                            href="{{ route('register') }}" 
                            class="text-white font-semibold hover:underline"
                        >
                            Create account
                        </a>
                    </p>
                </form>
            </div>
        </main>

        <!-- FOOTER -->

    </div>

</body>
</html>