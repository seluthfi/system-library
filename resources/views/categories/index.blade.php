@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
<div class="flex flex-col gap-6">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
        <div class="flex items-center gap-3 flex-wrap">
            <h1 class="font-headline-xl text-headline-xl lg:text-display-lg text-on-surface tracking-tight font-bold">Kategori Buku</h1>
            <div class="flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-surface-container-low/80 backdrop-blur-xl shadow-xs border border-white/60">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                <span class="font-label-md text-label-md text-secondary font-semibold">Total {{ count($categories) }} Kategori</span>
            </div>
        </div>
    </div>

    <!-- Category Cards Grid -->
    @php
        $palettes = [
            [
                'bg' => 'from-white/70 via-purple-50/40 to-violet-100/30',
                'icon_bg' => 'bg-gradient-to-tr from-purple-200/70 to-violet-100/90 text-primary',
                'glow' => 'bg-primary/10',
                'dot' => 'bg-primary',
                'icon' => 'terminal'
            ],
            [
                'bg' => 'from-white/70 via-teal-50/40 to-cyan-100/30',
                'icon_bg' => 'bg-gradient-to-tr from-teal-200/70 to-emerald-100/90 text-secondary',
                'glow' => 'bg-secondary/10',
                'dot' => 'bg-secondary',
                'icon' => 'database'
            ],
            [
                'bg' => 'from-white/70 via-sky-50/40 to-blue-100/30',
                'icon_bg' => 'bg-gradient-to-tr from-sky-200/70 to-blue-100/90 text-sky-700',
                'glow' => 'bg-sky-500/10',
                'dot' => 'bg-sky-600',
                'icon' => 'hub'
            ],
            [
                'bg' => 'from-white/70 via-amber-50/40 to-orange-100/30',
                'icon_bg' => 'bg-gradient-to-tr from-amber-200/70 to-orange-100/90 text-amber-700',
                'glow' => 'bg-amber-500/10',
                'dot' => 'bg-amber-600',
                'icon' => 'corporate_fare'
            ],
            [
                'bg' => 'from-white/70 via-rose-50/40 to-pink-100/30',
                'icon_bg' => 'bg-gradient-to-tr from-rose-200/70 to-pink-100/90 text-tertiary',
                'glow' => 'bg-tertiary/10',
                'dot' => 'bg-tertiary',
                'icon' => 'account_tree'
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full pt-2">
        @forelse($categories as $category)
            @php
                $palette = $palettes[$loop->index % count($palettes)];
            @endphp
            <div class="group relative rounded-3xl p-6 bg-gradient-to-br {{ $palette['bg'] }} backdrop-blur-2xl border border-white/70 shadow-[0_12px_36px_-6px_rgba(30,41,59,0.06),0_2px_8px_rgba(30,41,59,0.03)] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex items-center gap-5 overflow-hidden">
                <div class="absolute -top-12 -right-12 w-36 h-36 rounded-full {{ $palette['glow'] }} blur-2xl group-hover:scale-125 transition-all pointer-events-none"></div>
                <div class="w-14 h-14 rounded-2xl {{ $palette['icon_bg'] }} shadow-[inset_0_1px_2px_rgba(255,255,255,0.9),0_6px_16px_rgba(30,41,59,0.06)] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">{{ $palette['icon'] }}</span>
                </div>
                <div class="flex items-center gap-2.5 min-w-0">
                    <span class="w-2 h-2 rounded-full {{ $palette['dot'] }} shrink-0"></span>
                    <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight truncate">{{ $category }}</h2>
                </div>
            </div>
        @empty
            <div class="col-span-full py-16 text-center rounded-3xl bg-surface-container-lowest/50 backdrop-blur-xl border border-white/60 flex flex-col items-center justify-center gap-3">
                <div class="w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-3xl">category</span>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface-variant font-medium">Belum ada kategori</p>
            </div>
        @endforelse
    </div>
</div>
@endsection