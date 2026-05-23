@extends('layouts.app')

@section('title', 'Investment Plans')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/farm/john-deere-combine.jpeg') }}" alt="Agricultural investment equipment" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Investment Plans</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Secure, professionally managed agricultural investment opportunities.</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Investment Plans</span>
        </nav>
    </div>
</section>

@php
    $plans = [
        [
            'name' => 'Starter Plan',
            'summary' => 'The Starter Plan is designed for first-time investors who want to begin earning passive income through agriculture with affordable startup capital. This package introduces investors to the agricultural sector through participation in dairy farming, crop cultivation, livestock feeding, and seasonal farm operations.',
            'ideal' => 'This plan is ideal for individuals seeking a low-risk entry into agricultural investments while enjoying professionally managed farming activities without direct involvement in farm labor or management.',
            'minimum' => '$999',
            'maximum' => '$5,000',
            'profit' => '1.7%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $999: $16.98',
                'Estimated 30-Day Return on $999: $509.49',
                'Estimated Daily Return on $5,000: $85',
                'Estimated 30-Day Return on $5,000: $2,550',
            ],
            'features' => ['24/7 Customer Support', 'Fast Withdrawal', 'Secure Investment', 'Suitable for Beginners'],
            'suitable' => ['New investors', 'Young professionals', 'Individuals seeking affordable passive income opportunities'],
        ],
        [
            'name' => 'Flexible Plan',
            'summary' => 'The Flexible Plan allows investors to choose investment amounts and durations that best match their financial goals and schedules. Investments are distributed across multiple farming operations including dairy production, livestock care, crop cultivation, and feed production to ensure balanced agricultural growth.',
            'ideal' => 'This package is ideal for investors who want the freedom to invest at their own pace while earning from professionally managed agricultural projects without needing to participate physically in the farming process.',
            'minimum' => '$5,001',
            'maximum' => '$15,000',
            'profit' => '2.0%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $5,001: $100.02',
                'Estimated 30-Day Return on $5,001: $3,000.60',
                'Estimated Daily Return on $15,000: $300',
                'Estimated 30-Day Return on $15,000: $9,000',
            ],
            'features' => ['Flexible Investment Structure', 'Diversified Agricultural Portfolio', 'Priority Withdrawal Processing', 'Professional Farm Management', 'Secure Investment System'],
            'suitable' => ['Medium-scale investors', 'Busy professionals', 'Investors seeking flexible investment structures'],
        ],
        [
            'name' => 'Premium Plan',
            'summary' => 'The Premium Plan is structured for investors seeking larger agricultural participation and higher return opportunities. This package supports commercial dairy operations, mechanized crop farming, livestock expansion, irrigation systems, feed processing, and modern agricultural technologies.',
            'ideal' => 'Investors under this plan benefit from expanded production activities managed by experienced agricultural professionals, allowing them to earn passive income from large-scale farming operations without handling farm management responsibilities themselves.',
            'minimum' => '$15,001',
            'maximum' => '$50,000',
            'profit' => '2.3%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $15,001: $345.02',
                'Estimated 30-Day Return on $15,001: $10,350.69',
                'Estimated Daily Return on $50,000: $1,150',
                'Estimated 30-Day Return on $50,000: $34,500',
            ],
            'features' => ['Higher Daily Returns', 'Commercial Farming Participation', 'Mechanized Agricultural Operations', 'Dedicated Investment Support', 'Advanced Farm Management Systems'],
            'suitable' => ['Serious agricultural investors', 'Medium to large-scale investors', 'Investors focused on long-term growth and higher returns'],
        ],
        [
            'name' => 'Gold Investment Plan',
            'summary' => 'The Gold Investment Plan provides access to premium agricultural projects involving commercial dairy processing, advanced livestock breeding, large-scale crop production, agricultural storage systems, and food supply chain development.',
            'ideal' => 'This package is designed for investors who desire premium benefits, priority investment opportunities, and stronger long-term earning potential through high-value agricultural operations managed under professional supervision.',
            'minimum' => '$50,001',
            'maximum' => '$100,000',
            'profit' => '2.6%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $50,001: $1,300.03',
                'Estimated 30-Day Return on $50,001: $39,000.78',
                'Estimated Daily Return on $100,000: $2,600',
                'Estimated 30-Day Return on $100,000: $78,000',
            ],
            'features' => ['Premium Agricultural Projects', 'Priority Investment Access', 'Advanced Livestock & Dairy Operations', 'Strategic Agricultural Expansion', 'VIP Investor Support'],
            'suitable' => ['High-net-worth investors', 'Long-term investment partners', 'Investors seeking premium agricultural opportunities'],
        ],
        [
            'name' => 'Executive Plan',
            'summary' => 'The Executive Plan is tailored for corporate organizations, executive investors, institutions, and major stakeholders interested in large-scale agricultural investment partnerships. Investments under this package support export-focused farming, dairy processing facilities, commercial livestock production, mechanized agriculture, and strategic farm expansion projects.',
            'ideal' => 'This plan offers investors the opportunity to participate in large commercial agricultural operations while our experienced management team oversees all operational processes, production systems, staffing, and farm administration.',
            'minimum' => '$100,001',
            'maximum' => '$500,000',
            'profit' => '2.9%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $100,001: $2,900.03',
                'Estimated 30-Day Return on $100,001: $87,000.87',
                'Estimated Daily Return on $500,000: $14,500',
                'Estimated 30-Day Return on $500,000: $435,000',
            ],
            'features' => ['Large-Scale Agricultural Partnerships', 'Export-Focused Production Projects', 'Commercial Dairy & Livestock Operations', 'Executive Investment Management', 'Institutional-Level Investment Support'],
            'suitable' => ['Corporate investors', 'Institutional partners', 'Large-scale commercial stakeholders'],
        ],
        [
            'name' => 'Shareholding Investment Plan',
            'summary' => 'The Shareholding Investment Plan offers investors the opportunity to become long-term equity partners in CROSBY FARM AND INVESTMENTS by owning a percentage stake in the company\'s agricultural and dairy operations.',
            'ideal' => 'Unlike regular investment packages, this plan allows investors to participate in the long-term growth, expansion, and profitability of the company through annual profit sharing, business growth opportunities, and agricultural asset development. This package is ideal for investors who want ownership participation in a sustainable agricultural enterprise without actively managing the farming operations themselves.',
            'minimum' => '$500,001',
            'maximum' => 'Unlimited',
            'profit' => '3.2%',
            'period' => '30 Days',
            'returns' => [
                'Estimated Daily Return on $500,001: $16,000.03',
                'Estimated 30-Day Return on $500,001: $480,000.96',
            ],
            'features' => ['Equity Ownership Opportunities', 'Annual Profit Sharing', 'Agricultural Asset Participation', 'Long-Term Wealth Building', 'Executive Shareholder Benefits'],
            'suitable' => ['Long-term investors', 'Equity partners', 'Investors seeking ownership and profit-sharing opportunities'],
        ],
    ];

    $whyInvest = [
        'Professionally managed dairy and agricultural operations',
        'Passive income opportunities without farm management stress',
        'Diversified investments across livestock and crop production',
        'Sustainable and modern farming practices',
        'Long-term agricultural growth opportunities',
        'Transparent investment structure and operational management',
        'Commitment to food production, agricultural sustainability, and economic growth',
        'Experienced agricultural and investment management team',
        'Reliable investment security and operational transparency',
    ];
