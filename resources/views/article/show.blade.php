<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
        </tr>
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td><textarea name="text" id="text" cols="30" rows="10">{{$article->text}}</textarea></td>
            <td><a href="/article/{{$article->id}}/edit">编辑</a></td>
        </tr>
    </table>
    <a href="/">文章总览</a>
</body>
</html>