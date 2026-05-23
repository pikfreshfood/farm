@extends('layouts.portal')

@section('title', 'Investor Dashboard')
@section('portal_title', 'Dashboard Overview')
@section('portal_subtitle', 'A quick summary of your profile, plan, payments, and support options.')

@section('portal_content')
@php
    $currentPlanName = $subscribedPlan['name'] ?? 'No plan subscribed';
    $paymentStatus = $subscribedPlan['status'] ?? 'No payment yet';
@endphp

<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
    @foreach ([
        ['label' => 'Account Status', 'value' => 'Verified', 'url' => '/portal/profile'],
        ['label' => 'Subscribed Plan', 'value' => $currentPlanName, 'url' => '/portal/my-plan'],
        ['label' => 'Payment Status', 'value' => $paymentStatus, 'url' => '/portal/payment-history'],
        ['label' => 'Support Tickets', 'value' => '0 Open', 'url' => '/portal/support'],
    ] as $stat)
        <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">{{ $stat['label'] }}</p>
            <strong class="mt-3 block text-2xl font-extrabold text-slate-900">{{ $stat['value'] }}</strong>
        </div>
    @endforeach
</div>

<section class="mt-6 rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
    <div>
        <div>
            <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Current Subscription</p>
            <h2 class="mt-2 text-2xl font-extrabold text-slate-900">{{ $currentPlanName }}</h2>
            @if ($subscribedPlan)
                <p class="mt-2 text-sm font-semibold text-slate-500">
                    Amount: {{ is_numeric($subscribedPlan['amount']) ? '$' . number_format((float) $subscribedPlan['amount'], 2) : $subscribedPlan['amount'] }}
                    | Method: {{ $subscribedPlan['payment_method'] }}
                    | Status: {{ $subscribedPlan['status'] }}
                </p>
            @else
                <p class="mt-2 text-sm font-semibold text-slate-500">No investment plan has been subscribed to yet.</p>
            @endif
        </div>
    </div>
</section>
@endsection
