@extends('layouts.admin')

@section('title', 'Farm Management Dashboard')

@section('content')
@php
    $sidebar = [
        ['title' => 'Dashboard', 'items' => ['Overview', 'Reports', 'Analytics']],
        ['title' => 'Website Management', 'items' => ['Homepage Content', 'About Us', 'Sustainability & Mission', 'Footer Settings', 'SEO Settings']],
        ['title' => 'Dairy Farming Management', 'items' => ['Dairy Overview', 'Milk Production', 'Dairy Reports', 'Dairy Equipment', 'Dairy Health Records']],
        ['title' => 'Livestock Management', 'items' => ['Dairy Cows', 'Goats', 'Dogs', 'Peacocks', 'Chickens & Sheep', 'Veterinary Records', 'Feeding Schedules']],
        ['title' => 'Crop Production', 'items' => ['Crop Reports', 'Irrigation Systems', 'Harvest Management', 'Crop Rotation', 'Land Management']],
        ['title' => 'Investment Management', 'items' => ['Investment Plans', 'Investor Registrations', 'Retirement Program', 'Investment Transactions', 'Profit Distribution', 'Withdrawal Requests']],
        ['title' => 'Investor Dashboard Management', 'items' => ['Investor Accounts', 'Investor Statistics', 'Passive Income Reports', 'Investment Certificates', 'Portfolio Tracking']],
        ['title' => 'Blog & News Management', 'items' => ['All Posts', 'Create Blog Post', 'Categories', 'Farm Updates', 'Comments Management']],
        ['title' => 'Gallery Management', 'items' => ['Farm Images', 'Livestock Photos', 'Video Uploads', 'Historical Gallery']],
        ['title' => 'Testimonials', 'items' => ['View Testimonials', 'Approve Testimonials', 'Featured Reviews']],
        ['title' => 'Contact Management', 'items' => ['Contact Messages', 'Consultation Requests', 'Investor Inquiries', 'Newsletter Subscribers']],
        ['title' => 'User Management', 'items' => ['Admin Users', 'Staff Accounts', 'Roles & Permissions', 'Login Activity']],
        ['title' => 'Financial Management', 'items' => ['Revenue Reports', 'Expenses', 'Payroll', 'Investment Earnings', 'Financial Statements']],
        ['title' => 'Settings', 'items' => ['General Settings', 'Email Configuration', 'Payment Gateway Settings', 'Notification Settings', 'Security Settings']],
    ];

    $stats = [
        ['label' => 'Total Dairy Cows', 'value' => '2,000+', 'change' => '+4.8%'],
        ['label' => 'Total Livestock', 'value' => '3,840', 'change' => '+6.2%'],
        ['label' => 'Milk Production This Week', 'value' => '42,700 gal', 'change' => '+8.1%'],
        ['label' => 'Active Investors', 'value' => '418', 'change' => '+12'],
        ['label' => 'Monthly Revenue', 'value' => '$284K', 'change' => '+9.5%'],
        ['label' => 'Farm Employees', 'value' => '76', 'change' => 'Stable'],
        ['label' => 'Crop Acres Managed', 'value' => '5,000+', 'change' => '+240'],
        ['label' => 'Pending Investment Requests', 'value' => '23', 'change' => 'Review'],
    ];

    $actions = ['Add New Livestock', 'Update Milk Production', 'Publish Blog Post', 'Add Gallery Images', 'Approve Investor', 'Create Investment Plan', 'Manage Testimonials', 'Send Newsletter'];
    $activities = ['New investor registered', 'Milk production updated', 'Livestock vaccination completed', 'Crop harvest report uploaded', 'New testimonial submitted', 'Blog article published'];
    $investment = ['Total Active Investments' => '$7.8M', 'Total Investor Revenue' => '$612K', 'Monthly Payouts' => '$94K', 'Pending Withdrawals' => '$18K', 'Premium Plan Investors' => '64', 'Retirement Program Members' => '129'];
    $dairy = ['Daily Milk Output' => '6,280 gal', 'Weekly Milk Production' => '42,700 gal', 'Monthly Dairy Revenue' => '$118K', 'Active Dairy Cows' => '2,000+', 'Dairy Health Status' => 'Excellent'];
    $messages = ['Investor Requests' => '8 new', 'Partnership Requests' => '3 new', 'Farm Visit Bookings' => '5 scheduled', 'Consultation Requests' => '7 pending'];
    $analytics = ['Total Website Visitors' => '48,920', 'Newsletter Subscribers' => '6,412', 'Blog Engagement' => '72%', 'Investment Form Submissions' => '136', 'Contact Requests' => '94'];
    $roles = ['Super Admin' => 'Full system access', 'Farm Manager' => 'Livestock and crop management access', 'Investment Manager' => 'Investor and financial access', 'Content Manager' => 'Website and blog management access', 'Staff Member' => 'Limited operational access'];
    $notifications = ['New Investor Registered', 'Milk Production Alert', 'Livestock Health Warning', 'New Contact Message', 'Payment Confirmation', 'Blog Approval Notification'];
