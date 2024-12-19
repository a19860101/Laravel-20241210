<x-master>
    <div class="container flex mx-auto flex-wrap">
        @foreach($posts as $post)
        <div class="w-1/4 p-3">
            <div class="border border-zinc-600">

                <div class="aspect-square">
                    {{-- <img src="/storage/{{$post->cover}}" alt=""> --}}
                    @if($post->cover == null)
                    <img src="https://placehold.co/600x400?text=No+Cover" alt="" class="w-full h-full object-cover">
                    @else
                    <img src="{{asset('storage/'.$post->cover)}}" alt="" class="w-full h-full object-cover">
                    @endif
                </div>
                <div class="p-3">
                    <h2>{{$post->title}}</h2>
                    <div>最後更新時間:{{$post->updated_at}}</div>
                    <div>
                        {{Str::limit($post->body,100)}}
                    </div>
                    <a href="{{route('post.show',$post->id)}}" class="text-sm px-8 py-2 bg-amber-300 rounded">繼續閱讀</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-master>

