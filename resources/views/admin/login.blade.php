@extends('layouts.admin')

@section('title', 'Admin Login')

@section('content')
<main class="min-h-screen bg-[radial-gradient(circle_at_top_left,rgba(18,138,46,0.16),transparent_34rem),linear-gradient(135deg,#022b10,#04531a_48%,#08751f)] px-4 py-10">
    <div class="mx-auto grid min-h-[calc(100vh-5rem)] max-w-6xl items-center gap-10 lg:grid-cols-[1fr_440px]">
        <section class="text-white">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
                <span class="flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 shadow-xl">
                    <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5ZM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </span>
                <span>
                    <span class="block text-xl font-extrabold leading-tight">Heritage Valley Farms</span>
                    <span class="text-sm text-primary-100">Administration System</span>
                </span>
            </a>

            <div class="mt-14 max-w-2xl">
                <p class="mb-4 inline-flex rounded-full border border-gold-300/30 bg-gold-300/10 px-4 py-2 text-sm font-semibold text-gold-200">Secure SSL Protected Login</p>
                <h1 class="text-4xl font-extrabold tracking-tight md:text-6xl">Heritage Valley Farms Admin Portal</h1>
                <p class="mt-6 text-lg leading-8 text-primary-100">
                    Welcome back to the Heritage Valley Farms Management System. Manage farm operations, investors, livestock records, dairy production, and website content securely from one centralized dashboard.
                </p>
            </div>

            <div class="mt-10 grid max-w-2xl gap-4 sm:grid-cols-3">
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Multi-Level Access</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Role-based access for administrators, managers, and staff.</p>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Activity Monitoring</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Track sensitive changes across farm and investor records.</p>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Farm Control</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Operations, finance, content, and contact tools in one place.</p>
                </div>
            </div>
        </section>

        <section class="rounded-lg bg-white p-6 shadow-2xl shadow-primary-900/30 sm:p-8">
            <div class="mb-8">
                <h2 class="text-2xl font-extrabold text-primary-700">Admin Login</h2>
                <p class="mt-2 text-sm text-slate-500">Enter your administrator credentials to continue.</p>
            </div>

            <form action="{{ url('/admin/dashboard') }}" method="GET" class="space-y-5">
                <div>
                    <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Admin Email Address</label>
                    <input id="email" name="email" type="email" placeholder="admin@heritagevalleyfarms.com" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                </div>
                <div class="flex items-center justify-between gap-4 text-sm">
                    <label class="flex items-center gap-2 font-semibold text-slate-600">
                        <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-primary-600 focus:ring-primary-500">
                        Remember Me
                    </label>
                    <a href="#" class="font-bold text-primary-600 hover:text-primary-700">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full rounded-lg bg-primary-600 px-5 py-3.5 text-sm font-extrabold text-white shadow-lg shadow-primary-700/20 transition hover:bg-primary-700">Login</button>
            </form>

            <div class="mt-8 border-t border-slate-100 pt-6">
                <p class="text-center text-xs font-semibold leading-5 text-slate-500">Built on Generations of Farming, Focused on Feeding America.</p>
            </div>
        </section>
    </div>
</main>
@endsection