@endphp

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Agricultural Investment Opportunities</h2>
            <p class="text-gray-600">At CROSBY FARM AND INVESTMENTS, we provide secure and professionally managed agricultural investment opportunities for individuals, families, and organizations seeking to earn passive income through dairy and agricultural production.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 mb-16">
            <div class="farm-soft-panel rounded-lg p-6 animate-on-scroll">
                <h3 class="font-bold text-primary-700 mb-3">Designed for Passive Agricultural Income</h3>
                <p class="text-gray-600 leading-relaxed">Our investment plans are specially designed for people who want to benefit from the agricultural industry but may not have the time, experience, land, equipment, or ability to actively participate in the farming process.</p>
            </div>
            <div class="farm-soft-panel rounded-lg p-6 animate-on-scroll" style="animation-delay: 0.1s">
                <h3 class="font-bold text-primary-700 mb-3">Managed by Farming Professionals</h3>
                <p class="text-gray-600 leading-relaxed">While our professional team manages the daily farm operations, investors earn returns from real agricultural activities including dairy farming, livestock rearing, crop cultivation, food production, and agricultural expansion projects.</p>
            </div>
        </div>

        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Our Investment Plans</h2>
            <p class="text-gray-600">Whether you are a beginner investor or a large-scale stakeholder, our plans offer flexible opportunities to grow wealth through sustainable agriculture.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @foreach ($plans as $plan)
                <div class="bg-white rounded-xl border-2 border-primary-100 p-6 hover:border-primary-300 transition-all duration-300 hover:shadow-xl animate-on-scroll">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-5">
                        <div>
                            <h3 class="text-2xl font-bold text-primary-700 font-serif mb-2">{{ $loop->iteration }}. {{ $plan['name'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $plan['summary'] }}</p>
                        </div>
                        <div class="bg-primary-50 border border-primary-100 rounded-lg px-4 py-3 text-center flex-shrink-0">
                            <div class="text-3xl font-bold text-primary-500">{{ $plan['profit'] }}</div>
                            <div class="text-xs font-semibold text-gray-500">Daily Profit</div>
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ $plan['ideal'] }}</p>

                    <div class="grid sm:grid-cols-2 gap-3 mb-6">
                        <div class="bg-primary-50 rounded-lg p-4">
                            <div class="text-xs font-semibold text-gray-500 mb-1">Minimum Investment</div>
                            <div class="text-lg font-bold text-primary-700">{{ $plan['minimum'] }}</div>
                        </div>
                        <div class="bg-primary-50 rounded-lg p-4">
                            <div class="text-xs font-semibold text-gray-500 mb-1">Maximum Investment</div>
                            <div class="text-lg font-bold text-primary-700">{{ $plan['maximum'] }}</div>
                        </div>
                        <div class="bg-primary-50 rounded-lg p-4">
                            <div class="text-xs font-semibold text-gray-500 mb-1">Daily Profit</div>
                            <div class="text-lg font-bold text-primary-700">{{ $plan['profit'] }}</div>
                        </div>
                        <div class="bg-primary-50 rounded-lg p-4">
                            <div class="text-xs font-semibold text-gray-500 mb-1">Payout / Rollover Period</div>
                            <div class="text-lg font-bold text-primary-700">{{ $plan['period'] }}</div>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-5">
                        <div>
                            <h4 class="font-bold text-primary-700 mb-3">Estimated Returns</h4>
                            <ul class="space-y-2">
                                @foreach ($plan['returns'] as $item)
                                    <li class="flex gap-2 text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-primary-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-primary-700 mb-3">Features</h4>
                            <ul class="space-y-2">
                                @foreach ($plan['features'] as $item)
                                    <li class="flex gap-2 text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-primary-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-primary-700 mb-3">Suitable For</h4>
                            <ul class="space-y-2">
                                @foreach ($plan['suitable'] as $item)
                                    <li class="flex gap-2 text-sm text-gray-600">
                                        <svg class="w-5 h-5 text-primary-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ url('/contact') }}" class="btn-primary">Get Started</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Why Invest With Us?</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($whyInvest as $reason)
                <div class="bg-white rounded-lg p-5 border border-primary-100 flex gap-3 animate-on-scroll">
                    <svg class="w-5 h-5 text-primary-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <p class="text-sm font-semibold text-gray-700">{{ $reason }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Ready to Start Your Agricultural Investment?</h2>
        <p class="text-gray-600 mb-8">Contact us today to discuss dairy farming, livestock rearing, crop cultivation, food production, and agricultural expansion investment opportunities.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">Contact Us Now</a>
    </div>
</section>
@endsection
