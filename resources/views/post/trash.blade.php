<x-master>
    <div class="container mx-auto">
        @foreach($trashes as $t)
        <div>
            {{$t->title}}
            <a href="{{route('post.restore',$t->id)}}">還原</a>
            <form action="{{route('post.forceDelete',$t->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="強制刪除" onclick="return confirm('確認刪除?')">
            </form>
        </div>
        @endforeach
    </div>
</x-master>
