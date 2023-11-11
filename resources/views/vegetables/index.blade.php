<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    野菜の一覧画面です
                </div>
            </div>
            <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

                <x-flash-message :message="session('notice')" />

                <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
                    @foreach ($vegetables as $vegetable)
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
                            <img class="w-full mb-2" src="{{ $vegetable->image }}" alt="">
                            <p class="text-gray-700 text-base">{{ Str::limit($vegetable->condition, 50) }}</p>
                        </article>
                    @endforeach
                </div>
                {{ $vegetables->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
