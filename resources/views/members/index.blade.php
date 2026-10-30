@extends('layouts.app')

@section('title', 'Data Member')

@section('content')
<div class="flex flex-col gap-6">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
        <div class="flex items-center gap-3 flex-wrap">
            <h1 class="font-headline-xl text-headline-xl lg:text-display-lg text-on-surface tracking-tight font-bold">Data Member</h1>
            <div class="flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-surface-container-low/80 backdrop-blur-xl shadow-xs border border-white/60">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span class="font-label-md text-label-md text-primary font-semibold">{{ $members->count() }} Member Terdaftar</span>
            </div>
        </div>
    </div>

    <!-- Member List Container (Frosted Glass Panel) -->
    @php
        $avatarThemes = [
            'bg-gradient-to-tr from-primary to-primary-container text-on-primary shadow-[0_4px_16px_rgba(99,14,212,0.25)]',
            'bg-gradient-to-tr from-secondary to-secondary-container text-on-secondary shadow-[0_4px_16px_rgba(0,107,95,0.25)]',
            'bg-gradient-to-tr from-sky-600 to-blue-500 text-white shadow-[0_4px_16px_rgba(2,132,199,0.25)]',
            'bg-gradient-to-tr from-amber-600 to-orange-500 text-white shadow-[0_4px_16px_rgba(217,119,6,0.25)]',
            'bg-gradient-to-tr from-tertiary to-tertiary-container text-on-tertiary shadow-[0_4px_16px_rgba(160,0,47,0.25)]',
        ];
    @endphp

    <div class="flex flex-col gap-3.5 w-full pt-2">
        @forelse($members as $member)
            <div class="group relative rounded-2xl bg-surface-container-lowest/70 backdrop-blur-xl p-4 sm:p-5 border border-white/70 shadow-[0_4px_20px_-2px_rgba(30,41,59,0.03)] hover:shadow-[0_12px_32px_-4px_rgba(99,14,212,0.08)] hover:bg-surface-container-lowest/90 transition-all duration-300 flex items-center gap-4">
                <div class="relative shrink-0 w-12 h-12 rounded-full {{ $avatarThemes[$loop->index % count($avatarThemes)] }} flex items-center justify-center font-headline-md text-headline-md font-bold select-none">
                    {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($member->name, 0, 2)) }}
                </div>
                <div class="flex flex-col min-w-0">
                    <h2 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight truncate">{{ $member->name }}</h2>
                </div>
            </div>
        @empty
            <div class="py-16 text-center rounded-3xl bg-surface-container-lowest/50 backdrop-blur-xl border border-white/60 flex flex-col items-center justify-center gap-3">
                <div class="w-16 h-16 rounded-full bg-surface-container-high/60 flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-3xl">group</span>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface-variant font-medium">Belum ada member</p>
            </div>
        @endforelse
    </div>
</div>
@endsection