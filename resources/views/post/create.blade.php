<x-master>
    <div class="container">
        <div>
            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div>
                    <label for="">文章標題</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label for="">內文</label>
                    <textarea name="body" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="建立文章">
                <input type="button" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</x-master>
