@extends('layouts.admin')

@push('styles')
<style>
    .portal-shell {
        min-height: 100vh;
        background: #f1f5f9;
    }

    .portal-sidebar {
        position: fixed;
        inset: 0 auto 0 0;
        z-index: 40;
        width: 18rem;
        overflow-y: auto;
        border-right: 1px solid rgba(2, 43, 16, 0.12);
        background: #022b10;
        color: #ffffff;
        transform: translateX(-100%);
        transition: transform 0.2s ease;
    }

    .portal-sidebar.is-open {
        transform: translateX(0);
    }

    .portal-sidebar-brand {
        position: sticky;
        top: 0;
        z-index: 10;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        background: #022b10;
        padding: 1.25rem 1.5rem;
    }

    .portal-main {
        min-height: 100vh;
    }

    .portal-header {
        position: relative;
        z-index: 20;
        border-bottom: 1px solid #e2e8f0;
        background: rgba(255, 255, 255, 0.96);
    }

    .portal-content {
        clear: both;
        padding: 1.5rem 1rem 2.5rem;
    }

    .portal-menu-button {
        display: inline-flex;
        height: 2.75rem;
        width: 2.75rem;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        color: #04531a;
        transition: border-color 0.2s ease, color 0.2s ease;
    }

    .portal-menu-button:hover {
        border-color: #aef0bd;
        color: #08751f;
    }

    .portal-backdrop {
        position: fixed;
        inset: 0;
        z-index: 35;
        display: none;
        background: rgba(15, 23, 42, 0.48);
    }

    .portal-backdrop.is-open {
        display: block;
    }

    @media (min-width: 640px) {
        .portal-content {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (min-width: 1280px) {
        .portal-sidebar {
            display: block;
            transform: translateX(0);
        }

        .portal-main {
            margin-left: 18rem;
        }

        .portal-menu-button,
        .portal-backdrop {
            display: none;
        }
    }
</style>
@endpush

@section('content')
@php
    $portalMenu = [
        ['label' => 'Dashboard', 'url' => '/portal', 'active' => 'portal', 'icon' => 'dashboard'],
        ['label' => 'Profile', 'url' => '/portal/profile', 'active' => 'portal/profile', 'icon' => 'profile'],
        ['label' => 'Change Password', 'url' => '/portal/change-password', 'active' => 'portal/change-password', 'icon' => 'lock'],
        ['label' => 'Investment Plans', 'url' => '/portal/investment-plans', 'active' => 'portal/investment-plans', 'icon' => 'plans'],
        ['label' => 'My Plan', 'url' => '/portal/my-plan', 'active' => 'portal/my-plan', 'icon' => 'my-plan'],
        ['label' => 'Payment History', 'url' => '/portal/payment-history', 'active' => 'portal/payment-history', 'icon' => 'payment'],
        ['label' => 'Support', 'url' => '/portal/support', 'active' => 'portal/support', 'icon' => 'support'],
    ];
    $portalUser = session('portal_user', []);
    $portalUserName = $portalUser['name'] ?? 'User';
    $portalUserEmail = $portalUser['email'] ?? 'Investor Account';
    $avatarInitials = collect(explode(' ', trim($portalUserName)))
        ->filter()
        ->take(2)
        ->map(fn ($part) => strtoupper(substr($part, 0, 1)))
        ->implode('') ?: 'U';
@endphp

<div class="portal-shell">
    <div class="portal-backdrop" data-portal-backdrop></div>

    <aside class="portal-sidebar" data-portal-sidebar>
        <div class="portal-sidebar-brand">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-gold-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5ZM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </span>
                <span>
                    <span class="block text-sm font-extrabold leading-tight">CROSBY FARM</span>
                    <span class="text-xs text-primary-200">Investor Portal</span>
                </span>
            </a>
        </div>

        <nav class="space-y-2 px-4 py-5">
            @foreach ($portalMenu as $item)
                @php
                    $isActive = $item['active'] === 'portal' ? request()->is('portal') : request()->is($item['active']);
                @endphp
                <a href="{{ url($item['url']) }}" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-bold transition {{ $isActive ? 'bg-white/15 text-white' : 'text-primary-100 hover:bg-white/10 hover:text-white' }}">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg {{ $isActive ? 'bg-white/15 text-gold-300' : 'bg-white/10 text-primary-100' }}">
                        @switch($item['icon'])
                            @case('dashboard')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13h8V3H3v10Zm10 8h8V11h-8v10ZM3 21h8v-6H3v6Zm10-12h8V3h-8v6Z"/></svg>
                                @break
                            @case('profile')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14c-4.418 0-8 2.015-8 4.5V20h16v-1.5c0-2.485-3.582-4.5-8-4.5Z"/></svg>
                                @break
                            @case('lock')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11V8a5 5 0 0 1 10 0v3m-9 0h8a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2Z"/></svg>
                                @break
                            @case('plans')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h10M7 6v12m5-12v12"/></svg>
                                @break
                            @case('my-plan')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75 11.25 15 15 9.75M12 3l7 4v5c0 4.5-2.9 7.8-7 9-4.1-1.2-7-4.5-7-9V7l7-4Z"/></svg>
                                @break
                            @case('payment')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18M5 6h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Zm2 8h4"/></svg>
                                @break
                            @case('support')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 10a6 6 0 1 0-12 0v4a3 3 0 0 0 3 3h1m8-7v4a3 3 0 0 1-3 3h-1m-4 0h4m-5-7h.01M15 10h.01"/></svg>
                                @break
                        @endswitch
                    </span>
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
            <a href="{{ url('/login') }}" class="mt-4 flex items-center justify-center gap-2 rounded-lg bg-gold-400 px-4 py-3 text-sm font-extrabold text-primary-900 transition hover:bg-gold-300">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17l5-5-5-5M20 12H9m3 8H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h6"/></svg>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <main class="portal-main">
        <header class="portal-header">
            <div class="flex items-start justify-between gap-4 px-4 py-4 sm:px-6 lg:items-center">
                <div class="flex items-start gap-3">
                    <button type="button" class="portal-menu-button" aria-label="Open portal menu" aria-expanded="false" data-portal-toggle>
                        <svg class="h-6 w-6 portal-menu-open-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/>
                        </svg>
                        <svg class="hidden h-6 w-6 portal-menu-close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <div>
                        <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Investor Account</p>
                        <h1 class="text-2xl font-extrabold text-slate-900 md:text-3xl">@yield('portal_title', 'User Portal')</h1>
                        <p class="mt-1 text-sm font-semibold text-slate-500">@yield('portal_subtitle', 'Manage your Crosby Farm and Investments account.')</p>
                    </div>
                </div>
                <a href="{{ url('/portal/profile') }}" class="ml-auto flex shrink-0 items-center gap-3 rounded-lg border border-slate-200 bg-white px-3 py-2 text-left shadow-sm transition hover:border-primary-200 hover:bg-primary-50">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-primary-600 text-sm font-extrabold text-white">{{ $avatarInitials }}</span>
                    <span class="hidden sm:block">
                        <span class="block max-w-40 truncate text-sm font-extrabold text-slate-900">{{ $portalUserName }}</span>
                        <span class="block max-w-40 truncate text-xs font-semibold text-slate-500">{{ $portalUserEmail }}</span>
                    </span>
                </a>
            </div>
        </header>

        <section class="portal-content">
            @if (session('status'))
                <div class="mb-6 rounded-lg border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-bold text-primary-700">
                    {{ session('status') }}
                </div>
            @endif

            @yield('portal_content')
        </section>
    </main>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.querySelector('[data-portal-sidebar]');
        const backdrop = document.querySelector('[data-portal-backdrop]');
        const toggle = document.querySelector('[data-portal-toggle]');
        const openIcon = document.querySelector('.portal-menu-open-icon');
        const closeIcon = document.querySelector('.portal-menu-close-icon');

        if (!sidebar || !backdrop || !toggle) {
            return;
        }

        const setMenu = (isOpen) => {
            sidebar.classList.toggle('is-open', isOpen);
            backdrop.classList.toggle('is-open', isOpen);
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            openIcon?.classList.toggle('hidden', isOpen);
            closeIcon?.classList.toggle('hidden', !isOpen);
        };

        toggle.addEventListener('click', () => {
            setMenu(!sidebar.classList.contains('is-open'));
        });

        backdrop.addEventListener('click', () => setMenu(false));

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                setMenu(false);
            }
        });

        sidebar.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setMenu(false));
        });
    });
</script>
@endpush
