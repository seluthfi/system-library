@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="flex flex-col gap-6">
    <!-- Top Navigation Row / Quick Back -->
    <div class="flex items-center justify-between gap-4">
        <a href="{{ route('books.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-surface-container-lowest/70 backdrop-blur-xl shadow-xs border border-white/60 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/90 transition-all no-underline">
            <span class="material-symbols-outlined text-lg">arrow_back</span>
            <span class="font-label-lg text-label-lg">Kembali ke Daftar Buku</span>
        </a>
    </div>

    <!-- Main Detail Glass Container -->
    <div class="w-full bg-surface-container-lowest/55 backdrop-blur-2xl rounded-3xl border border-white/60 shadow-xl p-6 sm:p-10 md:p-12 relative overflow-hidden">
        <!-- Decorative Iridescent Atmospheric Blobs -->
        <div class="absolute -top-32 -right-28 w-96 h-96 rounded-full bg-gradient-to-bl from-primary-fixed/40 via-secondary-fixed/20 to-transparent blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-36 -left-20 w-80 h-80 rounded-full bg-gradient-to-tr from-secondary-container/25 via-primary-fixed-dim/20 to-transparent blur-2xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 relative z-10 items-center">
            <!-- Left Column: Area Cover Placeholder (gradient + ikon, TANPA gambar) -->
            <div class="lg:col-span-4 flex flex-col items-center">
                <div class="w-full max-w-xs aspect-[3/4.2] rounded-3xl p-3 bg-surface-container-lowest/60 backdrop-blur-xl border border-white/80 shadow-lg flex flex-col justify-between overflow-hidden">
                    <div class="w-full h-full rounded-2xl bg-gradient-to-tr from-purple-100 via-indigo-50 to-blue-100 flex flex-col items-center justify-center p-6 shadow-inner text-center">
                        <div class="w-20 h-20 rounded-2xl bg-surface-container-lowest/80 backdrop-blur-md flex items-center justify-center text-primary shadow-sm mb-4">
                            <span class="material-symbols-outlined text-5xl">menu_book</span>
                        </div>
                        <h2 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-2 leading-snug">{{ $book->title }}</h2>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5">{{ $book->author }}</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Metadata & Actions -->
            <div class="lg:col-span-8 flex flex-col justify-between gap-6">
                <div class="flex flex-col gap-4">
                    <!-- Category Pill -->
                    <div>
                        <span class="inline-flex px-3.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm tracking-wide font-semibold">
                            {{ $book->category->name ?? 'Belum ada kategori' }}
                        </span>
                    </div>

                    <!-- Title & Author -->
                    <div class="space-y-2">
                        <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight leading-tight font-bold">
                            {{ $book->title }}
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant flex items-center gap-2">
                            <span>Ditulis oleh</span>
                            <span class="font-semibold text-primary">{{ $book->author }}</span>
                        </p>
                    </div>

                    <!-- 3 Info Tiles Bento: Tahun Terbit, Stok, ID -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                        <!-- Tile 1: Tahun Terbit -->
                        <div class="p-4 rounded-2xl bg-surface-container-lowest/70 backdrop-blur-md shadow-xs border border-white/60 flex flex-col justify-between">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Tahun Terbit</span>
                            <div class="flex items-baseline gap-1 mt-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">{{ $book->year }}</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant/70 mt-1">Tahun Publikasi</span>
                        </div>

                        <!-- Tile 2: Stok -->
                        <div class="p-4 rounded-2xl bg-surface-container-lowest/70 backdrop-blur-md shadow-xs border border-white/60 flex flex-col justify-between">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Stok</span>
                            <div class="flex items-baseline gap-1 mt-2">
                                <span class="font-headline-lg text-headline-lg font-bold {{ $book->stock > 0 ? 'text-secondary' : 'text-error' }}">{{ $book->stock }}</span>
                                <span class="font-label-md text-label-md text-on-surface-variant">Eks.</span>
                            </div>
                            <span class="font-body-sm text-body-sm {{ $book->stock > 0 ? 'text-secondary font-medium' : 'text-error font-medium' }} mt-1">
                                {{ $book->stock > 0 ? 'Tersedia' : 'Habis' }}
                            </span>
                        </div>

                        <!-- Tile 3: ID -->
                        <div class="p-4 rounded-2xl bg-surface-container-lowest/70 backdrop-blur-md shadow-xs border border-white/60 flex flex-col justify-between">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">ID Buku</span>
                            <div class="flex items-baseline gap-1 mt-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-primary">#{{ $book->id }}</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant/70 mt-1">Identifikasi Database</span>
                        </div>
                    </div>
                </div>

                <!-- Bottom Action Row: Edit & Hapus -->
                <div class="pt-4 flex flex-wrap items-center gap-3 border-t border-surface-container/60">
                    <a href="{{ route('books.edit', $book->id) }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed font-label-lg text-label-lg shadow-sm transition-all duration-200 no-underline">
                        <span class="material-symbols-outlined text-lg">edit</span>
                        <span>Edit Buku</span>
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');" class="inline m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-error-container/80 text-on-error-container hover:bg-error-container font-label-lg text-label-lg shadow-xs transition-all cursor-pointer border-0">
                            <span class="material-symbols-outlined text-lg">delete</span>
                            <span>Hapus Buku</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection