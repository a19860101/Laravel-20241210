<x-master>
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-5">新增分類</h2>
        <div class="w-1/2">
            <form action="{{route('category.store')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="" class="w-full block">分類標題</label>
                    <input type="text" name="title" class="rounded border border-zinc-600 p-2">
                </div>
                <div class="mb-3">
                    <label for="" class="w-full block">slug</label>
                    <input type="text" name="slug" class="rounded border border-zinc-600 p-2">
                </div>
                <input type="submit" value="新增分類" class="rounded bg-blue-400 px-8 py-2">
                <input type="button" value="取消" class="rounded bg-red-400 px-8 py-2" onclick="history.back()">
            </form>
        </div>
    </div>
</x-master>
