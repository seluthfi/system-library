@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="flex flex-col gap-6">
    <!-- Flash Notification (Statis, tanpa tombol close dan tanpa JS) -->
    @if (session('success'))
        <div class="flex items-center gap-3 px-5 py-2.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-xl border border-secondary/30 shadow-sm self-start">
            <div class="w-7 h-7 rounded-full bg-secondary-fixed/50 flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
            <span class="font-label-md text-label-md font-semibold text-on-surface">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Header Title & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
        <div class="flex items-center gap-3 flex-wrap">
            <h1 class="font-headline-xl text-headline-xl lg:text-display-lg text-on-surface tracking-tight font-bold">Daftar Buku</h1>
            <div class="flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-surface-container-low/80 backdrop-blur-xl shadow-xs border border-white/60">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span class="font-label-md text-label-md text-primary font-semibold">Total {{ $books->count() }} Judul</span>
            </div>
        </div>
        <div>
            <a href="{{ route('books.create') }}" class="group inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-[0_8px_24px_rgba(124,58,237,0.35)] hover:shadow-[0_12px_28px_rgba(124,58,237,0.5)] hover:scale-[1.02] active:scale-[0.98] transition-all no-underline">
                <span class="material-symbols-outlined text-lg transition-transform group-hover:rotate-90">add</span>
                <span>Tambah Buku Baru</span>
            </a>
        </div>
    </div>

    <!-- Responsive Book Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full pt-2">
        @forelse ($books as $book)
            <div class="group flex flex-col justify-between p-5 rounded-[28px] bg-surface-container-lowest/55 backdrop-blur-2xl border border-white/60 shadow-[0_12px_32px_-4px_rgba(30,41,59,0.06),0_2px_8px_-2px_rgba(30,41,59,0.03),inset_0_1px_2px_rgba(255,255,255,0.85)] hover:shadow-[0_20px_48px_-6px_rgba(124,58,237,0.14),inset_0_1px_2px_rgba(255,255,255,0.95)] hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col gap-4">
                    <!-- Area Cover Placeholder (gradient + ikon menu_book, TANPA gambar) -->
                    <div class="relative w-full h-48 rounded-2xl overflow-hidden bg-gradient-to-tr from-purple-100 via-indigo-50 to-blue-100 shadow-[inset_0_2px_6px_rgba(255,255,255,0.6)] flex items-center justify-center p-4">
                        <div class="w-16 h-16 rounded-2xl bg-surface-container-lowest/80 backdrop-blur-md flex items-center justify-center text-primary shadow-sm group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">menu_book</span>
                        </div>

                        <!-- Stock Badge -->
                        @if ($book->stock > 0)
                            <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-secondary-fixed/90 backdrop-blur-md text-on-secondary-fixed font-label-sm text-label-sm shadow-[0_2px_8px_rgba(0,107,95,0.15)] flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                <span>Stok: {{ $book->stock }}</span>
                            </div>
                        @else
                            <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-error-container/90 backdrop-blur-md text-on-error-container font-label-sm text-label-sm shadow-[0_2px_8px_rgba(186,26,26,0.15)] flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                <span>Habis</span>
                            </div>
                        @endif
                    </div>

                    <!-- Metadata & Title -->
                    <div class="flex flex-col gap-1.5">
                        <div>
                            <span class="inline-flex px-2.5 py-0.5 rounded-full bg-primary-fixed/60 text-primary font-label-sm text-label-sm font-semibold">
                                {{ $book->category->name ?? 'Belum ada kategori' }}
                            </span>
                        </div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug line-clamp-2" title="{{ $book->title }}">
                            {{ $book->title }}
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            {{ $book->author }} • {{ $book->year }}
                        </p>
                    </div>
                </div>

                <!-- Action Row -->
                <div class="flex items-center justify-between gap-1.5 pt-4 mt-4 bg-surface-container-low/50 p-2 rounded-2xl backdrop-blur-md">
                    <a href="{{ route('books.show', $book->id) }}" class="flex-1 py-1.5 px-2 rounded-full bg-surface-container-lowest/80 hover:bg-surface-container-lowest text-on-surface font-label-md text-label-md text-center transition-all shadow-xs flex items-center justify-center gap-1 no-underline">
                        <span class="material-symbols-outlined text-sm">visibility</span>
                        <span>Detail</span>
                    </a>
                    <a href="{{ route('books.edit', $book->id) }}" class="py-1.5 px-3 rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed font-label-md text-label-md transition-all shadow-xs flex items-center justify-center gap-1 no-underline" title="Sunting Buku">
                        <span class="material-symbols-outlined text-sm">edit</span>
                        <span class="hidden sm:inline">Edit</span>
                    </a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');" class="inline m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-1.5 px-2.5 rounded-full bg-surface-container-lowest/60 hover:bg-error-container text-error hover:text-on-error-container transition-all flex items-center justify-center cursor-pointer border-0" title="Hapus Buku">
                            <span class="material-symbols-outlined text-sm">delete</span>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full py-16 text-center rounded-[28px] bg-surface-container-lowest/50 backdrop-blur-xl border border-white/60 flex flex-col items-center justify-center gap-3">
                <div class="w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-3xl">menu_book</span>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface-variant font-medium">Belum ada buku</p>
            </div>
        @endforelse
    </div>
</div>
@endsection