@extends('layouts.portal')

@section('title', 'Support')
@section('portal_title', 'Support')
@section('portal_subtitle', 'Get help with your account, plan, payment, or verification.')

@section('portal_content')
<section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
    <h2 class="text-xl font-extrabold text-primary-700">Support</h2>
    <p class="mt-2 max-w-3xl text-sm font-semibold leading-6 text-slate-500">Need help with your profile, investment plan, payment, or OTP verification? Contact the Crosby Farm support team.</p>

    <div class="mt-5 grid gap-4 md:grid-cols-3">
        <div class="rounded-lg bg-primary-50 p-4">
            <p class="text-sm font-extrabold text-primary-700">Email Support</p>
            <p class="mt-2 text-sm font-semibold text-slate-600">info@crosbyfarminvestments.com</p>
        </div>
        <div class="rounded-lg bg-primary-50 p-4">
            <p class="text-sm font-extrabold text-primary-700">Account Help</p>
            <p class="mt-2 text-sm font-semibold text-slate-600">Profile, password, and OTP support.</p>
        </div>
        <div class="rounded-lg bg-primary-50 p-4">
            <p class="text-sm font-extrabold text-primary-700">Investment Help</p>
            <p class="mt-2 text-sm font-semibold text-slate-600">Plan selection and payment guidance.</p>
        </div>
    </div>

    <div class="mt-5 flex flex-wrap gap-3">
        <a href="{{ url('/contact') }}" class="rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700">Contact Support</a>
        <a href="mailto:info@crosbyfarminvestments.com" class="rounded-lg border border-primary-200 bg-white px-5 py-3 text-sm font-extrabold text-primary-700 transition hover:bg-primary-50">Email Support</a>
    </div>
</section>
@endsection
