@extends('layouts.app')

@section('title', 'Crop Production')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=1920&q=80" alt="Crop Production" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Crop Production</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Sustainable cultivation for food and livestock nutrition</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Crop Production</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Sustainable Crop Farming</h2>
                <p class="text-gray-600 leading-relaxed mb-6">We specialize in large-scale crop cultivation using modern agricultural techniques to maximize productivity, quality, and sustainability. Our crop production systems are designed to meet growing food demands while supporting long-term agricultural development.</p>
                <h3 class="text-xl font-bold text-primary-700 mb-4">Crops We Grow</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Hay - Premium quality for livestock feed</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Corn - Versatile crop for food and feed</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Soybeans - Protein-rich crop for multiple uses</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Wheat - Essential grain for food production</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Vegetables - Seasonal produce for commercial supply</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Fruits - Seasonal agricultural produce</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Animal feed crops - Specialized nutrition blends</span></li>
                </ul>
            </div>
            <div class="animate-on-scroll">
                <div class="rounded-2xl overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&q=80" alt="Crop Production" class="w-full h-[400px] object-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Farming Techniques</h2>
            <p class="text-gray-600">Modern methods for sustainable agriculture</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-sm text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Modern Irrigation</h3>
                <p class="text-gray-600 text-sm">Advanced irrigation technology ensures optimal water usage.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm text-center animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Organic Fertilization</h3>
                <p class="text-gray-600 text-sm">Natural fertilizers enrich soil without harmful chemicals.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm text-center animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Land Management</h3>
                <p class="text-gray-600 text-sm">Responsible land use practices protect soil health.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm text-center animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Crop Rotation</h3>
                <p class="text-gray-600 text-sm">Strategic crop rotation maintains soil fertility.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>5,000+</div><div class="text-primary-200">Acres Cultivated</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">5+</div><div class="text-primary-200">Crop Varieties</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">100%</div><div class="text-primary-200">Sustainable</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2">Year-Round</div><div class="text-primary-200">Production</div></div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Invest in Crop Production</h2>
        <p class="text-gray-600 mb-8">Partner with us to support American farming and build wealth through agricultural investments.</p>
        <a href="{{ url('/investment') }}" class="btn-primary">Explore Investment Plans</a>
    </div>
</section>
@endsection
