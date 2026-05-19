@extends('layouts.app')

@section('title', 'Sustainability & Mission')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=1920&q=80" alt="Sustainability" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Sustainability & Mission</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Sustainable agricultural development, responsible management, and long-term growth</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Sustainability & Mission</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Our Commitment</h2>
                <p class="text-gray-600 leading-relaxed mb-6">At Crosby Farm and Investments, we are committed to sustainable agricultural development, responsible operational management, transparency, accountability, long-term business growth, investor confidence, and supporting food security.</p>
                <p class="text-gray-600 leading-relaxed">Every decision we make is guided by our responsibility to the land, the animals, our investors, and the communities connected to the food supply chain.</p>
            </div>
            <div class="animate-on-scroll">
                <div class="rounded-2xl overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=800&q=80" alt="Sustainable Farming" class="w-full h-[400px] object-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Sustainability Practices</h2>
            <p class="text-gray-600">How we protect our environment while building resilient agricultural operations</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Eco-Friendly Farming</h3>
                <p class="text-gray-600 text-sm">We use organic methods and natural fertilizers to minimize environmental impact.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Water Conservation</h3>
                <p class="text-gray-600 text-sm">Advanced irrigation systems and water recycling reduce our water footprint.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Responsible Grazing</h3>
                <p class="text-gray-600 text-sm">Rotational grazing preserves pasture health and prevents soil erosion.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Renewable Energy</h3>
                <p class="text-gray-600 text-sm">Solar panels and biogas systems power our farm operations sustainably.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll" style="animation-delay: 0.4s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Organic Support</h3>
                <p class="text-gray-600 text-sm">We promote and practice organic farming methods across all operations.</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm animate-on-scroll" style="animation-delay: 0.5s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <h3 class="font-bold text-primary-700 mb-2">Waste Reduction</h3>
                <p class="text-gray-600 text-sm">Composting and recycling programs minimize waste and enrich our soil.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2">40%</div><div class="text-primary-200">Renewable Energy</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">60%</div><div class="text-primary-200">Water Recycled</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">100%</div><div class="text-primary-200">Organic Practices</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>500+</div><div class="text-primary-200">Acres Preserved</div></div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Partner in Sustainable Agriculture</h2>
        <p class="text-gray-600 mb-8">Join us in our mission to feed America responsibly while protecting the environment.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">Get Involved</a>
    </div>
</section>
@endsection
