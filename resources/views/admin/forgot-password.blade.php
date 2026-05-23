@extends('layouts.admin')

@section('title', 'Forgot Password')

@section('content')
<main class="min-h-screen bg-[radial-gradient(circle_at_top_left,rgba(18,138,46,0.16),transparent_34rem),linear-gradient(135deg,#022b10,#04531a_48%,#08751f)] px-4 py-10">
    <div class="mx-auto grid min-h-[calc(100vh-5rem)] max-w-6xl items-center gap-10 lg:grid-cols-[1fr_460px]">
        <section class="text-white">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
                <span class="flex h-14 w-14 items-center justify-center rounded-full border border-white/20 bg-white/10 shadow-xl">
                    <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5ZM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </span>
                <span>
                    <span class="block text-xl font-extrabold leading-tight">Crosby Farm and Investments</span>
                    <span class="text-sm text-primary-100">Account Recovery</span>
                </span>
            </a>

            <div class="mt-14 max-w-2xl">
                <p class="mb-4 inline-flex rounded-full border border-gold-300/30 bg-gold-300/10 px-4 py-2 text-sm font-semibold text-gold-200">Secure Email Verification</p>
                <h1 class="text-4xl font-extrabold tracking-tight md:text-6xl">Reset Your Portal Password</h1>
                <p class="mt-6 text-lg leading-8 text-primary-100">
                    Enter your account email, receive a one-time password reset code, and create a new password for your investor portal access.
                </p>
            </div>

            <div class="mt-10 grid max-w-2xl gap-4 sm:grid-cols-3">
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Email OTP</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Reset codes are sent from Crosby Farm and Investments.</p>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">10-Minute Code</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Each password reset OTP expires after 10 minutes.</p>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Secure Reset</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Your email and OTP must match before reset completes.</p>
                </div>
            </div>
        </section>

        <section class="rounded-lg bg-white p-6 shadow-2xl shadow-primary-900/30 sm:p-8">
            <div class="mb-8">
                <h2 class="text-2xl font-extrabold text-primary-700">Forgot Password</h2>
                <p class="mt-2 text-sm text-slate-500">Send an OTP to your email, then enter it with your new password.</p>
            </div>

            @if (session('otp_status'))
                <div id="forgot-otp-status" class="mb-5 rounded-lg border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-semibold text-primary-700">
                    {{ session('otp_status') }}
                </div>
            @else
                <div id="forgot-otp-status" class="mb-5 hidden rounded-lg border px-4 py-3 text-sm font-semibold"></div>
            @endif

            @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700">
                    Please correct the highlighted fields and try again.
                </div>
            @endif

            <form id="forgot-password-form" action="{{ url('/forgot-password') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email Address</label>
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <input id="email" name="email" type="email" value="{{ old('email', session('password_reset_otp_email')) }}" placeholder="you@example.com" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                        <button id="send-reset-otp-button" type="button" class="shrink-0 rounded-lg border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-extrabold text-primary-700 transition hover:bg-primary-100">Send OTP</button>
                    </div>
                    @error('email')<p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="otp" class="mb-2 block text-sm font-bold text-slate-700">Password Reset OTP</label>
                    <input id="otp" name="otp" type="text" inputmode="numeric" maxlength="6" placeholder="Enter 6-digit OTP" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm tracking-[0.35em] outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                    @error('otp')<p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-bold text-slate-700">New Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Create new password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 pr-12 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                        <button type="button" class="password-toggle absolute inset-y-0 right-0 flex w-12 items-center justify-center text-slate-500 transition hover:text-primary-600" data-target="password" aria-label="Show password">
                            <svg class="eye-icon h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </button>
                    </div>
                    @error('password')<p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="password_confirmation" class="mb-2 block text-sm font-bold text-slate-700">Confirm New Password</label>
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm new password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 pr-12 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                        <button type="button" class="password-toggle absolute inset-y-0 right-0 flex w-12 items-center justify-center text-slate-500 transition hover:text-primary-600" data-target="password_confirmation" aria-label="Show password confirmation">
                            <svg class="eye-icon h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </button>
                    </div>
                </div>

                <button id="forgot-password-submit-button" type="submit" class="w-full rounded-lg bg-primary-600 px-5 py-3.5 text-sm font-extrabold text-white shadow-lg shadow-primary-700/20 transition hover:bg-primary-700">Reset Password</button>
            </form>

            <div class="mt-8 border-t border-slate-100 pt-6">
                <p class="text-center text-sm font-semibold text-slate-600">
                    Remember your password?
                    <a href="{{ url('/login') }}" class="text-primary-600 hover:text-primary-700">Login here</a>
                </p>
            </div>
        </section>
    </div>
</main>
@endsection

