<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/static/jquery.js"></script>
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>新闻标题</td>
            <td>新闻分类</td>
            <td>新闻图片</td>
            <td>新闻简介</td>
            <td>前往详情页</td>
        </tr>
        @foreach($data as $v)
        <tr>
            <td>{{$v->n_title}}</td>
            <td>{{$v->cate_name}}</td>
            <td>{{env('UPLOAD_URL')}}<img src="/storage/app/{{$v->n_img}}"></td>
            <td>{{$v->n_desc}}</td>
            <td>
                <a href="{{url('admin/admin/content/'.$v->n_id)}}">详情页</a>
            </td>
        </tr>
            @endforeach
    </table>
{{$data->links()}}
</body>
</html>
<script>
    $(document).on('click','.page-link',function(){
        var href=$(this).attr('href');
        // alert(_href);
        $.get(
            "{{url('admin/admin/url')}}",
            {href:href},
            function(res){
                console.log(res);
            }
        );
        return false;
    })
</script>
