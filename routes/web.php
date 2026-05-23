<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/dairy', function () {
    return view('pages.dairy');
});

Route::get('/livestock', function () {
    return view('pages.livestock');
});

Route::get('/crops', function () {
    return view('pages.crops');
});

Route::get('/investment', function () {
    return view('pages.investment');
});

Route::get('/retirement', function () {
    return view('pages.retirement');
});

Route::get('/sustainability', function () {
    return view('pages.sustainability');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/testimonials', function () {
    return view('pages.testimonials');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::post('/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    $existingUser = session('portal_user', []);

    session([
        'portal_user' => [
            'name' => $existingUser['name'] ?? 'Not provided',
            'email' => $validated['email'],
            'phone' => $existingUser['phone'] ?? 'Not provided',
            'status' => $existingUser['status'] ?? 'Verified',
            'registered_at' => $existingUser['registered_at'] ?? 'Not available',
        ],
    ]);

    if ($request->expectsJson()) {
        return response()->json([
            'message' => 'Login successful.',
            'redirect' => url('/portal'),
        ]);
    }

    return redirect('/portal');
});

Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});

Route::post('/forgot-password/send-otp', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
    ]);

    $otp = (string) random_int(100000, 999999);

    session([
        'password_reset_otp_email' => $validated['email'],
        'password_reset_otp_hash' => hash('sha256', $otp),
        'password_reset_otp_expires_at' => now()->addMinutes(10)->timestamp,
    ]);

    try {
        Mail::raw(
            "Your Crosby Farm and Investments password reset code is {$otp}. This code expires in 10 minutes.",
            function ($message) use ($validated) {
                $message->from('crosby@double-coins.com', 'Crosby Farm and Investments')
                    ->to($validated['email'])
                    ->subject('Your Crosby Farm Password Reset OTP');
            }
        );
    } catch (\Throwable $exception) {
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Password reset OTP could not be sent. Please check the mail server configuration.',
            ], 500);
        }

        return back()
            ->withInput($request->except(['otp', 'password', 'password_confirmation']))
            ->withErrors(['email' => 'Password reset OTP could not be sent. Please check the mail server configuration.']);
    }

    $message = config('mail.default') === 'log'
        ? 'Password reset OTP generated, but email delivery is currently in log mode. Configure SMTP so users can receive the code by email.'
        : 'Password reset OTP sent to your email. Please enter the code and choose a new password.';

    if ($request->expectsJson()) {
        return response()->json([
            'message' => $message,
            'mail_configured' => config('mail.default') !== 'log',
        ]);
    }

    return back()
        ->withInput($request->except(['otp', 'password', 'password_confirmation']))
        ->with('otp_status', $message);
});

Route::post('/forgot-password/verify-otp', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'otp' => ['required', 'digits:6'],
    ]);

    $otpEmail = session('password_reset_otp_email');
    $otpHash = session('password_reset_otp_hash');
    $otpExpiresAt = session('password_reset_otp_expires_at');

    if (! $otpEmail || ! $otpHash || ! $otpExpiresAt) {
        return response()->json([
            'message' => 'Please request a password reset OTP first.',
        ], 422);
    }

    if ($otpEmail !== $validated['email']) {
        return response()->json([
            'message' => 'This email does not match the email that received the password reset OTP.',
        ], 422);
    }

    if (now()->timestamp > $otpExpiresAt) {
        return response()->json([
            'message' => 'This password reset OTP has expired. Please request a new code.',
        ], 422);
    }

    if (! hash_equals($otpHash, hash('sha256', $validated['otp']))) {
        return response()->json([
            'message' => 'The password reset OTP you entered is incorrect.',
        ], 422);
    }

    return response()->json([
        'message' => 'Password reset OTP verified. Resetting your password now.',
        'verified' => true,
    ]);
});

