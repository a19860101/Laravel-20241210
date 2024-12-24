<x-master>
    <div class="container mx-auto">
        <div class="w-1/2">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="block w-full">文章標題</label>
                    <input type="text" name="title" class="border border-zinc-400 p-2 rounded">
                </div>
                <div class="mb-3">
                    <label for="" class="block w-full">文章分類</label>
                    <select name="category_id" id="" class="border border-zinc-400 p-2 rounded">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="block w-full">文章封面</label>
                    <input type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label for="" class="block w-full">內文</label>
                    <textarea name="body" id="" cols="30" rows="10" class="border border-zinc-400 p-2 rounded"></textarea>
                </div>
                <input type="submit" value="建立文章" class="inline-block px-5 py-1 bg-teal-400">
                <input type="button" value="取消" class="inline-block px-5 py-1 bg-red-400" onclick="history.back()">
            </form>
        </div>
    </div>
</x-master>
