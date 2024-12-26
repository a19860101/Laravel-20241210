<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('分類管理') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{route('category.create')}}" class="rounded inline-block bg-blue-400 px-8 py-2">新增分類</a>
                    <hr class="my-3">
                    <table class="w-96 border border-zinc-500">
                        @foreach($categories as $category)
                        <tr class=" border border-zinc-500">
                            <td class="p-2">{{$category->title}}</td>
                            <td class="p-2 text-right">
                                <form action="{{route('category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="刪除" class="px-5 py-2 rounded bg-red-400" onclick="return confirm('確認刪除?')">
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
