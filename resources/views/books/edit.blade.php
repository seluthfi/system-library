@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="relative w-full py-4 flex flex-col items-center justify-center">
    <!-- Breadcrumb & Quick Back -->
    <div class="w-full max-w-[740px] mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <div class="flex items-center gap-2">
            <a href="{{ route('books.index') }}" class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container-lowest/60 backdrop-blur-md shadow-xs no-underline">
                <span class="material-symbols-outlined text-base">collections_bookmark</span>
                <span>Buku</span>
            </a>
            <span class="text-on-surface-variant/40 text-xs">/</span>
            <span class="font-label-md text-label-md text-on-surface font-semibold px-3 py-1.5 rounded-full bg-surface-container-high/40 backdrop-blur-md">
                Edit Buku
            </span>
        </div>
        <a href="{{ route('books.index') }}" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-lowest shadow-xs transition-all text-label-md font-label-md self-start sm:self-auto group no-underline">
            <span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-0.5">arrow_back</span>
            <span>Kembali ke Daftar Buku</span>
        </a>
    </div>

    <!-- Main Liquid Glass Form Card -->
    <div class="w-full max-w-[740px] rounded-3xl bg-surface-container-lowest/55 backdrop-blur-2xl p-6 sm:p-10 border border-white/60 shadow-[0_16px_40px_-8px_rgba(30,41,59,0.07),0_4px_16px_-4px_rgba(30,41,59,0.04)] relative">
        <!-- Specular Highlight Top Edge Overlay -->
        <div class="absolute inset-x-8 top-0 h-[1.5px] bg-gradient-to-r from-transparent via-white/80 to-transparent pointer-events-none"></div>

        <!-- Card Header Area -->
        <div class="flex items-start gap-4 sm:gap-5 pb-6">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-secondary to-secondary-container flex items-center justify-center text-on-secondary shadow-md shrink-0">
                <span class="material-symbols-outlined text-2xl sm:text-3xl" style="font-variation-settings: 'FILL' 1;">edit_note</span>
            </div>
            <div class="flex flex-col">
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">Edit Buku</h1>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                    Perbarui informasi inventaris buku pada katalog perpustakaan.
                </p>
            </div>
        </div>

        <!-- Form Content -->
        <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            @include('books._form', ['book' => $book])
        </form>
    </div>
</div>
@endsection