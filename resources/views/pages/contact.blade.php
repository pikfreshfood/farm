@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/farm/farm-yard-dog-wide.jpeg') }}" alt="Contact Crosby Farm" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Contact Us</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Interested in partnering or investing with us?</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Contact Us</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12 min-w-0">
            <!-- Contact Info -->
            <div class="lg:col-span-2 min-w-0">
                <div class="bg-primary-600 rounded-2xl p-6 sm:p-8 text-white h-full min-w-0">
                    <h3 class="text-2xl font-bold text-gold-300 mb-4">Get In Touch</h3>
                    <p class="text-primary-200 mb-8">We welcome inquiries from private investors, agricultural partners, retirement investors, food distributors, commercial buyers, and agricultural organizations.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Farm Location</h4>
                                <p class="text-primary-200 text-sm">Crosby Farm and Investments<br>United States</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Phone Number</h4>
                                <p class="text-primary-200 text-sm">(607) 555-0198<br>Mon - Sat: 8AM - 6PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Email Address</h4>
                                <p class="text-primary-200 text-sm">info@crosbyfarminvestments.com<br>invest@crosbyfarminvestments.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Business Hours</h4>
                                <p class="text-primary-200 text-sm">Monday - Saturday: 8:00 AM - 6:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-3 min-w-0">
                <div class="bg-gray-50 rounded-2xl p-6 sm:p-8 min-w-0">
                    <h3 class="text-2xl font-bold text-primary-600 mb-6">Send Us a Message</h3>
                    <form>
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                                <input type="text" placeholder="Enter your full name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                                <input type="email" placeholder="Enter your email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" placeholder="Enter your phone number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Investment Interest</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
                                    <option value="">Select your interest</option>
                                    <option value="regular">Regular Plan ($5,000)</option>
                                    <option value="classic">Classic Plan ($15,000)</option>
                                    <option value="gold">Gold Plan ($50,000)</option>
                                    <option value="premium">Premium Plan ($100,000+)</option>
                                    <option value="retirement">Retirement Investment Program</option>
                                    <option value="crop">Crop Production Expansion</option>
                                    <option value="dairy">Dairy Farm Development</option>
                                    <option value="livestock">Livestock Farming Projects</option>
                                    <option value="equipment">Agricultural Equipment Acquisition</option>
                                    <option value="distribution">Food Processing & Distribution</option>
                                    <option value="other">Other Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea rows="5" placeholder="Tell us how we can help you" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all resize-none"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full justify-center">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Farm Tour CTA -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Visit Our Farm</h2>
            <p class="text-gray-600">Schedule a farm tour and see our operations firsthand</p>
        </div>
        <div class="relative rounded-2xl overflow-hidden shadow-xl" style="height: 400px;">
            <img src="{{ asset('images/farm/cattle-barn-selfie.jpeg') }}" alt="Crosby Farm tour" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-primary-700/80 flex items-center justify-center">
                <div class="text-center text-white">
                    <h3 class="text-3xl font-bold font-serif mb-4">Farm Tours Available</h3>
                    <p class="text-primary-200 text-lg mb-8">Experience Crosby Farm and Investments in person</p>
                    <a href="{{ url('/contact') }}" class="bg-gold-400 hover:bg-gold-500 text-primary-700 px-8 py-4 rounded-lg font-bold transition-colors">Book a Tour</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
