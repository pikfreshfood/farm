@extends('layouts.portal')

@section('title', 'My Plan')
@section('portal_title', 'My Subscribed Plan')
@section('portal_subtitle', 'View the investment plan you selected and your payment review status.')

@section('portal_content')
@if ($subscribedPlan)
    <section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
            <div>
                <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Subscribed Plan</p>
                <h2 class="mt-2 text-3xl font-extrabold text-slate-900">{{ $subscribedPlan['name'] }}</h2>
                <p class="mt-3 max-w-3xl text-sm font-semibold leading-6 text-slate-500">
                    Your selected investment plan is saved here so you can review your subscription details anytime from the portal.
                </p>
            </div>
            <span class="inline-flex rounded-lg bg-amber-50 px-4 py-2 text-sm font-extrabold text-amber-700">
                {{ $subscribedPlan['status'] }}
            </span>
        </div>

        <div class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            @foreach ([
                'Investment Amount' => is_numeric($subscribedPlan['amount']) ? '$' . number_format((float) $subscribedPlan['amount'], 2) : $subscribedPlan['amount'],
                'Payment Method' => $subscribedPlan['payment_method'],
                'Daily Profit' => $subscribedPlan['profit'],
                'Payout Period' => $subscribedPlan['period'],
            ] as $label => $value)
                <div class="rounded-lg bg-slate-50 p-4">
                    <p class="text-xs font-bold uppercase text-slate-500">{{ $label }}</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">{{ $value }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-6 grid gap-4 lg:grid-cols-2">
            <div class="rounded-lg border border-slate-200 p-5">
                <h3 class="text-lg font-extrabold text-primary-700">Plan Range</h3>
                <dl class="mt-4 space-y-3">
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-sm font-bold text-slate-500">Minimum Investment</dt>
                        <dd class="text-sm font-extrabold text-slate-900">{{ $subscribedPlan['minimum'] }}</dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-sm font-bold text-slate-500">Maximum Investment</dt>
                        <dd class="text-sm font-extrabold text-slate-900">{{ $subscribedPlan['maximum'] }}</dd>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <dt class="text-sm font-bold text-slate-500">Submitted On</dt>
                        <dd class="text-sm font-extrabold text-slate-900">{{ $subscribedPlan['submitted_at'] }}</dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-lg border border-slate-200 p-5">
                <h3 class="text-lg font-extrabold text-primary-700">Payment Note</h3>
                <p class="mt-4 min-h-24 rounded-lg bg-slate-50 p-4 text-sm font-semibold leading-6 text-slate-600">
                    {{ $subscribedPlan['note'] ?: 'No payment note was added.' }}
                </p>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ url('/portal/payment-history') }}" class="rounded-lg border border-slate-200 bg-white px-5 py-3 text-sm font-extrabold text-slate-700 transition hover:border-primary-200 hover:text-primary-700">View Payment History</a>
            <a href="{{ url('/portal/investment-plans') }}" class="rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700">Change Plan</a>
        </div>
    </section>
@else
    <section class="rounded-lg border border-slate-200 bg-white p-8 text-center shadow-sm">
        <p class="text-sm font-bold uppercase tracking-wide text-primary-600">No Active Plan</p>
        <h2 class="mt-2 text-3xl font-extrabold text-slate-900">You have not subscribed to any plan yet.</h2>
        <p class="mx-auto mt-3 max-w-2xl text-sm font-semibold leading-6 text-slate-500">
            Select an investment plan first, then submit your payment request. Your subscribed plan will appear here after submission.
        </p>
        <a href="{{ url('/portal/investment-plans') }}" class="mt-6 inline-flex rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700">Choose Investment Plan</a>
    </section>
@endif
@endsection