Route::post('/forgot-password', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'otp' => ['required', 'digits:6'],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    $otpEmail = session('password_reset_otp_email');
    $otpHash = session('password_reset_otp_hash');
    $otpExpiresAt = session('password_reset_otp_expires_at');

    if (! $otpEmail || ! $otpHash || ! $otpExpiresAt) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Please request a password reset OTP first.'], 422);
        }

        return back()
            ->withInput($request->except(['otp', 'password', 'password_confirmation']))
            ->withErrors(['otp' => 'Please request a password reset OTP first.']);
    }

    if ($otpEmail !== $validated['email']) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'This email does not match the email that received the password reset OTP.'], 422);
        }

        return back()
            ->withInput($request->except(['otp', 'password', 'password_confirmation']))
            ->withErrors(['email' => 'This email does not match the email that received the password reset OTP.']);
    }

    if (now()->timestamp > $otpExpiresAt) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'This password reset OTP has expired. Please request a new code.'], 422);
        }

        return back()
            ->withInput($request->except(['otp', 'password', 'password_confirmation']))
            ->withErrors(['otp' => 'This password reset OTP has expired. Please request a new code.']);
    }

    if (! hash_equals($otpHash, hash('sha256', $validated['otp']))) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'The password reset OTP you entered is incorrect.'], 422);
        }

        return back()
            ->withInput($request->except(['otp', 'password', 'password_confirmation']))
            ->withErrors(['otp' => 'The password reset OTP you entered is incorrect.']);
    }

    session()->forget(['password_reset_otp_email', 'password_reset_otp_hash', 'password_reset_otp_expires_at']);

    if ($request->expectsJson()) {
        return response()->json([
            'message' => 'Password reset verified. You can now login with your new password.',
            'redirect' => url('/login'),
        ]);
    }

    return redirect('/login')->with('status', 'Password reset verified. You can now login with your new password.');
});

Route::get('/register', function () {
    return view('admin.register');
});

Route::post('/register/send-otp', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
    ]);

    $otp = (string) random_int(100000, 999999);

    session([
        'registration_otp_email' => $validated['email'],
        'registration_otp_hash' => hash('sha256', $otp),
        'registration_otp_expires_at' => now()->addMinutes(10)->timestamp,
    ]);

    try {
        Mail::raw(
            "Your Crosby Farm and Investments verification code is {$otp}. This code expires in 10 minutes.",
            function ($message) use ($validated) {
                $message->from('crosby@double-coins.com', 'Crosby Farm and Investments')
                    ->to($validated['email'])
                    ->subject('Your Crosby Farm Registration OTP');
            }
        );
    } catch (\Throwable $exception) {
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'OTP could not be sent. Please check the mail server configuration.',
            ], 500);
        }

        return back()
            ->withInput($request->except(['password', 'password_confirmation', 'otp']))
            ->withErrors(['email' => 'OTP could not be sent. Please check the mail server configuration.']);
    }

    $message = config('mail.default') === 'log'
        ? 'OTP generated, but email delivery is currently in log mode. Configure SMTP so users can receive the code by email.'
        : 'Verification code sent to your email. Please enter the OTP to complete registration.';

    if ($request->expectsJson()) {
        return response()->json([
            'message' => $message,
            'mail_configured' => config('mail.default') !== 'log',
        ]);
    }

    return back()
        ->withInput($request->except(['password', 'password_confirmation', 'otp']))
        ->with('otp_status', $message);
});

Route::post('/register/verify-otp', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'otp' => ['required', 'digits:6'],
    ]);

    $otpEmail = session('registration_otp_email');
    $otpHash = session('registration_otp_hash');
    $otpExpiresAt = session('registration_otp_expires_at');

    if (! $otpEmail || ! $otpHash || ! $otpExpiresAt) {
        return response()->json([
            'message' => 'Please request an OTP before completing registration.',
        ], 422);
    }

    if ($otpEmail !== $validated['email']) {
        return response()->json([
            'message' => 'This email does not match the email that received the OTP.',
        ], 422);
    }

    if (now()->timestamp > $otpExpiresAt) {
        return response()->json([
            'message' => 'This OTP has expired. Please request a new code.',
        ], 422);
    }

    if (! hash_equals($otpHash, hash('sha256', $validated['otp']))) {
        return response()->json([
            'message' => 'The OTP you entered is incorrect.',
        ], 422);
    }

    return response()->json([
        'message' => 'OTP verified. Submitting your registration now.',
        'verified' => true,
    ]);
});

Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email'],
        'phone' => ['required', 'string', 'max:40'],
        'otp' => ['required', 'digits:6'],
        'password' => ['required', 'confirmed', 'min:8'],
        'consent' => ['accepted'],
    ]);

    $otpEmail = session('registration_otp_email');
    $otpHash = session('registration_otp_hash');
    $otpExpiresAt = session('registration_otp_expires_at');

    if (! $otpEmail || ! $otpHash || ! $otpExpiresAt) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Please request an OTP before completing registration.'], 422);
        }

        return back()
            ->withInput($request->except(['password', 'password_confirmation', 'otp']))
            ->withErrors(['otp' => 'Please request an OTP before completing registration.']);
    }

    if ($otpEmail !== $validated['email']) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'This email does not match the email that received the OTP.'], 422);
        }

        return back()
            ->withInput($request->except(['password', 'password_confirmation', 'otp']))
            ->withErrors(['email' => 'This email does not match the email that received the OTP.']);
    }

    if (now()->timestamp > $otpExpiresAt) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'This OTP has expired. Please request a new code.'], 422);
        }

        return back()
            ->withInput($request->except(['password', 'password_confirmation', 'otp']))
            ->withErrors(['otp' => 'This OTP has expired. Please request a new code.']);
    }

    if (! hash_equals($otpHash, hash('sha256', $validated['otp']))) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'The OTP you entered is incorrect.'], 422);
        }

        return back()
            ->withInput($request->except(['password', 'password_confirmation', 'otp']))
            ->withErrors(['otp' => 'The OTP you entered is incorrect.']);
    }

    session()->forget(['registration_otp_email', 'registration_otp_hash', 'registration_otp_expires_at']);
    session([
        'portal_user' => [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'status' => 'Verified',
            'registered_at' => now()->format('M d, Y h:i A'),
        ],
    ]);

    if ($request->expectsJson()) {
        return response()->json([
            'message' => 'Registration verified successfully.',
            'redirect' => url('/portal'),
        ]);
    }

    return redirect('/portal')->with('status', 'Registration verified successfully.');
});

