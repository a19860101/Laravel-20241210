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
                <div class="mb-3">
                    <label for="" class="block w-full">文章分類</label>
                    <select name="category_id" id="" class="border border-zinc-400 p-2 rounded">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="">文章封面</label>
                    <input type="file" name="cover">
                    <div>{{$post->cover}}</div>
                    <img src="{{asset('storage/'.$post->cover)}}" alt="" class="w-12">
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
