@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Page Header -->
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=1920&q=80" alt="About Us" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">About Us</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Our story of generational farming excellence</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Home</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">About Us</span>
        </nav>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://images.unsplash.com/photo-1592982537447-6f2a6a0c7c18?w=800&q=80" alt="Our Story" class="w-full h-[400px] object-cover">
                </div>
            </div>
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-6">Heritage Valley Farms was founded on generations of agricultural tradition. Farming has been passed down through our family for decades, beginning with our grandparents who believed the land should not only feed families but also create opportunity and security for future generations.</p>
                <p class="text-gray-600 leading-relaxed">Today, we continue that legacy using modern farming technologies while preserving traditional values of hard work, integrity, and sustainability.</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Our Vision & Mission</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-sm text-center animate-on-scroll">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-3">Our Vision</h3>
                <p class="text-gray-600">To become one of America's leading sustainable dairy and agricultural investment farms.</p>
            </div>
            <div class="bg-white rounded-xl p-8 shadow-sm text-center animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-3">Our Mission</h3>
                <p class="text-gray-600">To help feed the United States through quality dairy and livestock farming while empowering individuals to build wealth.</p>
            </div>
            <div class="bg-white rounded-xl p-8 shadow-sm text-center animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-primary-700 mb-3">Our Promise</h3>
                <p class="text-gray-600">We commit to ethical practices, sustainable farming, and delivering consistent returns to our valued investors.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Our Core Values</h2>
            <p class="text-gray-600">The principles that guide everything we do</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Integrity</h4>
                    <p class="text-gray-600 text-sm">We conduct all our business with honesty, transparency, and ethical practices.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll" style="animation-delay: 0.1s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Sustainability</h4>
                    <p class="text-gray-600 text-sm">We farm responsibly to protect the environment for future generations.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll" style="animation-delay: 0.2s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Community</h4>
                    <p class="text-gray-600 text-sm">We support and strengthen the farming communities we serve.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll" style="animation-delay: 0.3s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Innovation</h4>
                    <p class="text-gray-600 text-sm">We embrace modern farming technologies and best practices.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll" style="animation-delay: 0.4s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Animal Welfare</h4>
                    <p class="text-gray-600 text-sm">We prioritize the health and happiness of all our animals.</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl animate-on-scroll" style="animation-delay: 0.5s">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-primary-700 mb-1">Generational Growth</h4>
                    <p class="text-gray-600 text-sm">We build for the future, ensuring lasting prosperity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll">
                <div class="text-4xl font-bold text-gold-300 mb-2" data-counter>5,000+</div>
                <div class="text-primary-200">Acres Managed</div>
            </div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s">
                <div class="text-4xl font-bold text-gold-300 mb-2" data-counter>2,000+</div>
                <div class="text-primary-200">Dairy Cows</div>
            </div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s">
                <div class="text-4xl font-bold text-gold-300 mb-2" data-counter>20+</div>
                <div class="text-primary-200">Years Experience</div>
            </div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s">
                <div class="text-4xl font-bold text-gold-300 mb-2" data-counter>500+</div>
                <div class="text-primary-200">Happy Investors</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Join Our Farming Legacy</h2>
        <p class="text-gray-600 mb-8">Become part of a trusted agricultural enterprise that's feeding America and building wealth for investors.</p>
        <a href="{{ url('/contact') }}" class="btn-primary">Get In Touch</a>
    </div>
</section>
@endsection