if (! function_exists('capturePortalUser')) {
    function capturePortalUser(Request $request): array
    {
        $user = session('portal_user', []);

        if ($request->filled('email') && empty($user['email'])) {
            $user['email'] = $request->query('email');
            $user['name'] = $user['name'] ?? 'Not provided';
            $user['phone'] = $user['phone'] ?? 'Not provided';
            $user['status'] = $user['status'] ?? 'Verified';
            $user['registered_at'] = $user['registered_at'] ?? 'Not available';

            session(['portal_user' => $user]);
        }

        if (($user['name'] ?? null) === 'Investor User') {
            $user['name'] = 'Not provided';
            session(['portal_user' => $user]);
        }

        return [
            'name' => $user['name'] ?? 'Not provided',
            'email' => $user['email'] ?? 'Not provided',
            'phone' => $user['phone'] ?? 'Not provided',
            'status' => $user['status'] ?? 'Verified',
            'registered_at' => $user['registered_at'] ?? 'Not available',
        ];
    }
}

if (! function_exists('portalInvestmentPlans')) {
    function portalInvestmentPlans(): array
    {
        return [
            'starter' => ['slug' => 'starter', 'name' => 'Starter Plan', 'description' => 'Affordable entry into agriculture through dairy farming, crop cultivation, livestock feeding, and seasonal farm operations.', 'minimum' => '$999', 'maximum' => '$5,000', 'profit' => '1.7%', 'period' => '30 Days', 'features' => ['24/7 Customer Support', 'Fast Withdrawal', 'Secure Investment', 'Suitable for Beginners']],
            'flexible' => ['slug' => 'flexible', 'name' => 'Flexible Plan', 'description' => 'Balanced participation across dairy production, livestock care, crop cultivation, and feed production.', 'minimum' => '$5,001', 'maximum' => '$15,000', 'profit' => '2.0%', 'period' => '30 Days', 'features' => ['Flexible Structure', 'Diversified Portfolio', 'Priority Withdrawal Processing', 'Professional Farm Management']],
            'premium' => ['slug' => 'premium', 'name' => 'Premium Plan', 'description' => 'Commercial dairy operations, mechanized crop farming, livestock expansion, irrigation, and modern farming technology.', 'minimum' => '$15,001', 'maximum' => '$50,000', 'profit' => '2.3%', 'period' => '30 Days', 'features' => ['Higher Daily Returns', 'Commercial Farming', 'Mechanized Operations', 'Dedicated Support']],
            'gold' => ['slug' => 'gold', 'name' => 'Gold Investment Plan', 'description' => 'Premium agricultural projects including dairy processing, advanced breeding, storage, and supply chain development.', 'minimum' => '$50,001', 'maximum' => '$100,000', 'profit' => '2.6%', 'period' => '30 Days', 'features' => ['Premium Projects', 'Priority Access', 'Advanced Dairy Operations', 'VIP Support']],
            'executive' => ['slug' => 'executive', 'name' => 'Executive Plan', 'description' => 'Large-scale partnerships for export-focused farming, dairy processing, commercial livestock, and expansion projects.', 'minimum' => '$100,001', 'maximum' => '$500,000', 'profit' => '2.9%', 'period' => '30 Days', 'features' => ['Large-Scale Partnerships', 'Export Production', 'Executive Management', 'Institutional Support']],
            'shareholding' => ['slug' => 'shareholding', 'name' => 'Shareholding Investment Plan', 'description' => 'Long-term equity participation through ownership, annual profit sharing, and agricultural asset development.', 'minimum' => '$500,001', 'maximum' => 'Unlimited', 'profit' => '3.2%', 'period' => '30 Days', 'features' => ['Equity Ownership', 'Annual Profit Sharing', 'Asset Participation', 'Shareholder Benefits']],
        ];
    }
}

