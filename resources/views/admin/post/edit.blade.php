<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-3">詳細資料</h2>
                    <div><small>文章建立時間:{{$post->created_at}}</small></div>
                    <div class="w-1/2">
                        <form action="" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="block w-full">標題</label>
                                <input type="text" class="p-2 border border-zinc-300 rounded-lg w-full" value="{{$post->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="block w-full">分類</label>
                                <select type="text" class="p-2 border border-zinc-300 rounded-lg w-full">
                                    @foreach($categories as $cate)
                                    <option value="{{$cate->id}}" @if($cate->id == $post->category_id) selected @endif>{{$cate->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="block w-full">內文</label>
                                <textarea class="p-2 border border-zinc-300 rounded-lg w-full">{{$post->body}}</textarea>
                            </div>
                            <input type="submit" value="修改資料" class="inline-block px-3 py-2 text-sm bg-green-300 rounded-lg">
                            <input type="button" value="取消" class="inline-block px-3 py-2 text-sm bg-red-400 rounded-lg" onclick="history.back()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
