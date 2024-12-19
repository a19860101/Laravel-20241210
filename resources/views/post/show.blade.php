<x-master>
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold">{{$post->title}}</h2>
        <div>
            最後更新時間:{{$post->updated_at}}
        </div>
        <div>
            {{$post->body}}
        </div>
        <a href="{{route('post.index')}}" class="inline-block text-sm px-8 py-2 bg-amber-300 rounded">文章列表</a>
        <form action="{{route('post.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除"
            class="inline-block text-sm px-8 py-2 bg-red-500 text-zinc-100 rounded"
            onclick="return confirm('確認刪除文章?')"
            >
        </form>
    </div>
</x-master>
