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
<form action="{{url('admin/login/loginDo')}}" method="post">
    @csrf
    <table border="1">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="admin_name" placeholder="用户名"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="admin_pwd" placeholder="密码"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="登录"></td>
        </tr>
    </table>
</form>
</body>
</html>