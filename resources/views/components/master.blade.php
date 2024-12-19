<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="p-4 bg-zinc-900 text-zinc-100">
        <a href="{{route('post.index')}}">首頁</a>
        <a href="{{route('post.create')}}">新增文章</a>
        <a href="#">聯絡我</a>
    </nav>
    {{$slot}}
</body>
</html>
