<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('垃圾桶') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table  class="*:p-2 border border-zinc-300 w-full">
                        <tr class="*:border *:border-zinc-300 *:p-2 *font-bold *:text-xl">
                            <th>標題</th>
                            <th>刪除時間</th>
                            <th>動作</th>
                        </tr>
                        @foreach($trashes as $t)
                        <tr class="*:border *:border-zinc-300 *:p-2">
                            <td>{{$t->title}}</td>
                            <td>{{$t->deleted_at}}</td>
                            <td class="flex gap-3">
                                <a href="{{route('post.restore',$t->id)}}" class="inline-block px-4 py-1 bg-teal-300 rounded text-sm">還原</a>
                                <form action="{{route('post.forceDelete',$t->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="強制刪除" onclick="return confirm('確認刪除?')" class="inline-block px-4 py-1 bg-red-400 rounded text-sm">
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
