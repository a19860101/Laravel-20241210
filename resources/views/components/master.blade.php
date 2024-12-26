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
    <nav class="p-4 bg-zinc-900 text-zinc-100 flex justify-between">
        <div class="flex gap-4">
            <a href="{{route('post.index')}}">首頁</a>
            <a href="{{route('post.create')}}">新增文章</a>
            {{-- <a href="{{route('post.trash')}}">垃圾桶</a> --}}
            {{-- <a href="{{route('category.index')}}">分類管理</a> --}}
            <a href="#">聯絡我</a>
        </div>
        <div class="flex gap-4">
            @if (Route::has('login'))

                @auth
                    <a href="{{ url('/dashboard') }}" class="">{{__("Dashboard")}}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="">登入</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">註冊</a>
                    @endif
                @endauth

        @endif
        </div>
    </nav>
    {{$slot}}
</body>
</html>
