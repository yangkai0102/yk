<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新闻详情页-新闻标题</h1>
作者：{{$data->n_name}}   发布时间：{{$data->create_time}}    访问量：
    <br>
    <br>
主体内容：{{$data->n_neirong}}

</body>
</html>
