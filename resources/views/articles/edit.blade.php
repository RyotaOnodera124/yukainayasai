<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">料理投稿編集</h2>

        <x-validation-errors :errors="$errors" />

        <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="name">
                    タイトル
                </label>
                <input type="text" name="name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3" required placeholder="タイトル" value="{{ old('name') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="vegetable">
                    野菜の種類
                </label>
                <input type="text" name="vegetable" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3" required placeholder="野菜の種類" value="{{ old('vegetable') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="color">
                    映え度
                </label>
                <input type="text" name="color" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3" required placeholder="映え度" value="{{ old('color') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="nutrient">
                    栄養素
                </label>
                <input type="text" name="nutrient" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3" required placeholder="栄養素" value="{{ old('nutrient') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="recipe">
                    レシピ記入欄
                </label>
                <textarea name="recipe" rows="10" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3" required>{{ old('recipe') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="comment">
                    コメント欄
                </label>
                <textarea name="comment" rows="5" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3">{{ old('comment') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    ブログ用画像
                </label>
                <img src="{{ $article->image_url }}" alt="" class="mb-4 md:w-2/5 sm:auto">
                <input type="file" name="image" class="border-gray-300">
            </div>
            <input type="submit" value="更新" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
