<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Title</td>
            <td>Content</td>
        </tr>
        @forelse($article as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->text}}</td>
                <td><a href="/article/{{$article->id}}/edit">编辑</a></td>
                <td>
                    <form action="/article/{{$article->id}}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="delete">
                        <input type="submit" value="删除">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">暂无数据</td>
            </tr>
        @endforelse
    </table>
    <a href="./create">发表文章</a>
</body>
</html>