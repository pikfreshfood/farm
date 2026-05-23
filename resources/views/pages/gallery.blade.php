@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/farm/john-deere-combine.jpeg') }}" alt="Crosby Farm gallery" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-serif mb-4">Gallery</h1>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto">Explore crop production, dairy, livestock, machinery, and investment activity at Crosby Farm and Investments</p>
        <nav class="mt-6 flex items-center justify-center gap-2 text-sm">
            <a href="{{ url('/') }}" class="text-primary-200 hover:text-white transition-colors">Homepage</a>
            <span class="text-primary-300">/</span>
            <span class="text-white">Gallery</span>
        </nav>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="gallery-filter active px-6 py-2 rounded-full text-sm font-semibold bg-primary-500 text-white transition-all duration-300" data-filter="all">All</button>
            <button class="gallery-filter px-6 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-600 hover:bg-primary-100 hover:text-primary-600 transition-all duration-300" data-filter="dairy">Dairy Farm</button>
            <button class="gallery-filter px-6 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-600 hover:bg-primary-100 hover:text-primary-600 transition-all duration-300" data-filter="livestock">Livestock</button>
            <button class="gallery-filter px-6 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-600 hover:bg-primary-100 hover:text-primary-600 transition-all duration-300" data-filter="crops">Crop Fields</button>
            <button class="gallery-filter px-6 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-600 hover:bg-primary-100 hover:text-primary-600 transition-all duration-300" data-filter="operations">Operations</button>
            <button class="gallery-filter px-6 py-2 rounded-full text-sm font-semibold bg-gray-100 text-gray-600 hover:bg-primary-100 hover:text-primary-600 transition-all duration-300" data-filter="investment">Investment</button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="dairy">
                <img src="{{ asset('images/farm/cattle-barn-close.jpeg') }}" alt="Dairy Cows" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Dairy Cows at Pasture</h4>
                        <p class="text-primary-200 text-sm">Healthy livestock management and dairy production</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.1s">
                <img src="{{ asset('images/farm/crop-field-equipment.jpeg') }}" alt="Farm Landscape" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Commercial Farm Landscape</h4>
                        <p class="text-primary-200 text-sm">Large-scale agricultural operations</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.2s">
                <img src="{{ asset('images/farm/hay-bales-equipment.jpeg') }}" alt="Crop Fields" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Golden Crop Fields</h4>
                        <p class="text-primary-200 text-sm">Sustainable crop cultivation</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.3s">
                <img src="{{ asset('images/farm/milking-equipment.jpeg') }}" alt="Milking Operations" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Milking Operations</h4>
                        <p class="text-primary-200 text-sm">Modern dairy facilities</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.4s">
                <img src="{{ asset('images/farm/new-holland-tractor.jpeg') }}" alt="Farm Machinery" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Modern Farm Machinery</h4>
                        <p class="text-primary-200 text-sm">State-of-the-art equipment</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="investment" style="animation-delay: 0.5s">
                <img src="{{ asset('images/farm/truck-lineup.jpeg') }}" alt="Investment and logistics equipment" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Farm Logistics</h4>
                        <p class="text-primary-200 text-sm">Equipment and transport capacity</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="livestock" style="animation-delay: 0.6s">
                <img src="{{ asset('images/farm/cattle-pasture-lane.jpeg') }}" alt="Pasture livestock" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Pasture Livestock</h4>
                        <p class="text-primary-200 text-sm">Healthy grazing and livestock care</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="livestock" style="animation-delay: 0.7s">
                <img src="{{ asset('images/farm/peacock-farm.jpeg') }}" alt="Poultry and specialty livestock" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Poultry & Specialty Livestock</h4>
                        <p class="text-primary-200 text-sm">Diversified livestock systems</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.8s">
                <img src="{{ asset('images/farm/feed-bunk-operation.jpeg') }}" alt="Feed operation" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Feed Operations</h4>
                        <p class="text-primary-200 text-sm">Daily feed management</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.9s">
                <img src="{{ asset('images/farm/red-wagon-tractor.jpeg') }}" alt="Farm equipment in transit" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Farm Equipment Transport</h4>
                        <p class="text-primary-200 text-sm">Equipment moving between work areas</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 1s">
                <img src="{{ asset('images/farm/feed-truck-operation.jpeg') }}" alt="Harvest and feed handling" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Feed Handling</h4>
                        <p class="text-primary-200 text-sm">Field output moved into farm use</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="dairy" style="animation-delay: 1.1s">
                <img src="{{ asset('images/farm/cattle-barn-herd.jpeg') }}" alt="Fresh dairy production" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Fresh Milk Production</h4>
                        <p class="text-primary-200 text-sm">Quality dairy products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Gallery filter
    const filterBtns = document.querySelectorAll('.gallery-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('bg-primary-500', 'text-white');
                b.classList.add('bg-gray-100', 'text-gray-600');
            });
            btn.classList.remove('bg-gray-100', 'text-gray-600');
            btn.classList.add('bg-primary-500', 'text-white');
            
            const filter = btn.dataset.filter;
            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
