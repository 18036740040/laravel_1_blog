<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/article/{{$article->id}}" method="post">
        {!! csrf_field() !!}}
        <input type="hidden" name="_method" value="put">
        Title:<input type="text" name="title" value="{{$article->title}}"><br>
        Content:<textarea name="text" id="text" cols="30" rows="10">{{$article->text}}</textarea>
        <input type="submit" value="修改">
    </form>
</body>
</html>