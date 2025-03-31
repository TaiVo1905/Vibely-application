<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach($categories as $category)
    <a href="{{ route('categories.show', $category->id) }}" class="group">
        <div class="relative overflow-hidden rounded-lg aspect-square">
            <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <h3 class="text-white text-xl font-semibold">{{ $category->name }}</h3>
            </div>
        </div>
    </a>
    @endforeach
</div> 