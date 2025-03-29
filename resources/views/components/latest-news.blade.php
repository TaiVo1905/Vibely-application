<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($latestNews as $news)
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <div class="text-sm text-gray-500 mb-2">{{ $news->created_at->format('d/m/Y') }}</div>
            <h3 class="text-xl font-semibold mb-2">{{ $news->title }}</h3>
            <p class="text-gray-600 mb-4">{{ Str::limit($news->excerpt, 150) }}</p>
            <a href="{{ route('news.show', $news->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                Đọc thêm
            </a>
        </div>
    </article>
    @endforeach
</div> 