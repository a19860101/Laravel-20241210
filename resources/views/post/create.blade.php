<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{route('post.index')}}">首頁</a>
        <a href="{{route('post.create')}}">新增文章</a>
    </nav>
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
</body>
</html>
