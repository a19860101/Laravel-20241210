<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>
    <nav>
        <a href="{{route('post.index')}}">首頁</a>
        <a href="{{route('post.create')}}">新增文章</a>
        <a href="#">聯絡我</a>
    </nav>
    {{$slot}}
</body>
</html>
