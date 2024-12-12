<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse
        }
        td,th {
            border: 1px solid #777;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>表單</h1>
    {{-- <a href="{{route('about.index',['id'=>123])}}">about</a> --}}
    <a href="{{route('form.create')}}">新增學員資料</a>
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>姓名</th>
                <th>電話</th>
                <th>註冊時間</th>
                <th>動作</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->created_at}}</td>
                <td>
                    <form action="{{route('form.destroy',['id'=>$student->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
