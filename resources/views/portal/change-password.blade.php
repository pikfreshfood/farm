@extends('layouts.portal')

@section('title', 'Change Password')
@section('portal_title', 'Change Password')
@section('portal_subtitle', 'Update your password to keep your investor account secure.')

@section('portal_content')
<section class="max-w-3xl rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
    <h2 class="text-xl font-extrabold text-primary-700">Change Password</h2>
    <p class="mt-2 text-sm font-semibold text-slate-500">Use a strong password that you do not use on other websites.</p>

    <form action="#" class="mt-5 space-y-4">
        <div>
            <label for="current_password" class="mb-2 block text-sm font-bold text-slate-700">Current Password</label>
            <input id="current_password" type="password" placeholder="Enter current password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
        </div>
        <div>
            <label for="new_password" class="mb-2 block text-sm font-bold text-slate-700">New Password</label>
            <input id="new_password" type="password" placeholder="Enter new password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
        </div>
        <div>
            <label for="confirm_password" class="mb-2 block text-sm font-bold text-slate-700">Confirm New Password</label>
            <input id="confirm_password" type="password" placeholder="Confirm new password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
        </div>
        <button type="button" class="w-full rounded-lg bg-primary-600 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-primary-700 sm:w-auto">Update Password</button>
    </form>
</section>
@endsection
