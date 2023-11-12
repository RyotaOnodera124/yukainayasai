<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愉快な野菜たち</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    {{-- <script src="js/script.js" defer></script> --}}
    <script src="{{ asset('/js/script.js') }}"></script>
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
</head>

<body>

    <!-- ナビゲーションメニュー -->
    <nav>
        <button id="menu-open" class="btn-menu">
            <svg height="24" viewBox="0 0 24 24" width="24">
                <title>メニューを開く</title>
                <path clip-rule="evenodd"
                    d="m4.25 8c0-.41421.33579-.75.75-.75h14c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.33579-.75-.75zm0 4c0-.4142.33579-.75.75-.75h14c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.3358-.75-.75zm.75 3.25c-.41421 0-.75.3358-.75.75s.33579.75.75.75h14c.4142 0 .75-.3358.75-.75s-.3358-.75-.75-.75z"
                    fill-rule="evenodd" />
            </svg>
        </button>
        <div id="menu-panel">
            <button id="menu-close" class="btn-menu">
                <svg height="24" viewBox="0 0 24 24" width="24">
                    <title>メニューを閉じる</title>
                    <path clip-rule="evenodd"
                        d="m7.53033 6.46967c-.29289-.29289-.76777-.29289-1.06066 0s-.29289.76777 0 1.06066l4.46963 4.46967-4.46963 4.4697c-.29289.2929-.29289.7677 0 1.0606s.76777.2929 1.06066 0l4.46967-4.4696 4.4697 4.4696c.2929.2929.7677.2929 1.0606 0s.2929-.7677 0-1.0606l-4.4696-4.4697 4.4696-4.46967c.2929-.29289.2929-.76777 0-1.06066s-.7677-.29289-1.0606 0l-4.4697 4.46963z"
                        fill-rule="evenodd" />
                </svg>
            </button>
            <ul class="menu-list">
                <li><a href="{{ route('vegetables.index') }}">野菜検索</a></li>
                <li><a href="{{ route('articles.index') }}">レシピ投稿</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">オンラインショップ</a></li>
            </ul>
        </div>
    </nav>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- 野菜検索バー -->
                        <form action="{{ route('vegetables.search') }}" method="GET">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">野菜の名前</label>
                                <select name="name" id="name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">全ての野菜</option>
                                    <option value="かぼちゃ">かぼちゃ</option>
                                    <option value="2">小松菜</option>
                                    <option value="3">大根</option>
                                    <option value="4">にんにく</option>
                                    <option value="5">トマト</option>
                                    <option value="6">さつまいも</option>
                                    <option value="7">きのこ</option>
                                    <option value="8">たけのこ</option>
                                    <option value="9">キャベツ</option>
                                    <option value="10">にんじん</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="condition" class="block text-gray-700 text-sm font-bold mb-2">あなたの体調</label>
                                <select name="condition" id="condition"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">すべての体調</option>
                                    <option value="1風邪ひいたぁ">風邪ひいたぁ</option>
                                    <option value="美容に">美容に</option>
                                    <option value="3">最近イライラ</option>
                                    <option value="4">胃腸の調子</option>
                                    <option value="5">むくみが気になる</option>
                                    <option value="6">疲れ気味</option>
                                    <option value="7">辛い肩こり</option>
                                    <option value="8">冷え性</option>
                                    <option value="9">食欲不振</option>
                                    <option value="10">ダイエットに</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                検索
                            </button>
                        </form>
                    </div>
                </div>
                <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

                    <x-flash-message :message="session('notice')" />

                    <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
                        @foreach ($vegetables as $vegetable)
                            @if (
                                (empty(request('name')) || $vegetable->name == request('name')) &&
                                    (empty(request('condition')) || $vegetable->condition == request('condition')))
                                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                                    <h2
                                        class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                                        {{ $vegetable->name }}</h2>
                                    <h3>{{ $vegetable->farmer }}</h3>
                                    <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                                        <span
                                            class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $vegetable->created_at ? 'NEW' : '' }}</span>
                                        {{ $vegetable->created_at }}
                                    </p>
                                    <img class="w-full mb-2" src="{{ $vegetable->image_url }}" alt="">
                                    <p class="text-gray-700 text-base">{{ Str::limit($vegetable->condition, 50) }}</p>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    {{ $vegetables->links() }}
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
