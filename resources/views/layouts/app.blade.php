<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Heritage Valley Farms') - Family-Owned & Operated for Generations</title>
    <meta name="description" content="@yield('meta_description', 'A family-owned U.S. dairy and livestock farm committed to sustainable agriculture, healthy food production, and profitable agricultural investments.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .font-serif { font-family: 'Playfair Display', Georgia, serif; }
        .font-sans { font-family: 'Inter', system-ui, sans-serif; }
    </style>
    
    @stack('styles')
</head>
<body class="font-sans antialiased text-gray-800 bg-white">
    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-primary-900 via-primary-700 to-primary-600 text-white py-2 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center sm:justify-end items-center">
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:text-gold-300 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                    <a href="#" class="hover:text-gold-300 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                    <a href="#" class="hover:text-gold-300 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 11-2.882 0 1.441 1.441 0 012.882 0z"/></svg></a>
                    <a href="#" class="hover:text-gold-300 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                    <a href="#" class="hover:text-gold-300 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header/Navigation -->
    <header class="bg-white/95 backdrop-blur-xl shadow-[0_10px_30px_rgba(2,43,16,0.08)] sticky top-0 z-50 border-b border-primary-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-800 rounded-full flex items-center justify-center shadow-lg shadow-primary-700/20 ring-2 ring-primary-100">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-primary-700 font-serif leading-none">HERITAGE<br>VALLEY FARMS</h1>
                        <span class="text-xs text-gray-500">EST. 1998</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="{{ url('/') }}" class="text-sm font-semibold {{ request()->is('/') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">Home</a>
                    <a href="{{ url('/about') }}" class="text-sm font-semibold {{ request()->is('about') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">About Us</a>
                    <a href="{{ url('/dairy') }}" class="text-sm font-semibold {{ request()->is('dairy') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">Dairy Farming</a>
                    <a href="{{ url('/livestock') }}" class="text-sm font-semibold {{ request()->is('livestock') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">Livestock & Animal Care</a>
                    <a href="{{ url('/crops') }}" class="text-sm font-semibold {{ request()->is('crops') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">Crop Production</a>
                    <a href="{{ url('/investment') }}" class="text-sm font-semibold {{ request()->is('investment') ? 'text-primary-500 border-b-2 border-primary-500 pb-1' : 'text-gray-700 hover:text-primary-500' }} transition-colors">Investment Plans</a>
                    <div class="relative group">
                        <button class="text-sm font-semibold text-gray-700 hover:text-primary-500 transition-colors flex items-center gap-1">
                            More
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ url('/retirement') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-500">Retirement Program</a>
                            <a href="{{ url('/sustainability') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-500">Sustainability</a>
                            <a href="{{ url('/gallery') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-500">Gallery</a>
                            <a href="{{ url('/testimonials') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-500">Testimonials</a>
                            <a href="{{ url('/blog') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-500">Blog</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="farm-button bg-primary-500 hover:bg-primary-600 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 hover:-translate-y-0.5">Contact Us</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="{{ url('/') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('/') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Home</a>
                <a href="{{ url('/about') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('about') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">About Us</a>
                <a href="{{ url('/dairy') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('dairy') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Dairy Farming</a>
                <a href="{{ url('/livestock') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('livestock') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Livestock & Animal Care</a>
                <a href="{{ url('/crops') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('crops') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Crop Production</a>
                <a href="{{ url('/investment') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('investment') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Investment Plans</a>
                <a href="{{ url('/retirement') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('retirement') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Retirement Program</a>
                <a href="{{ url('/sustainability') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('sustainability') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Sustainability</a>
                <a href="{{ url('/gallery') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('gallery') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Gallery</a>
                <a href="{{ url('/testimonials') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('testimonials') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Testimonials</a>
                <a href="{{ url('/blog') }}" class="block px-4 py-2 text-sm font-semibold {{ request()->is('blog') ? 'text-primary-500 bg-primary-50 rounded-lg' : 'text-gray-700' }}">Blog</a>
                <a href="{{ url('/contact') }}" class="block px-4 py-2 text-sm font-semibold bg-primary-500 text-white rounded-lg text-center mt-4">Contact Us</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-primary-900 via-primary-800 to-primary-700 text-white">
        <!-- Trust Badges -->
        <div class="bg-primary-700 py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span class="text-sm font-medium">Secure Investments</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        <span class="text-sm font-medium">Transparent Operations</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        <span class="text-sm font-medium">Sustainable Future</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span class="text-sm font-medium">Community Focused</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Brand -->
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold font-serif">HERITAGE VALLEY FARMS</h3>
                                <span class="text-xs text-primary-200">EST. 1998</span>
                            </div>
                        </div>
                        <p class="text-primary-200 text-sm leading-relaxed mb-4">Built on Generations of Farming, Focused on Feeding America, and Creating Sustainable Wealth Through Agriculture.</p>
                        <div class="flex gap-3">
                            <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-400 hover:text-primary-600 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-400 hover:text-primary-600 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold-400 hover:text-primary-600 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 11-2.882 0 1.441 1.441 0 012.882 0z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-gold-300">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Home</a></li>
                            <li><a href="{{ url('/about') }}" class="text-primary-200 hover:text-white text-sm transition-colors">About Us</a></li>
                            <li><a href="{{ url('/dairy') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Dairy Farming</a></li>
                            <li><a href="{{ url('/livestock') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Livestock & Animal Care</a></li>
                            <li><a href="{{ url('/crops') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Crop Production</a></li>
                            <li><a href="{{ url('/investment') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Investment Plans</a></li>
                        </ul>
                    </div>

                    <!-- More Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-gold-300">More</h4>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/retirement') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Retirement Program</a></li>
                            <li><a href="{{ url('/sustainability') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Sustainability</a></li>
                            <li><a href="{{ url('/gallery') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Gallery</a></li>
                            <li><a href="{{ url('/testimonials') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Testimonials</a></li>
                            <li><a href="{{ url('/blog') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Blog & Updates</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-primary-200 hover:text-white text-sm transition-colors">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-gold-300">Contact Info</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-gold-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span class="text-primary-200 text-sm">Heritage Valley, Rural Route 123, United States</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <a href="tel:+16075550198" class="text-primary-200 hover:text-white text-sm transition-colors">(607) 555-0198</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:info@heritagevalleyfarms.com" class="text-primary-200 hover:text-white text-sm transition-colors">info@heritagevalleyfarms.com</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gold-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-primary-200 text-sm">Mon - Sat: 8AM - 6PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10 py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-primary-300 text-sm">&copy; {{ date('Y') }} Heritage Valley Farms. All Rights Reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="text-primary-300 hover:text-white text-sm transition-colors">Privacy Policy</a>
                        <a href="#" class="text-primary-300 hover:text-white text-sm transition-colors">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 w-12 h-12 bg-primary-500 hover:bg-primary-600 text-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300 opacity-0 invisible z-50">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

    @stack('scripts')
</body>
</html>
