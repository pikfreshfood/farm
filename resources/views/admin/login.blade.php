@extends('layouts.admin')

@section('title', 'User Login')

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
                    <span class="text-sm text-primary-100">Investor Account Portal</span>
                </span>
            </a>

            <div class="mt-14 max-w-2xl">
                <p class="mb-4 inline-flex rounded-full border border-gold-300/30 bg-gold-300/10 px-4 py-2 text-sm font-semibold text-gold-200">Secure SSL Protected Login</p>
                <h1 class="text-4xl font-extrabold tracking-tight md:text-6xl">Crosby Farm Investor Portal</h1>
                <p class="mt-6 text-lg leading-8 text-primary-100">
                    Welcome back to your Crosby Farm and Investments account. Review investment updates, manage your profile, and stay connected with farm opportunities from one secure portal.
                </p>
            </div>

            <div class="mt-10 grid max-w-2xl gap-4 sm:grid-cols-3">
                <div class="rounded-lg border border-white/10 bg-white/10 p-4">
                    <p class="text-sm font-semibold text-white">Multi-Level Access</p>
                    <p class="mt-2 text-xs leading-5 text-primary-100">Account access for investors, partners, and registered users.</p>
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
                <h2 class="text-2xl font-extrabold text-primary-700">User Login</h2>
                <p class="mt-2 text-sm text-slate-500">Enter your account details to continue.</p>
            </div>

            @if (session('status'))
                <div id="login-status" class="mb-5 rounded-lg border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-semibold text-primary-700">
                    {{ session('status') }}
                </div>
            @else
                <div id="login-status" class="mb-5 hidden rounded-lg border px-4 py-3 text-sm font-semibold"></div>
            @endif

            <form id="login-form" action="{{ url('/login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email Address</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Enter password" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 pr-12 text-sm outline-none transition focus:border-primary-500 focus:bg-white focus:ring-4 focus:ring-primary-100">
                        <button type="button" id="password-toggle" class="absolute inset-y-0 right-0 flex w-12 items-center justify-center text-slate-500 transition hover:text-primary-600" aria-label="Show password">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 text-sm">
                    <label class="flex items-center gap-2 font-semibold text-slate-600">
                        <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-primary-600 focus:ring-primary-500">
                        Remember Me
                    </label>
                    <a href="{{ url('/forgot-password') }}" class="font-bold text-primary-600 hover:text-primary-700">Forgot Password?</a>
                </div>
                <button id="login-submit-button" type="submit" class="w-full rounded-lg bg-primary-600 px-5 py-3.5 text-sm font-extrabold text-white shadow-lg shadow-primary-700/20 transition hover:bg-primary-700">Login</button>
            </form>

            <div class="mt-8 border-t border-slate-100 pt-6">
                <p class="mb-4 text-center text-sm font-semibold text-slate-600">
                    Need an account?
                    <a href="{{ url('/register') }}" class="text-primary-600 hover:text-primary-700">Create one here</a>
                </p>
                <p class="text-center text-xs font-semibold leading-5 text-slate-500">Built on Generations of Farming, Focused on Feeding America.</p>
            </div>
        </section>
    </div>
</main>
@endsection

@push('scripts')
<script>
    const loginForm = document.getElementById('login-form');
    const loginStatus = document.getElementById('login-status');
    const loginSubmitButton = document.getElementById('login-submit-button');
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    function showLoginStatus(message, type = 'success') {
        loginStatus.textContent = message;
        loginStatus.classList.remove('hidden', 'border-primary-200', 'bg-primary-50', 'text-primary-700', 'border-red-200', 'bg-red-50', 'text-red-700');

        if (type === 'error') {
            loginStatus.classList.add('border-red-200', 'bg-red-50', 'text-red-700');
            return;
        }

        loginStatus.classList.add('border-primary-200', 'bg-primary-50', 'text-primary-700');
    }

    passwordToggle?.addEventListener('click', () => {
        const isHidden = passwordInput.type === 'password';
        passwordInput.type = isHidden ? 'text' : 'password';
        passwordToggle.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
    });

    loginForm?.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(loginForm);

        if (!formData.get('email') || !formData.get('password')) {
            showLoginStatus('Please enter your email and password.', 'error');
            return;
        }

        loginSubmitButton.disabled = true;
        loginSubmitButton.textContent = 'Logging in...';

        try {
            const response = await fetch(loginForm.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: formData,
            });

            const data = await response.json();

            if (!response.ok) {
                const message = data?.message || data?.errors?.email?.[0] || 'Unable to login. Please check your details and try again.';
                showLoginStatus(message, 'error');
                return;
            }

            showLoginStatus(data.message || 'Login successful.');
            window.location.href = data.redirect || '{{ url('/portal') }}';
        } catch (error) {
            showLoginStatus('Unable to contact the login service. Please check your connection and try again.', 'error');
        } finally {
            loginSubmitButton.disabled = false;
            loginSubmitButton.textContent = 'Login';
        }
    });
</script>
@endpush
