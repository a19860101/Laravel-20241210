<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('form.update',['student'=>$student->id])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="{{$student->name}}">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="{{$student->phone}}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="{{$student->email}}">
        </div>
        <input type="submit" value="更新資料">
        <input type="button" value="取消" onclick="location.href='/form'">
    </form>
</body>
</html>
