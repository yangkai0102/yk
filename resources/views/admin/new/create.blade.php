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
<h2>添加新闻</h2>
<form action="{{url('admin/admin/store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table border="1">
        <tr>
            <td>新闻标题</td>
            <td>
                <input type="text" name="n_title">
            </td>
        </tr>
        <tr>
            <td>新闻分类</td>
            <td>
                <select name="cate_id">
                    @foreach($cateInfo as $v)
                        <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>新闻图片</td>
            <td>
                <input type="file" name="n_img">
            </td>
        </tr>
        <tr>
            <td>新闻简介</td>
            <td>
                <textarea name="n_desc" id="" ></textarea>
            </td>
        </tr>
        <tr>
            <td>新闻内容</td>
            <td>
                <textarea name="n_neirong" id=""></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>