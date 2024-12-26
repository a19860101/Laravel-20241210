<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('文章管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table class="*:p-2 border border-zinc-300 w-full">
                        <tr class="*:border *:border-zinc-300 *:p-2">
                            <th class="font-bold text-xl">標題</th>
                            <th class="font-bold text-xl">建立日期</th>
                            <th class="font-bold text-xl">更新日期</th>
                            <th class="font-bold text-xl">動作</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr class="*:border *:border-zinc-300 *:p-2">
                            <td>{{Str::limit($post->title,20)}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td class="flex gap-3">
                                <a href="{{route('admin.post.edit',$post->id)}}" class="inline-block px-4 py-1 bg-teal-300 rounded text-sm">詳細資料</a>
                                <form action="{{route('post.destroy',$post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="刪除" class="inline-block px-4 py-1 bg-red-400 rounded text-sm">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
