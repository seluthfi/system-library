<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Dashboard') - Library System</title>
    @include('partials.head')
</head>
<body class="bg-background font-body-md text-on-surface antialiased min-h-screen relative overflow-x-hidden selection:bg-primary-fixed selection:text-on-primary-fixed flex flex-col justify-between">

    <!-- Ambient Liquid Blurs Background -->
    <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
        <div class="absolute -top-32 -left-24 w-96 h-96 rounded-full bg-gradient-to-tr from-purple-200/40 via-pink-200/40 to-rose-100/30 blur-3xl"></div>
        <div class="absolute top-1/4 -right-32 w-[32rem] h-[32rem] rounded-full bg-gradient-to-br from-sky-200/35 via-teal-100/30 to-indigo-100/30 blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/3 w-[28rem] h-[28rem] rounded-full bg-gradient-to-tr from-emerald-100/30 via-orange-100/25 to-purple-100/35 blur-3xl"></div>
    </div>

    <!-- Floating Pill Header -->
    <header class="fixed top-0 inset-x-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-4 pb-2">
            <div class="w-full bg-surface-container-lowest/65 backdrop-blur-2xl shadow-[0_8px_32px_-4px_rgba(30,41,59,0.06),0_2px_8px_-2px_rgba(30,41,59,0.03)] border border-white/70 rounded-3xl sm:rounded-full px-4 sm:px-6 py-2.5 flex flex-wrap md:flex-nowrap items-center justify-between gap-3">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 shrink-0 text-inherit no-underline">
                    <div class="w-9 h-9 rounded-full bg-primary-fixed/80 text-primary flex items-center justify-center shadow-inner backdrop-blur-md">
                        <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
                    </div>
                    <span class="font-headline-sm text-headline-sm text-on-surface tracking-tight font-bold">Library System</span>
                </a>

                <!-- Nav Pill -->
                <nav class="order-3 md:order-2 w-full md:w-auto flex items-center justify-center gap-1 bg-surface-container-low/80 backdrop-blur-md p-1 rounded-full overflow-x-auto">
                    <a href="{{ route('dashboard') }}" class="font-label-lg text-label-lg px-4 py-1.5 rounded-full transition-all whitespace-nowrap {{ request()->routeIs('dashboard') ? 'bg-primary-container text-on-primary-container shadow-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('books.index') }}" class="font-label-lg text-label-lg px-4 py-1.5 rounded-full transition-all whitespace-nowrap {{ request()->routeIs('books.*') || request()->routeIs('buku.*') ? 'bg-primary-container text-on-primary-container shadow-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                        Buku
                    </a>
                    <a href="{{ route('kategori') }}" class="font-label-lg text-label-lg px-4 py-1.5 rounded-full transition-all whitespace-nowrap {{ request()->routeIs('kategori*') ? 'bg-primary-container text-on-primary-container shadow-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                        Kategori
                    </a>
                    <a href="{{ route('anggota') }}" class="font-label-lg text-label-lg px-4 py-1.5 rounded-full transition-all whitespace-nowrap {{ request()->routeIs('anggota*') ? 'bg-primary-container text-on-primary-container shadow-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                        Anggota
                    </a>
                </nav>

                <!-- User Login & Tombol Keluar -->
                <div class="order-2 md:order-3 flex items-center gap-3 shrink-0">
                    @auth
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs uppercase shadow-xs">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <span class="font-label-md text-label-md text-on-surface font-semibold hidden lg:inline">{{ Auth::user()->name }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="inline m-0">
                            @csrf
                            <button type="submit" class="font-label-lg text-label-lg flex items-center gap-1.5 px-3 sm:px-4 py-1.5 rounded-full bg-surface-container-low/80 text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all cursor-pointer">
                                <span class="material-symbols-outlined text-base">logout</span>
                                <span class="hidden sm:inline">Keluar</span>
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="w-full pt-28 pb-12 grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full py-6 text-center text-xs text-on-surface-variant shrink-0">
        <p>© Library System</p>
    </footer>

</body>
</html>