<x-master>
    <div class="container mx-auto">
        @foreach($trashes as $t)
        <div>
            {{$t->title}}
        </div>
        @endforeach
    </div>
</x-master>
