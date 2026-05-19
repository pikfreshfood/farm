@extends('layouts.app')

@section('title', 'Investment Plans')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=1920&q=80" alt="Investment" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Investment Plans</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Invest in agriculture. Build long-term wealth.</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Investment Plans</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Invest in Agriculture. Build Long-Term Wealth.</h2>
            <p class="text-gray-600">Crosby Farm and Investments offers strategic agricultural investment opportunities for individuals, private investors, and organizations seeking stable long-term returns through commercial farming and agricultural production.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="text-center p-6 bg-primary-50 rounded-xl animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-bold text-primary-700 mb-2">Retirement Planning</h4>
                <p class="text-gray-600 text-sm">Build retirement-focused investments through productive agricultural operations.</p>
            </div>
            <div class="text-center p-6 bg-primary-50 rounded-xl animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-bold text-primary-700 mb-2">Passive Income</h4>
                <p class="text-gray-600 text-sm">Participate in income-generating farming operations over time.</p>
            </div>
            <div class="text-center p-6 bg-primary-50 rounded-xl animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h4 class="font-bold text-primary-700 mb-2">Agricultural Investors</h4>
                <p class="text-gray-600 text-sm">Participate in crop, dairy, livestock, and infrastructure-backed opportunities.</p>
            </div>
            <div class="text-center p-6 bg-primary-50 rounded-xl animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="font-bold text-primary-700 mb-2">Family Wealth Preservation</h4>
                <p class="text-gray-600 text-sm">Support sustainable wealth-building through agriculture and food production.</p>
            </div>
        </div>

        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Our Investment Plans</h2>
            <p class="text-gray-600">Choose the plan that fits your financial goals</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Regular Plan -->
            <div class="bg-white rounded-xl border-2 border-gray-200 p-8 text-center hover:border-primary-300 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-2">Regular Plan</h3>
                <div class="text-4xl font-bold text-primary-500 mb-6">$5,000<span class="text-lg text-gray-500 font-normal"> min</span></div>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Entry-level agricultural investment</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Quarterly returns</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Access to farm reports</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Participation in crop production</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn-outline w-full justify-center">Get Started</a>
            </div>

            <!-- Classic Plan -->
            <div class="bg-white rounded-xl border-2 border-gray-200 p-8 text-center hover:border-primary-300 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-2">Classic Plan</h3>
                <div class="text-4xl font-bold text-primary-500 mb-6">$15,000<span class="text-lg text-gray-500 font-normal"> min</span></div>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Dairy farming participation</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Semi-annual profit sharing</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Farm tour invitations</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Priority investment updates</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary w-full justify-center">Get Started</a>
            </div>

            <!-- Gold Plan -->
            <div class="bg-white rounded-xl border-2 border-gold-400 p-8 text-center shadow-xl relative animate-on-scroll" style="animation-delay: 0.2s">
                <div class="absolute top-4 right-4 bg-gold-400 text-white text-xs font-bold px-3 py-1 rounded-full">POPULAR</div>
                <div class="w-16 h-16 bg-gold-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-2">Gold Plan</h3>
                <div class="text-4xl font-bold text-gold-500 mb-6">$50,000<span class="text-lg text-gray-500 font-normal"> min</span></div>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-gold-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Cow ownership opportunities</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-gold-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Monthly passive dairy income</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-gold-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Livestock partnership benefits</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-gold-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Personalized investor dashboard</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary w-full justify-center bg-gold-400 hover:bg-gold-500 text-primary-700">Get Started</a>
            </div>

            <!-- Premium Plan -->
            <div class="bg-white rounded-xl border-2 border-gray-200 p-8 text-center hover:border-primary-300 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-2">Premium Plan</h3>
                <div class="text-4xl font-bold text-primary-500 mb-6">$100K+<span class="text-lg text-gray-500 font-normal"></span></div>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Full agricultural portfolio access</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Premium dairy revenue sharing</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Priority retirement income program</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Direct consultation with management</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Long-term wealth generation strategy</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn-outline w-full justify-center">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Areas of Investment</h2>
                <div class="grid sm:grid-cols-2 gap-3">
                    @php
                        $areas = [
                            'Crop Production Expansion',
                            'Dairy Farm Development',
                            'Livestock Farming Projects',
                            'Agricultural Equipment Acquisition',
                            'Greenhouse Farming',
                            'Irrigation Systems',
                            'Farm Infrastructure Development',
                            'Food Processing & Distribution',
                            'Retirement Agricultural Investment Programs',
                        ];
                    @endphp

                    @foreach ($areas as $area)
                        <div class="flex items-center gap-3 bg-white rounded-lg p-4 border border-primary-100">
                            <svg class="w-5 h-5 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm font-semibold text-gray-700">{{ $area }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Why Invest With Us</h2>
                <div class="space-y-4">
                    @php
                        $reasons = [
                            ['title' => 'Strong Agricultural Market Demand', 'text' => 'Food and dairy products remain essential commodities with increasing demand locally and internationally.'],
                            ['title' => 'Diversified Operations', 'text' => 'Crop farming, dairy production, and livestock management create multiple revenue streams and operational stability.'],
                            ['title' => 'Sustainable Growth Strategy', 'text' => 'We focus on long-term expansion through responsible farming methods, innovation, and strategic planning.'],
                            ['title' => 'Professional Management', 'text' => 'Structured agricultural management systems support productivity, accountability, and growth.'],
                            ['title' => 'Investor-Focused Partnerships', 'text' => 'We are committed to transparency, responsible management, and mutually beneficial investment relationships.'],
                        ];
                    @endphp

                    @foreach ($reasons as $reason)
                        <div class="bg-white rounded-lg p-5 border border-primary-100">
                            <h3 class="font-bold text-primary-700 mb-1">{{ $reason['title'] }}</h3>
                            <p class="text-gray-600 text-sm">{{ $reason['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>500+</div><div class="text-primary-200">Active Investors</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">$25M+</div><div class="text-primary-200">Assets Managed</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">98%</div><div class="text-primary-200">Satisfaction</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2">20+</div><div class="text-primary-200">Years Returns</div></div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Ready to Start Your Agricultural Investment?</h2>
        <p class="text-gray-600 mb-8">Contact us today to discuss crop production, dairy, livestock, infrastructure, or retirement-focused agricultural investment opportunities.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">Contact Us Now</a>
    </div>
</section>
@endsection
