<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($featuredProducts as $product)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
            <p class="text-gray-600 mb-2">{{ Str::limit($product->description, 100) }}</p>
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-blue-600">{{ number_format($product->price) }}đ</span>
                <a href="{{ route('products.show', $product->id) }}" class="text-blue-600 hover:text-blue-800">
                    Chi tiết
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div> 