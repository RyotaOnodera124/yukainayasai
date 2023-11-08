<x-app-layout>
    <div class="container lg:w-3/4 md:w-4/5 w-11/12 mx-auto my-8 px-8 py-4 bg-white shadow-md">

        @if (session('notice'))
            <div class="bg-blue-100 border-blue-500 text-blue-700 border-l-4 p-4 my-2">
                {{ session('notice') }}
            </div>
        @endif
        <x-validation-errors :errors="$errors" />

        <article class="mb-2">
            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                {{ $article->name }}</h2>
            <h3>{{ $article->user->name }}</h3>
            <h3>野菜の種類: {{ $article->vegetable }}</h3>
            <h3>映え度: {{ $article->color }}</h3>
            <h3>栄養素: {{ $article->nutrient }}</h3>
            <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                <span
                    class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $article->created_at ? 'NEW' : '' }}</span>
                {{ $article->created_at }}
            </p>
            <img src="{{ $article->image_url }}" alt="" class="mb-4">
            <p class="text-gray-700 text-base">{!! nl2br(e($article->recipe)) !!}</p>
            <p class="text-gray-700 text-base">{!! nl2br(e($article->comment)) !!}</p>
        </article>
        <div class="flex flex-row text-center my-4">
            @can('update', $article)
                <a href="{{ route('articles.edit', $article) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">編集</a>
            @endcan
            @can('delete', $article)
                <form action="{{ route('articles.destroy', $article) }}" method="article">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20">
                </form>
            @endcan
        </div>
    </div>
</x-app-layout>
