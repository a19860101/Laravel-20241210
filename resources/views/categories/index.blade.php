<x-master>
    <div class="container mx-auto mb-5">
        <h1 class="text-3xl font-bold">分類</h1>
        <a href="{{route('category.create')}}" class="rounded inline-block bg-blue-400 px-8 py-2">新增分類</a>

    </div>
    <div class="container mx-auto">
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
</x-master>
