@extends('layouts.app')

@section('title', 'Blog & Farm Updates')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/farm/red-wagon-tractor.jpeg') }}" alt="Farm updates" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Blog & Farm Updates</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Latest news, insights, and stories from the farm</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Blog & Farm Updates</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 font-serif">Suggested Blog Topics</h2>
            <p class="text-gray-600">Practical updates from our farm operations, investment programs, and sustainable agriculture work.</p>
        </div>

        @php
            $topics = [
                ['title' => 'Dairy Farming Insights', 'description' => 'Milk production, dairy cow care, equipment, and farm productivity updates.'],
                ['title' => 'Livestock Care Tips', 'description' => 'Animal health, feeding routines, vaccination planning, and welfare practices.'],
                ['title' => 'Sustainable Agriculture', 'description' => 'Responsible grazing, soil care, water conservation, and eco-friendly farming.'],
                ['title' => 'Farming Technology', 'description' => 'Modern tools, automation, data tracking, and smarter farm management.'],
                ['title' => 'Agricultural Investment Education', 'description' => 'Guides for passive income, farm-backed plans, and long-term wealth building.'],
                ['title' => 'Seasonal Farm Updates', 'description' => 'Planting, harvest, weather notes, crop progress, and farm milestones.'],
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
            @foreach($topics as $topic)
                <div class="rounded-lg border border-primary-100 bg-primary-50/50 p-5 animate-on-scroll">
                    <div class="flex items-start gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-gold-400 shadow-sm flex-shrink-0"></span>
                        <div>
                            <h3 class="font-bold text-primary-700">{{ $topic['title'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">{{ $topic['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $posts = [
                ['title' => 'Summer Milk Production Tips', 'category' => 'Dairy Farming', 'date' => 'May 15, 2026', 'read' => '5 min read', 'excerpt' => 'Learn how we optimize milk production during the hot summer months while keeping our cows comfortable and healthy.', 'image' => asset('images/farm/milking-equipment.jpeg')],
                ['title' => 'Essential Livestock Care for Spring', 'category' => 'Livestock Care', 'date' => 'May 10, 2026', 'read' => '4 min read', 'excerpt' => 'Spring brings new challenges and opportunities for livestock management. Here\'s how we prepare our animals.', 'image' => asset('images/farm/cattle-pasture-lane.jpeg')],
                ['title' => 'Future of Sustainable Agriculture', 'category' => 'Sustainability', 'date' => 'May 5, 2026', 'read' => '6 min read', 'excerpt' => 'Exploring how modern farming techniques are shaping the future of sustainable food production in America.', 'image' => asset('images/farm/crop-field-equipment.jpeg')],
                ['title' => 'Agricultural Investment for Beginners', 'category' => 'Investment', 'date' => 'April 28, 2026', 'read' => '7 min read', 'excerpt' => 'A comprehensive guide to understanding agricultural investments and how to get started with confidence.', 'image' => asset('images/farm/john-deere-combine.jpeg')],
                ['title' => 'Technology Revolutionizing Dairy Farming', 'category' => 'Technology', 'date' => 'April 20, 2026', 'read' => '5 min read', 'excerpt' => 'From automated milking to AI health monitoring, technology is transforming how we farm.', 'image' => asset('images/farm/new-holland-tractor.jpeg')],
                ['title' => 'Spring Planting Season Update', 'category' => 'Seasonal Update', 'date' => 'April 15, 2026', 'read' => '4 min read', 'excerpt' => 'An update on our spring planting schedule and the crops we\'re focusing on this growing season.', 'image' => asset('images/farm/hay-bales-equipment.jpeg')],
            ];
            @endphp
            
            @foreach($posts as $post)
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 animate-on-scroll">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <span class="absolute top-4 left-4 bg-primary-500 text-white px-3 py-1 rounded-full text-xs font-semibold">{{ $post['category'] }}</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>{{ $post['date'] }}</span>
                        <span>{{ $post['read'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-700 mb-3">{{ $post['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $post['excerpt'] }}</p>
                    <a href="#" class="inline-flex items-center gap-1 text-primary-500 hover:text-primary-600 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="btn-green">Load More Articles</a>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-20 bg-primary-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white font-serif mb-4">Subscribe to Our Newsletter</h2>
        <p class="text-primary-200 mb-8">Stay updated with the latest farm news and investment opportunities</p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-lg text-gray-800 focus:ring-2 focus:ring-gold-400 outline-none">
            <button type="submit" class="bg-gold-400 hover:bg-gold-500 text-primary-700 px-8 py-4 rounded-lg font-bold transition-colors">Subscribe</button>
        </form>
    </div>
</section>
@endsection
