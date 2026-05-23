@extends('layouts.admin')

@section('title', 'Continue Payment')

@section('content')
<main class="min-h-screen bg-slate-100">
    <header class="border-b border-primary-100 bg-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-5 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
            <a href="{{ url('/portal') }}" class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-primary-600 text-white">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5ZM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </span>
                <span>
                    <span class="block text-sm font-extrabold leading-tight text-primary-700">CROSBY FARM AND INVESTMENTS</span>
                    <span class="text-xs font-semibold text-slate-500">Payment Step</span>
                </span>
            </a>
            <a href="{{ url('/portal/investment-plans') }}" class="rounded-lg border border-primary-200 bg-white px-4 py-2 text-sm font-bold text-primary-700 transition hover:bg-primary-50">Back to Plans</a>
        </div>
    </header>

    <section class="mx-auto max-w-5xl px-4 py-8 sm:px-6">
        <div class="rounded-lg border border-primary-100 bg-white p-6 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Continue With Payment</p>
            <h1 class="mt-2 text-3xl font-extrabold text-slate-900">{{ $selectedPlan['name'] ?? 'Select an Investment Plan' }}</h1>
            <p class="mt-3 max-w-3xl leading-7 text-slate-600">
                Review your selected plan, enter your investment amount, and continue with your payment request.
            </p>
        </div>

        @if (! $selectedPlan)
                <div class="mt-6 rounded-lg border border-amber-200 bg-amber-50 p-5 text-sm font-bold text-amber-800">
                No plan was selected. Please return to the portal and choose an investment plan.
                <a href="{{ url('/portal/investment-plans') }}" class="ml-2 text-primary-700 underline">Choose a plan</a>
            </div>
        @else
            <div class="mt-6 grid gap-6 lg:grid-cols-[0.8fr_1.2fr]">
                <section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-extrabold text-primary-700">Plan Summary</h2>
                    <div class="mt-5 space-y-3">
                        @foreach ([
                            'Minimum Investment' => $selectedPlan['minimum'],
                            'Maximum Investment' => $selectedPlan['maximum'],
                            'Daily Profit' => $selectedPlan['profit'],
                            'Payout / Rollover Period' => $selectedPlan['period'],
                        ] as $label => $value)
                            <div class="flex items-center justify-between gap-4 rounded-lg bg-slate-50 px-4 py-3">
                                <span class="text-sm font-bold text-slate-500">{{ $label }}</span>
                                <span class="text-sm font-extrabold text-slate-900">{{ $value }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-extrabold text-primary-700">Payment Information</h2>
                    <form action="{{ url('/portal/my-plan') }}" method="GET" class="mt-5 space-y-5">
                        <input type="hidden" name="selected_plan" value="{{ $selectedPlan['name'] }}">
                        <input type="hidden" name="selected_plan_slug" value="{{ $selectedPlan['slug'] }}">

                        <div>
                            <label for="amount" class="mb-2 block text-sm font-bold text-slate-700">Investment Amount</label>
                            <input id="amount" name="amount" type="number" min="1" placeholder="Enter amount in USD" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                        </div>

                        <div>
                            <label for="payment_method" class="mb-2 block text-sm font-bold text-slate-700">Payment Method</label>
                            <select id="payment_method" name="payment_method" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                                <option value="">Select payment method</option>
                                <option>Bank Transfer</option>
                                <option>Card Payment</option>
                                <option>Crypto Payment</option>
                                <option>Contact Support for Payment</option>
                            </select>
                        </div>

                        <div>
                            <label for="note" class="mb-2 block text-sm font-bold text-slate-700">Payment Note</label>
                            <textarea id="note" name="note" rows="4" placeholder="Optional note for the investment team" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100"></textarea>
                        </div>

                        <button type="submit" class="w-full rounded-lg bg-primary-600 px-5 py-3.5 text-sm font-extrabold text-white shadow-lg shadow-primary-700/20 transition hover:bg-primary-700">Submit Payment Request</button>
                    </form>
                </section>
            </div>
        @endif
    </section>
</main>
@endsection
