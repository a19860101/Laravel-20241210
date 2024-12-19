<x-master>
    <div class="container mx-auto">
        <div class="w-1/2 p-5">
            <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div>
                    <label for="">文章標題</label>
                    <input type="text" name="title" value="{{$post->title}}" class="border border-zinc-500 rounded p-2">
                </div>
                <div>
                    <label for="">文章封面</label>
                    <input type="file" name="cover">
                </div>
                <div>
                    <label for="">內文</label>
                    <textarea name="body" id="" cols="30" rows="10"  class="border border-zinc-500 rounded p-2">{{$post->body}}</textarea>
                </div>
                <input type="submit" value="更新文章" class="inline-block text-sm px-8 py-2 bg-green-800 text-zinc-100 rounded">
                <input type="button" value="取消" onclick="history.back()" class="inline-block text-sm px-8 py-2 bg-red-500 text-zinc-100 rounded">
            </form>
        </div>
    </div>
</x-master>
