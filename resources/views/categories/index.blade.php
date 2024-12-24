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
            </tr>
            @endforeach
        </table>
    </div>
</x-master>
