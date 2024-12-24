<x-master>
    <div class="container mx-auto">
        @foreach($trashes as $t)
        <div>
            {{$t->title}}
            <a href="{{route('post.restore',$t->id)}}">還原</a>
        </div>
        @endforeach
    </div>
</x-master>