if (! function_exists('capturePortalSubscription')) {
    function capturePortalSubscription(Request $request): ?array
    {
        $plans = portalInvestmentPlans();
        $planSlug = $request->query('selected_plan_slug') ?: $request->query('plan');

        if ($planSlug && isset($plans[$planSlug])) {
            $plan = $plans[$planSlug];
            $subscription = [
                'slug' => $plan['slug'],
                'name' => $plan['name'],
                'minimum' => $plan['minimum'],
                'maximum' => $plan['maximum'],
                'profit' => $plan['profit'],
                'period' => $plan['period'],
                'amount' => $request->query('amount') ?: 'Not entered',
                'payment_method' => $request->query('payment_method') ?: 'Not selected',
                'note' => $request->query('note') ?: '',
                'status' => 'Pending Payment Review',
                'submitted_at' => now()->format('M d, Y h:i A'),
            ];

            session(['portal_subscribed_plan' => $subscription]);

            return $subscription;
        }

        return session('portal_subscribed_plan');
    }
}

Route::get('/portal', function (Request $request) {
    capturePortalUser($request);

    if ($request->hasAny(['email', 'password'])) {
        return redirect('/portal');
    }

    return view('portal.dashboard', [
        'subscribedPlan' => capturePortalSubscription($request),
    ]);
});

Route::get('/portal/profile', function (Request $request) {
    return view('portal.profile', [
        'portalUser' => capturePortalUser($request),
        'subscribedPlan' => session('portal_subscribed_plan'),
    ]);
});

Route::post('/portal/profile', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'phone' => ['nullable', 'string', 'max:40'],
    ]);

    $user = session('portal_user', []);
    $user['name'] = $validated['name'];
    $user['phone'] = $validated['phone'] ?: 'Not provided';
    $user['email'] = $user['email'] ?? 'Not provided';
    $user['status'] = $user['status'] ?? 'Verified';
    $user['registered_at'] = $user['registered_at'] ?? 'Not available';

    session(['portal_user' => $user]);

    return redirect('/portal/profile')->with('status', 'Profile information updated.');
});

Route::get('/portal/change-password', function () {
    return view('portal.change-password');
});

Route::get('/portal/investment-plans', function () {
    return view('portal.investment-plans', [
        'plans' => portalInvestmentPlans(),
        'subscribedPlan' => session('portal_subscribed_plan'),
    ]);
});

Route::get('/portal/payment-history', function () {
    return view('portal.payment-history', [
        'subscribedPlan' => session('portal_subscribed_plan'),
    ]);
});

Route::get('/portal/my-plan', function (Request $request) {
    return view('portal.my-plan', [
        'subscribedPlan' => capturePortalSubscription($request),
        'plans' => portalInvestmentPlans(),
    ]);
});

Route::get('/portal/support', function () {
    return view('portal.support');
});

Route::get('/portal/payment', function (Request $request) {
    $plans = portalInvestmentPlans();

    $selectedPlan = $plans[$request->query('plan')] ?? null;

    return view('portal.payment', [
        'selectedPlan' => $selectedPlan,
        'plans' => $plans,
    ]);
});

Route::get('/admin', function () {
    return redirect('/portal');
});

Route::get('/admin/login', function () {
    return redirect('/login');
});

Route::get('/admin/register', function () {
    return redirect('/register');
});

Route::post('/admin/register/send-otp', function () {
    return redirect('/register');
});

Route::post('/admin/register', function () {
    return redirect('/register');
});

Route::get('/admin/dashboard', function () {
    return redirect('/portal');
});
