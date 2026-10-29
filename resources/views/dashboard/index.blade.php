@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex flex-col gap-space-xl">
    <!-- Top Bar: Page Meta & Primary Quick Action -->
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-space-lg">
        <div class="flex flex-col gap-space-xs">
            <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">{{ $title }}</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">
                {{ $description }}
            </p>
        </div>
        <div>
            <a href="{{ route('books.create') }}" class="inline-flex items-center gap-2 px-space-lg py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-[0_8px_24px_-4px_rgba(99,14,212,0.35)] hover:shadow-[0_12px_28px_-4px_rgba(99,14,212,0.45)] hover:opacity-95 transition-all transform hover:-translate-y-0.5 active:translate-y-0 cursor-pointer no-underline">
                <span class="material-symbols-outlined text-lg">add_circle</span>
                <span>Tambah Buku Baru</span>
            </a>
        </div>
    </div>

    <!-- 3-Column Glass Metric Statistics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
        <!-- Metric 1: Jumlah Buku -->
        <div class="relative overflow-hidden rounded-2xl p-space-xl bg-surface-container-lowest/60 backdrop-blur-2xl border border-white/60 shadow-[0_12px_36px_-6px_rgba(30,41,59,0.06),0_2px_8px_-2px_rgba(30,41,59,0.03)] group transition-all duration-300 hover:-translate-y-1">
            <div class="absolute -right-8 -top-8 w-44 h-44 rounded-full bg-primary-fixed/40 blur-2xl pointer-events-none transition-all group-hover:scale-125"></div>
            <div class="relative flex flex-col justify-between h-full gap-space-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col gap-1">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Jumlah Buku</span>
                        <span class="font-display-lg text-display-lg text-on-surface leading-none tracking-tight">{{ $bookCount }}</span>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-primary-fixed/70 text-primary flex items-center justify-center shadow-inner backdrop-blur-md shrink-0">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metric 2: Jumlah Member -->
        <div class="relative overflow-hidden rounded-2xl p-space-xl bg-surface-container-lowest/60 backdrop-blur-2xl border border-white/60 shadow-[0_12px_36px_-6px_rgba(30,41,59,0.06),0_2px_8px_-2px_rgba(30,41,59,0.03)] group transition-all duration-300 hover:-translate-y-1">
            <div class="absolute -right-8 -top-8 w-44 h-44 rounded-full bg-secondary-fixed/40 blur-2xl pointer-events-none transition-all group-hover:scale-125"></div>
            <div class="relative flex flex-col justify-between h-full gap-space-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col gap-1">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Jumlah Member</span>
                        <span class="font-display-lg text-display-lg text-on-surface leading-none tracking-tight">{{ $memberCount }}</span>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-secondary-fixed/70 text-secondary flex items-center justify-center shadow-inner backdrop-blur-md shrink-0">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">group</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metric 3: Jumlah Kategori -->
        <div class="relative overflow-hidden rounded-2xl p-space-xl bg-surface-container-lowest/60 backdrop-blur-2xl border border-white/60 shadow-[0_12px_36px_-6px_rgba(30,41,59,0.06),0_2px_8px_-2px_rgba(30,41,59,0.03)] group transition-all duration-300 hover:-translate-y-1">
            <div class="absolute -right-8 -top-8 w-44 h-44 rounded-full bg-tertiary-fixed/40 blur-2xl pointer-events-none transition-all group-hover:scale-125"></div>
            <div class="relative flex flex-col justify-between h-full gap-space-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col gap-1">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Jumlah Kategori</span>
                        <span class="font-display-lg text-display-lg text-on-surface leading-none tracking-tight">{{ $categoryCount }}</span>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-tertiary-fixed/70 text-tertiary flex items-center justify-center shadow-inner backdrop-blur-md shrink-0">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">category</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection