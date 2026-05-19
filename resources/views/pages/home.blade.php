@extends('layouts.app')

@section('title', 'Heritage Valley Farms')
@section('meta_description', 'A family-owned U.S. dairy and livestock farm committed to sustainable agriculture, healthy food production, and profitable agricultural investments.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[620px] flex items-center overflow-hidden bg-cream">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=1920&q=90" alt="Heritage Valley Farms" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/88 to-white/8"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-cream/80 via-transparent to-transparent"></div>
    </div>
    
    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 bg-white/88 backdrop-blur-sm px-4 py-2 rounded-full text-primary-700 border border-primary-200 shadow-sm text-sm font-semibold mb-6 animate-fade-in-down">
                <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Welcome to Heritage Valley Farms
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-950 font-serif leading-tight mb-6 animate-fade-in-up">
                Feeding America Through Generations of <span class="text-primary-600">Farming Excellence</span>
            </h1>
            
            <p class="text-lg text-gray-700 mb-8 leading-relaxed animate-fade-in-up max-w-xl" style="animation-delay: 0.2s">
                A family-owned U.S. dairy and livestock farm committed to sustainable agriculture, healthy food production, and profitable agricultural investments.
            </p>
            
            <div class="flex flex-wrap gap-4 animate-fade-in-up" style="animation-delay: 0.4s">
                <a href="{{ url('/about') }}" class="farm-button inline-flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Explore Our Farm
                </a>
                <a href="{{ url('/investment') }}" class="inline-flex items-center gap-2 bg-white/86 hover:bg-white text-primary-700 px-6 py-3 rounded-lg font-semibold border border-primary-300 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    Invest With Us
                </a>
                <a href="{{ url('/dairy') }}" class="inline-flex items-center gap-2 bg-white/86 hover:bg-white text-primary-700 px-6 py-3 rounded-lg font-semibold border border-primary-300 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Learn About Dairy Farming
                </a>
            </div>
        </div>
    </div>
    
    <!-- Cow Image Overlay -->
    <div class="absolute right-0 bottom-0 hidden lg:block w-[42%] h-full pointer-events-none">
        <img src="https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?w=900&q=90" alt="Dairy Cow" class="w-full h-full object-cover object-center opacity-95 [mask-image:linear-gradient(90deg,transparent,black_22%)]">
    </div>
</section>

<!-- Welcome Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="relative animate-on-scroll">
                <div class="rounded-lg overflow-hidden shadow-xl shadow-primary-900/10 ring-1 ring-primary-100">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&q=80" alt="Heritage Valley Farm" class="w-full h-[400px] object-cover">
                </div>
                <div class="hidden sm:block absolute -bottom-6 -right-6 w-48 h-48 bg-primary-100 rounded-lg -z-10"></div>
            </div>
            
            <!-- Content -->
            <div class="animate-on-scroll">
                <div class="inline-flex items-center gap-2 text-primary-500 font-semibold text-sm mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Our Heritage. Our Future.
                </div>
                
                <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif mb-6">Welcome to Heritage Valley Farms</h2>
                
                <p class="text-gray-600 leading-relaxed mb-8">
                    Where tradition meets innovation. For generations, our family has dedicated its life to dairy farming, livestock rearing, and crop production. What started as a small family farm has grown into a trusted agricultural enterprise helping feed communities across the United States.
                </p>
                
                <!-- Specialties -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-8">
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Dairy Cow Farming</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Goat Rearing</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Dog Breeding & Care</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Peacock Farming</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Crop Production</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-100">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <span class="text-sm font-medium text-primary-700">Agricultural Investments</span>
                    </div>
                </div>
                
                <!-- Mission -->
                <div class="farm-soft-panel rounded-lg p-6 flex items-start gap-4 shadow-sm">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-1">Our Mission is Simple:</h3>
                        <p class="text-gray-600 text-sm">To help feed America while creating sustainable farming opportunities for future generations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <div class="inline-flex items-center gap-2 text-primary-500 font-semibold text-sm mb-4">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                What We Do
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Our Farming & Investment Services</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Dairy Production -->
            <div class="farm-card bg-white rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 animate-on-scroll">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=600&q=80" alt="Dairy Production" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center -mt-12 mb-4 relative z-10 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-700 mb-2">Dairy Production</h3>
                    <p class="text-gray-600 text-sm mb-4">Fresh milk production from healthy, grass-fed dairy cows using modern dairy practices.</p>
                    <a href="{{ url('/dairy') }}" class="inline-flex items-center gap-1 text-primary-500 hover:text-primary-600 font-semibold text-sm transition-colors">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            
            <!-- Livestock Rearing -->
            <div class="farm-card bg-white rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.1s">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1593179532813-25e9a3cdb361?w=600&q=80" alt="Livestock Rearing" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center -mt-12 mb-4 relative z-10 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-700 mb-2">Livestock Rearing</h3>
                    <p class="text-gray-600 text-sm mb-4">Professional care and breeding of cows, goats, dogs, peacocks, and more.</p>
                    <a href="{{ url('/livestock') }}" class="inline-flex items-center gap-1 text-primary-500 hover:text-primary-600 font-semibold text-sm transition-colors">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            
            <!-- Crop Farming -->
            <div class="farm-card bg-white rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.2s">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=600&q=80" alt="Crop Farming" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center -mt-12 mb-4 relative z-10 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-700 mb-2">Crop Farming</h3>
                    <p class="text-gray-600 text-sm mb-4">Sustainable cultivation of hay, corn, grains, and animal feed crops.</p>
                    <a href="{{ url('/crops') }}" class="inline-flex items-center gap-1 text-primary-500 hover:text-primary-600 font-semibold text-sm transition-colors">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            
            <!-- Farm Investments -->
            <div class="farm-card bg-white rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.3s">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=600&q=80" alt="Farm Investments" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center -mt-12 mb-4 relative z-10 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-700 mb-2">Farm Investments</h3>
                    <p class="text-gray-600 text-sm mb-4">Retirement and passive-income farming investment programs with stable returns.</p>
                    <a href="{{ url('/investment') }}" class="inline-flex items-center gap-1 text-primary-500 hover:text-primary-600 font-semibold text-sm transition-colors">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-primary-50 border-y border-primary-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Why Choose Heritage Valley Farms?</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Generational<br>Farming Heritage</h4>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Ethical Animal<br>Treatment</h4>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Sustainable<br>Agricultural Practices</h4>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Passive Income<br>Opportunities</h4>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.4s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Experienced Dairy<br>Management</h4>
            </div>
            <div class="text-center animate-on-scroll" style="animation-delay: 0.5s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h4 class="text-sm font-semibold text-primary-700">Trusted by Farming<br>Communities</h4>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="relative py-20 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1920&q=80" alt="Farm Aerial" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/94 via-primary-700/88 to-primary-600/84"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <div class="text-center text-white animate-on-scroll">
                <div class="flex items-center justify-center gap-3 mb-2">
                    <svg class="w-10 h-10 text-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <div class="text-left">
                        <div class="text-4xl font-bold" data-counter>5,000+</div>
                        <div class="text-primary-200 text-sm">Acres Managed</div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white animate-on-scroll" style="animation-delay: 0.1s">
                <div class="flex items-center justify-center gap-3 mb-2">
                    <svg class="w-10 h-10 text-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <div class="text-left">
                        <div class="text-4xl font-bold" data-counter>2,000+</div>
                        <div class="text-primary-200 text-sm">Dairy Cows</div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white animate-on-scroll" style="animation-delay: 0.2s">
                <div class="flex items-center justify-center gap-3 mb-2">
                    <svg class="w-10 h-10 text-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    <div class="text-left">
                        <div class="text-4xl font-bold" data-counter>20+</div>
                        <div class="text-primary-200 text-sm">Years of Farming Experience</div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white animate-on-scroll" style="animation-delay: 0.3s">
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-2">
                    <svg class="w-10 h-10 text-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    <div class="text-center sm:text-left">
                        <div class="text-3xl sm:text-4xl font-bold">Thousands</div>
                        <div class="text-primary-200 text-sm">of Gallons of Milk Produced Weekly</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials & Newsletter -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Testimonials -->
            <div>
                <div class="inline-flex items-center gap-2 text-primary-500 font-semibold text-sm mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    What Our Partners & Investors Say
                </div>
                
                <div class="farm-card relative bg-white rounded-lg p-8">
                    <div id="testimonial-slider">
                        <div class="testimonial-slide">
                            <svg class="w-10 h-10 text-primary-200 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="text-gray-700 text-lg mb-6 leading-relaxed">"Investing in Heritage Valley Farms gave me steady retirement income while supporting American agriculture."</p>
                            <div class="flex items-center gap-4">
                                <div class="flex gap-1">
                                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <span class="text-sm text-gray-500">— Retired Investor</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slider Controls -->
                    <div class="flex items-center gap-4 mt-6">
                        <button id="prev-testimonial" class="w-10 h-10 bg-primary-500 hover:bg-primary-600 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <div class="flex gap-2">
                            <span class="w-3 h-3 bg-primary-500 rounded-full"></span>
                            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                            <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                        </div>
                        <button id="next-testimonial" class="w-10 h-10 bg-primary-500 hover:bg-primary-600 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Newsletter -->
            <div>
                <h3 class="text-2xl font-bold text-primary-600 font-serif mb-4">Stay Connected with Our Farm</h3>
                <p class="text-gray-600 mb-6">Subscribe to get the latest farm updates, dairy insights, and investment opportunities.</p>
                
                <form class="flex flex-col sm:flex-row gap-3 mb-8">
                    <input type="email" placeholder="Enter your email address" class="flex-1 min-w-0 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
                    <button type="submit" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold flex items-center gap-2 transition-colors">
                        Subscribe
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                </form>
                
                <!-- Brand Badge -->
                <div class="farm-soft-panel rounded-lg p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-4 relative">
                        <div class="absolute inset-0 border-4 border-primary-500 rounded-full"></div>
                        <div class="absolute inset-2 border-2 border-primary-300 rounded-full"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <svg class="w-12 h-12 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                            <span class="text-xs font-bold text-primary-600 mt-1">HERITAGE VALLEY</span>
                        </div>
                    </div>
                    <h4 class="text-lg font-bold text-primary-700 font-serif mb-2">BUILT ON GENERATIONS OF FARMING</h4>
                    <div class="inline-block bg-primary-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-2">FOCUSED ON FEEDING AMERICA</div>
                    <p class="text-gray-600 text-sm">CREATING SUSTAINABLE WEALTH THROUGH AGRICULTURE</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary-900 via-primary-700 to-primary-600 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
            </pattern>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white font-serif mb-6">Ready to Invest in American Agriculture?</h2>
        <p class="text-primary-200 text-lg mb-8 max-w-2xl mx-auto">Join hundreds of investors who trust Heritage Valley Farms for secure, sustainable agricultural investments with proven returns.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ url('/investment') }}" class="bg-gold-400 hover:bg-gold-500 text-primary-700 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                View Investment Plans
            </a>
            <a href="{{ url('/contact') }}" class="bg-white/10 hover:bg-white text-white hover:text-primary-600 px-8 py-4 rounded-lg font-bold text-lg border border-white/30 hover:border-white transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                Contact Us Today
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Testimonial Slider
    const testimonials = [
        {
            text: "Investing in Heritage Valley Farms gave me steady retirement income while supporting American agriculture.",
            author: "Retired Investor"
        },
        {
            text: "The farm investment program has given me peace of mind for retirement. The returns have been consistent.",
            author: "John M., Gold Plan Investor"
        },
        {
            text: "I love how the farm combines family tradition with modern agriculture. Truly inspiring.",
            author: "Sarah T., Community Partner"
        }
    ];
    
    let currentSlide = 0;
    const slider = document.getElementById('testimonial-slider');
    const dots = document.querySelectorAll('.flex.gap-2 span');
    
    function updateSlider() {
        const t = testimonials[currentSlide];
        slider.innerHTML = `
            <div class="testimonial-slide animate-fade-in">
                <svg class="w-10 h-10 text-primary-200 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-gray-700 text-lg mb-6 leading-relaxed">"${t.text}"</p>
                <div class="flex items-center gap-4">
                    <div class="flex gap-1">
                        ${'<svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'.repeat(5)}
                    </div>
                    <span class="text-sm text-gray-500">— ${t.author}</span>
                </div>
            </div>
        `;
        
        dots.forEach((dot, i) => {
            dot.className = i === currentSlide ? 'w-3 h-3 bg-primary-500 rounded-full' : 'w-3 h-3 bg-gray-300 rounded-full';
        });
    }
    
    document.getElementById('prev-testimonial')?.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + testimonials.length) % testimonials.length;
        updateSlider();
    });
    
    document.getElementById('next-testimonial')?.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % testimonials.length;
        updateSlider();
    });
    
    // Auto-rotate testimonials
    setInterval(() => {
        currentSlide = (currentSlide + 1) % testimonials.length;
        updateSlider();
    }, 5000);
</script>
@endpush
