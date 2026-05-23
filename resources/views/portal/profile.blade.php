@extends('layouts.portal')

@section('title', 'Profile')
@section('portal_title', 'Profile')
@section('portal_subtitle', 'View and manage your investor account information.')

@section('portal_content')
@php
    $currentPlan = $subscribedPlan['name'] ?? 'No plan subscribed';
@endphp

<section class="rounded-lg border border-primary-100 bg-white p-6 shadow-sm">
    <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Profile Information</p>
            <h2 class="mt-2 text-2xl font-extrabold text-slate-900">{{ $portalUser['name'] }}</h2>
            <p class="mt-2 max-w-3xl leading-7 text-slate-600">Your main account information is shown below. You can update your name and phone number from this page.</p>
        </div>
        <div class="rounded-lg bg-primary-50 px-5 py-4 text-sm font-bold text-primary-700">Status: {{ $portalUser['status'] }}</div>
    </div>

    <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
            <p class="text-sm font-bold text-slate-500">Full Name</p>
            <p class="mt-2 text-lg font-extrabold text-slate-900">{{ $portalUser['name'] }}</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
            <p class="text-sm font-bold text-slate-500">Email</p>
            <p class="mt-2 break-words text-lg font-extrabold text-slate-900">{{ $portalUser['email'] }}</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
            <p class="text-sm font-bold text-slate-500">Phone Number</p>
            <p class="mt-2 text-lg font-extrabold text-slate-900">{{ $portalUser['phone'] }}</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-slate-50 p-4">
            <p class="text-sm font-bold text-slate-500">Subscribed Plan</p>
            <p class="mt-2 text-lg font-extrabold text-slate-900">{{ $currentPlan }}</p>
        </div>
    </div>

    <div class="mt-4 rounded-lg border border-slate-200 bg-white p-4">
        <p class="text-sm font-bold text-slate-500">Registered On</p>
        <p class="mt-2 text-base font-extrabold text-slate-900">{{ $portalUser['registered_at'] }}</p>
    </div>

    <form action="{{ url('/portal/profile') }}" method="POST" class="mt-6 grid gap-5 md:grid-cols-2">
        @csrf
        <div>
            <label for="profile_name" class="mb-2 block text-sm font-bold text-slate-700">Full Name</label>
            <input id="profile_name" name="name" type="text" value="{{ old('name', $portalUser['name']) }}" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
            @error('name')<p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="profile_email" class="mb-2 block text-sm font-bold text-slate-700">Email Address</label>
            <input id="profile_email" type="email" value="{{ $portalUser['email'] }}" readonly class="w-full rounded-lg border border-slate-200 bg-slate-100 px-4 py-3 text-sm text-slate-500 outline-none">
        </div>
        <div>
            <label for="profile_phone" class="mb-2 block text-sm font-bold text-slate-700">Phone Number</label>
            <input id="profile_phone" name="phone" type="tel" value="{{ old('phone', $portalUser['phone'] === 'Not provided' ? '' : $portalUser['phone']) }}" placeholder="Enter phone number" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
            @error('phone')<p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>@enderror
        </div>
        <div class="flex items-end">
            <button type="submit" class="rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700">Update Profile</button>
        </div>
    </form>
</section>
@endsection
