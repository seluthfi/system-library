<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login Sistem Perpustakaan</title>
    @include('partials.head')
</head>
<body class="min-h-screen bg-[#F8F9FE] text-on-surface antialiased relative overflow-hidden flex flex-col justify-center items-center p-4 selection:bg-primary-fixed selection:text-on-primary-fixed">

    <!-- Ambient Fluid Iridescent Blobs Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
        <div class="blob w-[520px] h-[520px] bg-purple-300 top-[-100px] left-[-80px]"></div>
        <div class="blob w-[560px] h-[560px] bg-pink-200 top-[15%] right-[-120px]" style="animation-delay: -3s;"></div>
        <div class="blob w-[460px] h-[460px] bg-orange-100 bottom-[-80px] left-[15%]" style="animation-delay: -6s;"></div>
        <div class="blob w-[500px] h-[500px] bg-sky-200 bottom-[-100px] right-[10%]" style="animation-delay: -9s;"></div>
        <div class="blob w-[400px] h-[400px] bg-emerald-100 top-[40%] left-[30%]" style="animation-delay: -12s;"></div>
    </div>

    <!-- Centered Liquid Glass Card -->
    <main class="w-full max-w-[460px] liquid-glass-card rounded-[2rem] p-8 sm:p-10 my-auto shadow-2xl">
        
        <!-- Top Card Header: Book Logo & Titles -->
        <div class="text-center flex flex-col items-center">
            <div class="relative mb-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-purple-500/20 via-sky-300/30 to-pink-300/30 p-1 backdrop-blur-xl border border-white shadow-[0_8px_20px_rgba(124,58,237,0.18)] flex items-center justify-center">
                    <div class="w-full h-full rounded-full bg-white/70 flex items-center justify-center shadow-inner">
                        <svg class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
            </div>

            <h1 class="text-2xl sm:text-[26px] font-extrabold text-on-surface tracking-tight font-display-lg">
                Login Sistem Perpustakaan
            </h1>
            <p class="text-sm text-on-surface-variant font-medium mt-1">
                Masuk untuk mengelola buku, kategori, dan anggota
            </p>
        </div>

        <!-- Error Message Pill -->
        @if (isset($errors) && $errors->any())
            <div class="mt-6 glass-error-pill rounded-2xl px-4 py-3 flex flex-col gap-2">
                @foreach ($errors->all() as $error)
                    <div class="flex items-center gap-2.5">
                        <div class="w-5 h-5 rounded-full bg-red-500/20 border border-red-500/30 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xs text-red-600 font-bold">priority_high</span>
                        </div>
                        <p class="text-xs sm:text-[13px] font-semibold text-red-700 leading-snug">
                            {{ $error }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Login Form -->
        <form class="mt-6 space-y-4" action="{{ route('login.submit') }}" method="POST">
            @csrf

            <!-- Email Field -->
            <div>
                <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 ml-3" for="email">
                    Email
                </label>
                <div class="glass-input-wrapper rounded-full px-4 py-3 flex items-center gap-3">
                    <svg class="w-5 h-5 text-outline shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <input 
                        id="email"
                        name="email"
                        type="email" 
                        value="{{ old('email') }}"
                        placeholder="nama@institusi.ac.id" 
                        required
                        class="w-full bg-transparent text-sm text-on-surface placeholder-outline focus:outline-none font-medium"
                    >
                </div>
            </div>

            <!-- Password Field -->
            <div>
                <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 ml-3" for="password">
                    Password
                </label>
                <div class="glass-input-wrapper rounded-full px-4 py-3 flex items-center gap-3">
                    <svg class="w-5 h-5 text-outline shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <input 
                        id="password"
                        name="password"
                        type="password" 
                        placeholder="Masukkan password Anda" 
                        required
                        class="w-full bg-transparent text-sm text-on-surface placeholder-outline focus:outline-none font-medium tracking-wider"
                    >
                </div>
            </div>

            <!-- Full-Width Primary Login Button -->
            <div class="pt-3">
                <button type="submit" class="w-full glass-primary-btn rounded-full py-3.5 px-6 text-white font-bold text-sm sm:text-base flex items-center justify-center gap-2 cursor-pointer shadow-lg hover:opacity-95">
                    <span>Login</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </form>

    </main>

</body>
</html>