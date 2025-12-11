<div class="max-w-7xl mx-auto px-6 mt-20 pb-20">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">🪐 Catégories</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($categories as $category)
            <a href="{{ route('products.category', $category->slug) }}"
               class="group p-4 rounded-xl bg-white shadow hover:shadow-lg transition border border-gray-100">
                <div class="aspect-square w-full bg-gray-200 rounded-lg mb-3"></div>

                <p class="font-semibold text-gray-900 group-hover:text-pink-600 transition">
                    {{ $category->name }}
                </p>

                <span class="text-sm text-gray-500">{{ $category->active_products_count }} produits</span>
            </a>
        @endforeach
    </div>
</div>