@endphp

<div class="min-h-screen bg-slate-100">
    <aside class="fixed inset-y-0 left-0 z-40 hidden w-80 overflow-y-auto border-r border-primary-900/10 bg-primary-900 text-white xl:block">
        <div class="sticky top-0 z-10 border-b border-white/10 bg-primary-900 px-6 py-5">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-gold-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 2 7l10 5 10-5-10-5ZM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </span>
                <span>
                    <span class="block text-sm font-extrabold leading-tight">HERITAGE VALLEY FARMS</span>
                    <span class="text-xs text-primary-200">Admin Portal</span>
                </span>
            </a>
        </div>

        <nav class="space-y-2 px-4 py-5">
            @foreach($sidebar as $group)
                <details class="group rounded-lg border border-white/5 bg-white/5 open:bg-white/10" {{ $loop->first ? 'open' : '' }}>
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-4 py-3 text-sm font-bold">
                        {{ $group['title'] }}
                        <svg class="h-4 w-4 transition group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                    </summary>
                    <div class="pb-3">
                        @foreach($group['items'] as $item)
                            <a href="#" class="block px-6 py-2 text-sm text-primary-100 transition hover:bg-white/10 hover:text-white">{{ $item }}</a>
                        @endforeach
                    </div>
                </details>
            @endforeach
            <a href="{{ url('/admin/login') }}" class="mt-4 flex items-center justify-center rounded-lg bg-gold-400 px-4 py-3 text-sm font-extrabold text-primary-900 transition hover:bg-gold-300">Logout</a>
        </nav>
    </aside>

    <main class="xl:pl-80">
        <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
            <div class="flex flex-col gap-4 px-4 py-4 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-bold uppercase tracking-wide text-primary-600">Farm Management Dashboard</p>
                    <h1 class="text-2xl font-extrabold text-slate-900 md:text-3xl">Administration Center</h1>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ url('/admin/login') }}" class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-bold text-slate-700 transition hover:border-primary-200 hover:text-primary-700">Login Page</a>
                    <button class="rounded-lg bg-primary-600 px-4 py-2 text-sm font-extrabold text-white shadow-lg shadow-primary-700/15 transition hover:bg-primary-700">New Report</button>
                </div>
            </div>
        </header>

        <section class="px-4 py-6 sm:px-6">
            <div class="rounded-lg border border-primary-100 bg-white p-5 shadow-sm">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                    <div class="max-w-3xl">
                        <h2 class="text-xl font-extrabold text-primary-700">Welcome to the Heritage Valley Farms administration center.</h2>
                        <p class="mt-2 leading-7 text-slate-600">Monitor dairy production, livestock management, investments, crop operations, and website activities in real-time.</p>
                    </div>
                    <div class="rounded-lg bg-primary-50 px-4 py-3 text-sm font-bold text-primary-700">Activity Monitoring Enabled</div>
                </div>
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($stats as $stat)
                    <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-slate-500">{{ $stat['label'] }}</p>
                        <div class="mt-3 flex items-end justify-between gap-3">
                            <strong class="text-2xl font-extrabold text-slate-900">{{ $stat['value'] }}</strong>
                            <span class="rounded-full bg-primary-50 px-3 py-1 text-xs font-bold text-primary-700">{{ $stat['change'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 grid gap-6 xl:grid-cols-[1.2fr_.8fr]">
                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-5 flex items-center justify-between">
                        <h2 class="text-lg font-extrabold text-slate-900">Quick Actions</h2>
                        <span class="text-sm font-semibold text-slate-500">Operational shortcuts</span>
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach($actions as $action)
                            <button class="rounded-lg border border-primary-100 bg-primary-50 px-4 py-3 text-left text-sm font-bold text-primary-700 transition hover:border-primary-300 hover:bg-primary-100">{{ $action }}</button>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Recent Activities</h2>
                    <div class="space-y-3">
                        @foreach($activities as $activity)
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 px-3 py-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-gold-400"></span>
                                <span class="text-sm font-semibold text-slate-700">{{ $activity }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-2">
                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Investment Summary</h2>
                    <div class="grid gap-3 sm:grid-cols-2">
                        @foreach($investment as $label => $value)
                            <div class="rounded-lg bg-slate-50 p-4">
                                <p class="text-sm font-semibold text-slate-500">{{ $label }}</p>
                                <p class="mt-2 text-xl font-extrabold text-primary-700">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Dairy Statistics</h2>
                    <div class="space-y-3">
                        @foreach($dairy as $label => $value)
                            <div class="flex items-center justify-between gap-4 rounded-lg bg-slate-50 px-4 py-3">
                                <span class="text-sm font-semibold text-slate-600">{{ $label }}</span>
                                <strong class="text-sm text-primary-700">{{ $value }}</strong>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-3">
                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Customer Inquiries</h2>
                    @foreach($messages as $label => $value)
                        <div class="mb-3 flex items-center justify-between rounded-lg bg-slate-50 px-4 py-3 last:mb-0">
                            <span class="text-sm font-semibold text-slate-600">{{ $label }}</span>
                            <span class="text-sm font-bold text-primary-700">{{ $value }}</span>
                        </div>
                    @endforeach
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Website Analytics</h2>
                    @foreach($analytics as $label => $value)
                        <div class="mb-3 flex items-center justify-between rounded-lg bg-slate-50 px-4 py-3 last:mb-0">
                            <span class="text-sm font-semibold text-slate-600">{{ $label }}</span>
                            <span class="text-sm font-bold text-primary-700">{{ $value }}</span>
                        </div>
                    @endforeach
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Admin Notifications</h2>
                    <div class="space-y-3">
                        @foreach($notifications as $notification)
                            <div class="rounded-lg border border-gold-200 bg-gold-50 px-4 py-3 text-sm font-bold text-primary-800">{{ $notification }}</div>
                        @endforeach
                    </div>
                </section>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-2">
                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">Page Content Management</h2>
                    <div class="grid gap-3 sm:grid-cols-2">
                        @foreach(['Homepage Management Panel', 'About Us Management', 'Dairy Farming Admin Section', 'Livestock Admin Section', 'Crop Production Admin Section', 'Investment Admin Panel', 'Blog Management Panel', 'Gallery Management Panel', 'Contact Management Panel'] as $panel)
                            <button class="rounded-lg border border-slate-200 bg-white px-4 py-3 text-left text-sm font-bold text-slate-700 transition hover:border-primary-300 hover:text-primary-700">{{ $panel }}</button>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                    <h2 class="mb-5 text-lg font-extrabold text-slate-900">User Roles & Permissions</h2>
                    <div class="space-y-3">
                        @foreach($roles as $role => $access)
                            <div class="rounded-lg bg-slate-50 p-4">
                                <div class="flex items-center justify-between gap-4">
                                    <strong class="text-sm text-slate-900">{{ $role }}</strong>
                                    <span class="rounded-full bg-primary-100 px-3 py-1 text-xs font-bold text-primary-700">Active</span>
                                </div>
                                <p class="mt-2 text-sm text-slate-600">{{ $access }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <footer class="mt-8 border-t border-slate-200 py-6 text-center text-sm text-slate-500">
                <p class="font-semibold">&copy; 2026 Heritage Valley Farms Administration System. All Rights Reserved.</p>
                <p class="mt-2">Built on Generations of Farming, Focused on Feeding America, and Creating Sustainable Wealth Through Agriculture.</p>
            </footer>
        </section>
    </main>
</div>
@endsection
