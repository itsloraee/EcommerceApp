<div class="max-w-7xl mx-auto px-6 mt-16">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">
        🌟 Produits Vedettes
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($products as $product)
            <x-card-product :product="$product" />
        @endforeach
    </div>
</div>