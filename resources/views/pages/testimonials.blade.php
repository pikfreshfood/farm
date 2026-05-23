@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/farm/cattle-barn-selfie.jpeg') }}" alt="Crosby Farm partners and visitors" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Testimonials</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">What our investors and partners say about us</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Testimonials</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name' => 'John M.', 'role' => 'Gold Plan Investor', 'text' => 'The farm investment program has given me peace of mind for retirement.', 'initial' => 'J'],
                ['name' => 'Sarah T.', 'role' => 'Agricultural Partner', 'text' => 'I love how the company combines modern farming technology with sustainable agriculture.', 'initial' => 'S'],
                ['name' => 'Michael R.', 'role' => 'Dairy Investor', 'text' => 'The passive dairy income opportunity has been excellent.', 'initial' => 'M'],
                ['name' => 'Robert K.', 'role' => 'Retirement Investor', 'text' => 'Crosby Farm and Investments gave me a clear way to participate in agriculture while planning for long-term security.', 'initial' => 'R'],
                ['name' => 'Linda P.', 'role' => 'Premium Plan Investor', 'text' => 'The transparency and regular updates from the farm management team give me confidence in my investment decisions.', 'initial' => 'L'],
                ['name' => 'David W.', 'role' => 'Classic Plan Investor', 'text' => 'As a first-time agricultural investor, I was nervous. The team walked me through everything and the returns have been fantastic.', 'initial' => 'D'],
                ['name' => 'Emily S.', 'role' => 'Regular Plan Investor', 'text' => 'The farm tour was incredible. Seeing the operations firsthand made me increase my investment. Highly recommend!', 'initial' => 'E'],
                ['name' => 'Thomas B.', 'role' => 'Dairy Partner', 'text' => 'Crosby Farm and Investments has been a reliable partner for dairy supply and agricultural production.', 'initial' => 'T'],
                ['name' => 'Amanda H.', 'role' => 'Retirement Investor', 'text' => 'My retirement portfolio is now connected to diversified agricultural assets through Crosby Farm and Investments.', 'initial' => 'A'],
            ];
            @endphp
            
            @foreach($testimonials as $t)
            <div class="bg-gray-50 rounded-xl p-8 animate-on-scroll">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">"{{ $t['text'] }}"</p>
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center text-white font-bold text-lg">{{ $t['initial'] }}</div>
                    <div>
                        <h4 class="font-semibold text-primary-700">{{ $t['name'] }}</h4>
                        <span class="text-sm text-gray-500">{{ $t['role'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-primary-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
            <div class="animate-on-scroll"><div class="text-4xl font-bold text-gold-300 mb-2" data-counter>500+</div><div class="text-primary-200">Happy Investors</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.1s"><div class="text-4xl font-bold text-gold-300 mb-2">98%</div><div class="text-primary-200">Satisfaction Rate</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.2s"><div class="text-4xl font-bold text-gold-300 mb-2">20+</div><div class="text-primary-200">Years of Trust</div></div>
            <div class="animate-on-scroll" style="animation-delay: 0.3s"><div class="text-4xl font-bold text-gold-300 mb-2">$25M+</div><div class="text-primary-200">Invested Capital</div></div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-600 font-serif mb-6">Join Our Community of Investors</h2>
        <p class="text-gray-600 mb-8">Start your agricultural investment journey today and become part of our success story.</p>
        <a href="{{ url('/investment') }}" class="btn-primary">View Investment Plans</a>
    </div>
</section>
@endsection
