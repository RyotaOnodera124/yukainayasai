<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    記事の一覧画面です
                </div>
            </div>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($articles as $article)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('articles.show', $article) }}">
                        <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">{{ $article->name }}</h2>
                        <h3>{{ $article->user->name }}</h3>
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $article->created_at ? 'NEW' : '' }}</span>
                            {{ $article->created_at }}
                        </p>
                        <img class="w-full mb-2" src="{{ $article->image_url }}" alt="">
                        <p class="text-gray-700 text-base">{{ Str::limit($article->body, 50) }}</p>
                    </a>
                </article>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</x-app-layout>
