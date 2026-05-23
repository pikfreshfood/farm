@extends('layouts.portal')

@section('title', 'Investment Plans')
@section('portal_title', 'Investment Plans')
@section('portal_subtitle', 'Select a plan and continue with payment inside your portal.')

@section('portal_content')
<section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
    <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h2 class="text-xl font-extrabold text-primary-700">Available Investment Plans</h2>
            <p class="mt-2 text-sm font-semibold text-slate-500">Choose the agricultural investment package that fits your goals.</p>
        </div>
        <a href="{{ url('/investment') }}" class="text-sm font-extrabold text-primary-600 hover:text-primary-700">View public plan page</a>
    </div>

    <div class="mt-5 grid gap-5 lg:grid-cols-2">
        @foreach ($plans as $plan)
            @php
                $isCurrentPlan = ($subscribedPlan['slug'] ?? null) === $plan['slug'];
            @endphp
            <article class="rounded-lg border {{ $isCurrentPlan ? 'border-primary-400 bg-primary-50/40' : 'border-slate-200' }} p-5 transition hover:border-primary-300 hover:shadow-lg">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <div class="flex flex-wrap items-center gap-2">
                            <h3 class="text-lg font-extrabold text-slate-900">{{ $plan['name'] }}</h3>
                            @if ($isCurrentPlan)
                                <span class="rounded-full bg-primary-600 px-3 py-1 text-xs font-extrabold text-white">Current Plan</span>
                            @endif
                        </div>
                        <p class="mt-2 text-sm leading-6 text-slate-600">{{ $plan['description'] }}</p>
                    </div>
                    <div class="rounded-lg bg-primary-50 px-4 py-3 text-center">
                        <div class="text-2xl font-extrabold text-primary-600">{{ $plan['profit'] }}</div>
                        <div class="text-xs font-bold text-slate-500">Daily</div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-3 gap-3">
                    <div class="rounded-lg bg-slate-50 p-3">
                        <p class="text-xs font-bold text-slate-500">Minimum</p>
                        <p class="mt-1 font-extrabold text-slate-900">{{ $plan['minimum'] }}</p>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-3">
                        <p class="text-xs font-bold text-slate-500">Maximum</p>
                        <p class="mt-1 font-extrabold text-slate-900">{{ $plan['maximum'] }}</p>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-3">
                        <p class="text-xs font-bold text-slate-500">Period</p>
                        <p class="mt-1 font-extrabold text-slate-900">{{ $plan['period'] }}</p>
                    </div>
                </div>

                <ul class="mt-4 grid gap-2 sm:grid-cols-2">
                    @foreach ($plan['features'] as $feature)
                        <li class="flex gap-2 text-xs font-semibold text-slate-600">
                            <svg class="h-4 w-4 flex-shrink-0 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>

                <a href="{{ url('/portal/payment?plan=' . $plan['slug']) }}" class="mt-5 inline-flex w-full items-center justify-center rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700 sm:w-auto">
                    {{ $isCurrentPlan ? 'Update Payment Request' : 'Select Plan & Continue to Payment' }}
                </a>
            </article>
        @endforeach
    </div>
</section>
@endsection
