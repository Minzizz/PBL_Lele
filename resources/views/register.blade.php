<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ternak Lele Saiful</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.08); /* lebih transparan */
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;

            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center text-white relative">

    <!-- BACKGROUND -->
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('storage/lele/1207.jpg') }}"
             class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- CARD -->
    <div class="glass-card w-full max-w-md p-10 z-10">

        <h2 class="text-2xl font-bold mb-2">Set up your account</h2>
        <p class="text-sm text-white/60 mb-8">
            Silakan isi data untuk membuat akun baru
        </p>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- NAME -->
            <input type="text" name="name" placeholder="Nama Lengkap"
                class="w-full mb-4 px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-blue-400 text-white placeholder-white/60">

            <!-- EMAIL -->
            <input type="email" name="email" placeholder="Email Address"
                class="w-full mb-4 px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-blue-400 text-white placeholder-white/60">

            <!-- PASSWORD -->
            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-blue-400 text-white placeholder-white/60">

            <!-- CONFIRM -->
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full mb-6 px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-blue-400 text-white placeholder-white/60">

            <!-- BUTTON -->
            <button type="submit"
                class="w-full bg-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Continue
            </button>

            <!-- LOGIN LINK -->
            <p class="text-sm text-center mt-6 text-white/60">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-400 hover:underline">
                    Login →
                </a>
            </p>

        </form>
    </div>

</body>
</html>