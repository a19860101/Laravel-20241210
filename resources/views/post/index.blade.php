<x-master>
    <div class="container">
        <h1 class="text-4xl font-bold">
            @can('admin')
            管理員你好
            @else
            @auth
                {{Auth::user()->name}}你好
            @endauth
            @endcan
        </h1>
    </div>
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
                <div class="p-3 flex flex-col gap-4 items-start">
                    <div>
                        <span class="inline-block text-zinc-500 text-sm">{{$post->category->title}}</span>
                    </div>
                    <h2>{{$post->title}}</h2>
                    <div>{{$post->user->name ?? '無'}}</div>
                    <div><small>最後更新時間:{{$post->updated_at}}</small></div>
                    <div class="flex gap-2">
                        @foreach($post->tags as $tag)
                        <span class="px-1 bg-teal-300 rounded text-sm">{{$tag->title}}</span>
                        @endforeach
                    </div>
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

