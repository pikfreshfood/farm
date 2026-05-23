@extends('layouts.portal')

@section('title', 'Payment History')
@section('portal_title', 'Payment History')
@section('portal_subtitle', 'Track your submitted investment payment requests.')

@section('portal_content')
<section class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
    <h2 class="text-xl font-extrabold text-primary-700">Payment History</h2>
    <p class="mt-2 text-sm font-semibold text-slate-500">Your payment records will appear here after you select a plan and submit payment.</p>

    <div class="mt-5 overflow-hidden rounded-lg border border-slate-200">
        <div class="grid grid-cols-4 bg-slate-50 px-4 py-3 text-xs font-extrabold uppercase text-slate-500">
            <span>Date</span>
            <span>Plan</span>
            <span>Status</span>
            <span class="text-right">Amount</span>
        </div>
        @if ($subscribedPlan)
            <a href="{{ url('/portal/my-plan') }}" class="grid grid-cols-4 px-4 py-4 text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                <span>{{ $subscribedPlan['submitted_at'] }}</span>
                <span>{{ $subscribedPlan['name'] }}</span>
                <span>{{ $subscribedPlan['status'] }}</span>
                <span class="text-right">{{ is_numeric($subscribedPlan['amount']) ? '$' . number_format((float) $subscribedPlan['amount'], 2) : $subscribedPlan['amount'] }}</span>
            </a>
        @else
            <div class="grid grid-cols-4 px-4 py-4 text-sm font-semibold text-slate-600">
                <span>-</span>
                <span>No payment yet</span>
                <span>Pending</span>
                <span class="text-right">$0.00</span>
            </div>
        @endif
    </div>
</section>
@endsection
