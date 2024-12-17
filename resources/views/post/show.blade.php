<x-master>
    <div class="container">
        <h2>{{$post->title}}</h2>
        <div>
            最後更新時間:{{$post->updated_at}}
        </div>
        <div>
            {{$post->body}}
        </div>
        <a href="{{route('post.index')}}">文章列表</a>
    </div>
</x-master>