@push('scripts')
<script>
    const resetOtpButton = document.getElementById('send-reset-otp-button');
    const resetOtpStatus = document.getElementById('forgot-otp-status');
    const resetEmailInput = document.getElementById('email');
    const resetOtpInput = document.getElementById('otp');
    const forgotPasswordForm = document.getElementById('forgot-password-form');
    const forgotPasswordSubmitButton = document.getElementById('forgot-password-submit-button');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    function showResetOtpStatus(message, type = 'success') {
        resetOtpStatus.textContent = message;
        resetOtpStatus.classList.remove('hidden', 'border-primary-200', 'bg-primary-50', 'text-primary-700', 'border-red-200', 'bg-red-50', 'text-red-700', 'border-amber-200', 'bg-amber-50', 'text-amber-700');

        if (type === 'error') {
            resetOtpStatus.classList.add('border-red-200', 'bg-red-50', 'text-red-700');
            return;
        }

        if (type === 'warning') {
            resetOtpStatus.classList.add('border-amber-200', 'bg-amber-50', 'text-amber-700');
            return;
        }

        resetOtpStatus.classList.add('border-primary-200', 'bg-primary-50', 'text-primary-700');
    }

    resetOtpButton?.addEventListener('click', async () => {
        const email = resetEmailInput.value.trim();

        if (!email) {
            showResetOtpStatus('Please enter your email address before requesting a reset OTP.', 'error');
            resetEmailInput.focus();
            return;
        }

        resetOtpButton.disabled = true;
        resetOtpButton.textContent = 'Sending...';

        try {
            const response = await fetch('{{ url('/forgot-password/send-otp') }}', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ email }),
            });

            const data = await response.json();

            if (!response.ok) {
                const message = data?.message || data?.errors?.email?.[0] || 'Unable to send password reset OTP. Please try again.';
                showResetOtpStatus(message, 'error');
                return;
            }

            showResetOtpStatus(data.message, data.mail_configured ? 'success' : 'warning');
        } catch (error) {
            showResetOtpStatus('Unable to contact the password reset service. Please check your connection and try again.', 'error');
        } finally {
            resetOtpButton.disabled = false;
            resetOtpButton.textContent = 'Send OTP';
        }
    });

    async function verifyPasswordResetOtp() {
        const email = resetEmailInput.value.trim();
        const otp = resetOtpInput.value.trim();

        if (!email) {
            showResetOtpStatus('Please enter your email address before resetting your password.', 'error');
            resetEmailInput.focus();
            return false;
        }

        if (!/^\d{6}$/.test(otp)) {
            showResetOtpStatus('Please enter the 6-digit password reset OTP before submitting.', 'error');
            resetOtpInput.focus();
            return false;
        }

        const response = await fetch('{{ url('/forgot-password/verify-otp') }}', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ email, otp }),
        });

        const data = await response.json();

        if (!response.ok || !data.verified) {
            showResetOtpStatus(data?.message || 'Password reset OTP verification failed. Please try again.', 'error');
            return false;
        }

        showResetOtpStatus(data.message, 'success');
        return true;
    }

    forgotPasswordForm?.addEventListener('submit', async (event) => {
        event.preventDefault();

        forgotPasswordSubmitButton.disabled = true;
        forgotPasswordSubmitButton.textContent = 'Verifying OTP...';

        try {
            const isOtpVerified = await verifyPasswordResetOtp();

            if (!isOtpVerified) {
                return;
            }

            forgotPasswordSubmitButton.textContent = 'Resetting Password...';

            const response = await fetch(forgotPasswordForm.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: new FormData(forgotPasswordForm),
            });

            const data = await response.json();

            if (!response.ok) {
                const firstError = data?.errors ? Object.values(data.errors)[0]?.[0] : null;
                showResetOtpStatus(firstError || data?.message || 'Password reset could not be completed. Please check the form and try again.', 'error');
                return;
            }

            showResetOtpStatus(data.message || 'Password reset completed successfully.', 'success');

            if (data.redirect) {
                window.location.href = data.redirect;
            }
        } catch (error) {
            showResetOtpStatus('Unable to submit password reset right now. Please check your connection and try again.', 'error');
        } finally {
            forgotPasswordSubmitButton.disabled = false;
            forgotPasswordSubmitButton.textContent = 'Reset Password';
        }
    });

    document.querySelectorAll('.password-toggle').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.getElementById(button.dataset.target);
            const isHidden = input.type === 'password';

            input.type = isHidden ? 'text' : 'password';
            button.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
            button.innerHTML = isHidden
                ? '<svg class="eye-icon h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M10.584 10.587A2 2 0 0012 14a2 2 0 001.414-.586M9.88 4.24A10.76 10.76 0 0112 4c4.478 0 8.268 2.943 9.542 7a10.936 10.936 0 01-3.013 4.568M6.11 6.113A10.936 10.936 0 002.458 12C3.732 16.057 7.523 19 12 19c1.278 0 2.502-.24 3.63-.678"/></svg>'
                : '<svg class="eye-icon h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>';
        });
    });
</script>
@endpush
