@extends('layouts.app')

@section('title', 'Retirement Investment Program')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=1920&q=80" alt="Retirement" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Retirement Investment Program</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Secure your future through agriculture and long-term financial planning</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Retirement Investment Program</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Secure Your Future Through Agriculture</h2>
                <p class="text-gray-600 leading-relaxed mb-6">Crosby Farm and Investments provides agricultural investment opportunities designed for individuals planning for retirement and long-term financial security. Our model allows investors to participate in income-generating farming operations while building sustainable wealth over time.</p>
                <h3 class="text-xl font-bold text-primary-700 mb-4">Investment Options:</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Dairy farm development programs</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Crop production investments</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Livestock expansion programs</span></li>
                </ul>
            </div>
            <div class="animate-on-scroll">
                <div class="rounded-2xl overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=800&q=80" alt="Retirement" class="w-full h-[400px] object-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">How It Works</h2>
            <p class="text-gray-600">Simple steps to start your agricultural retirement plan</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold shadow-lg">1</div>
                <h4 class="font-bold text-primary-700 mb-2">Choose a Plan</h4>
                <p class="text-gray-600 text-sm">Select from our investment plans based on your goals.</p>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-20 h-20 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold shadow-lg">2</div>
                <h4 class="font-bold text-primary-700 mb-2">Invest</h4>
                <p class="text-gray-600 text-sm">Invest in dairy or crop production.</p>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-20 h-20 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold shadow-lg">3</div>
                <h4 class="font-bold text-primary-700 mb-2">Earn Profits</h4>
                <p class="text-gray-600 text-sm">Receive your share from farm operations.</p>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-20 h-20 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold shadow-lg">4</div>
                <h4 class="font-bold text-primary-700 mb-2">Get Paid</h4>
                <p class="text-gray-600 text-sm">Receive periodic income distributions.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Retirement Benefits</h2>
            <p class="text-gray-600">Long-term benefits for retirement-focused agricultural investors</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 animate-on-scroll">
                <h3 class="font-bold text-primary-700 mb-2">Long-Term Passive Income Potential</h3>
                <p class="text-gray-600 text-sm">Participate in productive farming operations designed for long-term income opportunities.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 animate-on-scroll" style="animation-delay: 0.1s">
                <h3 class="font-bold text-primary-700 mb-2">Diversified Agricultural Portfolio</h3>
                <p class="text-gray-600 text-sm">Crop, dairy, livestock, and infrastructure projects help diversify agricultural exposure.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 animate-on-scroll" style="animation-delay: 0.2s">
                <h3 class="font-bold text-primary-700 mb-2">Sustainable Wealth Accumulation</h3>
                <p class="text-gray-600 text-sm">Agricultural growth supports long-term wealth-building through essential food production.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 animate-on-scroll" style="animation-delay: 0.3s">
                <h3 class="font-bold text-primary-700 mb-2">Structured Partnerships</h3>
                <p class="text-gray-600 text-sm">Our investment relationships are structured around transparency, accountability, and growth.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>300+</div><div class="text-primary-200">Retirement Investors</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">$15M+</div><div class="text-primary-200">Retirement Assets</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">12%</div><div class="text-primary-200">Avg. Annual Returns</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2">15+</div><div class="text-primary-200">Years of Payouts</div></div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Start Planning Your Retirement Today</h2>
        <p class="text-gray-600 mb-8">Contact our investment team to learn more about our retirement programs.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">Schedule a Consultation</a>
    </div>
</section>
@endsection
