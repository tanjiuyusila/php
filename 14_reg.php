<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<!--通过ajax就不需要form了-->

    用户名：<input type="text" id="username">
    <span class="error name_err"></span>
    <br/>
    密码：<input type="password" id="pwd1"><br/>
    确认密码：<input type="password" id="pwd2"><br/>
    <button id="btn">注册</button>
    <script src="jquery-1.12.4.js"></script>
    <script>
        $(function () {   //文档就绪函数
            $('#btn').on('click',function () {
                //用id获取值
                var name = $('#username').val();
                var pwd1 = $('#pwd1').val();
                var pwd2 = $('#pwd2').val();

                $.get('15_server1.php',{
                    name:name,
                    pwd1:pwd1,
                    pwd2:pwd2,
                },function (data) {
                    if(data == 'nameErr'){
                        $('.name_err').html('用户名不能为空')
                    }
                },'text');
            });
        })
    </script>

</body>
</html>