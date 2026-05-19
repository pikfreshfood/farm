@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="relative py-24 bg-primary-600 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1920&q=80" alt="Gallery" class="w-full h-full object-cover opacity-20">
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
                <img src="https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?w=600&q=80" alt="Dairy Cows" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Dairy Cows at Pasture</h4>
                        <p class="text-primary-200 text-sm">Healthy livestock management and dairy production</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.1s">
                <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=600&q=80" alt="Farm Landscape" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Commercial Farm Landscape</h4>
                        <p class="text-primary-200 text-sm">Large-scale agricultural operations</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.2s">
                <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=600&q=80" alt="Crop Fields" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Golden Crop Fields</h4>
                        <p class="text-primary-200 text-sm">Sustainable crop cultivation</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.3s">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=600&q=80" alt="Milking Operations" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Milking Operations</h4>
                        <p class="text-primary-200 text-sm">Modern dairy facilities</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.4s">
                <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=600&q=80" alt="Farm Machinery" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Modern Farm Machinery</h4>
                        <p class="text-primary-200 text-sm">State-of-the-art equipment</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="investment" style="animation-delay: 0.5s">
                <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?w=600&q=80" alt="Investment Meeting" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Investor Meeting</h4>
                        <p class="text-primary-200 text-sm">Building partnerships</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="livestock" style="animation-delay: 0.6s">
                <img src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?w=600&q=80" alt="Goat Herd" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Goat Herd</h4>
                        <p class="text-primary-200 text-sm">Healthy goat farming</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="livestock" style="animation-delay: 0.7s">
                <img src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?w=600&q=80" alt="Poultry and specialty livestock" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Poultry & Specialty Livestock</h4>
                        <p class="text-primary-200 text-sm">Diversified livestock systems</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 0.8s">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=600&q=80" alt="Sunset Farm" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Sunset Over the Farm</h4>
                        <p class="text-primary-200 text-sm">End of a productive day</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="operations" style="animation-delay: 0.9s">
                <img src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=600&q=80" alt="Family Farming" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Family Farming Heritage</h4>
                        <p class="text-primary-200 text-sm">Generations of dedication</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="crops" style="animation-delay: 1s">
                <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=600&q=80" alt="Harvest Season" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-700/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold">Harvest Season</h4>
                        <p class="text-primary-200 text-sm">Bountiful yields</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item group relative overflow-hidden rounded-xl cursor-pointer animate-on-scroll" data-category="dairy" style="animation-delay: 1.1s">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=600&q=80" alt="Fresh Milk" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
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
