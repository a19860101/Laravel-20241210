<x-master>
    <h1>分類</h1>
    <a href="{{route('category.create')}}" class="inline-block bg-blue-400 px-8 py-2">新增分類</a>
    <div class="container">
        <div class="divide-y">
            @foreach($categories as $category)
            <div>
                {{$category->title}}
            </div>
            @endforeach
        </div>
    </div>
</x-master>
