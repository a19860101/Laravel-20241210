<x-master>
    <div class="container">
        <h1>文章列表</h1>
        @foreach($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <div>最後更新時間:{{$post->updated_at}}</div>
            <div>
                {{$post->body}}
            </div>
            <a href="{{route('post.show',$post->id)}}">繼續閱讀</a>
        </div>
        @endforeach
    </div>
</x-master>

