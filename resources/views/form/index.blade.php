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
    <a href="{{route('about.index',['id'=>123])}}">about</a>
    <form action="{{route('form.store')}}" method="post">
        @csrf
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="送出">
    </form>
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>姓名</th>
                <th>電話</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
