@extends('layouts.app')

@section('title', 'Livestock & Animal Care')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1593179532813-25e9a3cdb361?w=1920&q=80" alt="Livestock" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Livestock & Animal Care</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Responsible livestock management for productivity, animal health, and sustainable growth</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Livestock & Animal Care</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Animals We Rear</h2>
            <p class="text-gray-600">Cattle, goats, sheep, poultry, farm dogs, and other agricultural animals</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll">
                <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?w=600&q=80" alt="Cattle" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"></div>
                <div class="p-6"><h3 class="text-lg font-bold text-primary-700 mb-2">Cattle</h3><p class="text-gray-600 text-sm">Managed for dairy production, breeding, and long-term agricultural productivity.</p></div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.1s">
                <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1524024973431-2ad916746264?w=600&q=80" alt="Goats" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"></div>
                <div class="p-6"><h3 class="text-lg font-bold text-primary-700 mb-2">Goats</h3><p class="text-gray-600 text-sm">Healthy goat farming for milk and agricultural breeding programs.</p></div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.2s">
                <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&q=80" alt="Farm Dogs" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"></div>
                <div class="p-6"><h3 class="text-lg font-bold text-primary-700 mb-2">Farm Dogs</h3><p class="text-gray-600 text-sm">Farm security and responsible care programs with experienced handlers.</p></div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.3s">
                <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?w=600&q=80" alt="Poultry" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"></div>
                <div class="p-6"><h3 class="text-lg font-bold text-primary-700 mb-2">Poultry</h3><p class="text-gray-600 text-sm">Poultry systems that support food production and diversified farm income.</p></div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll" style="animation-delay: 0.4s">
                <div class="h-48 overflow-hidden"><img src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?w=600&q=80" alt="Sheep and Other Agricultural Animals" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"></div>
                <div class="p-6"><h3 class="text-lg font-bold text-primary-700 mb-2">Sheep & Other Agricultural Animals</h3><p class="text-gray-600 text-sm">Sheep and specialty livestock raised through environmentally responsible methods.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Animal Welfare</h2>
                <p class="text-gray-600 leading-relaxed mb-6">Our livestock systems prioritize animal health, productivity, and environmentally responsible farming methods. Every animal receives structured care designed for healthy growth and efficient farm operations.</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Regular veterinary care and health monitoring</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Spacious grazing fields for natural movement</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Nutritious feeding programs tailored to each species</span></li>
                    <li class="flex items-center gap-3"><svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span class="text-gray-600">Clean living environments maintained daily</span></li>
                </ul>
            </div>
            <div class="animate-on-scroll">
                <div class="rounded-2xl overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1593179532813-25e9a3cdb361?w=800&q=80" alt="Animal Care" class="w-full h-[400px] object-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>5,000+</div><div class="text-primary-200">Total Animals</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">6+</div><div class="text-primary-200">Species Raised</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">100%</div><div class="text-primary-200">Vet Coverage</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2">24/7</div><div class="text-primary-200">Monitoring</div></div>
        </div>
    </div>
</section>
@endsection
