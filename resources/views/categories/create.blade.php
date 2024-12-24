<x-master>
    <form action="" method="post">
    @csrf
        <div>
            <label for="">分類標題</label>
            <input type="text" name="title" class="border border-zinc-600 p-2">
        </div>
        <div>
            <label for="">slug</label>
            <input type="text" name="slug" class="border border-zinc-600 p-2">
        </div>
        <input type="submit" value="新增分類" class="bg-blue-400 px-8 py-2">
        <input type="button" value="取消" class="bg-red-400 px-8 py-2" onclick="history.back()">
    </form>
</x-master>
