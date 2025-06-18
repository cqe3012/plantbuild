<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link type="text/css" href="css/登录.css" rel="stylesheet">
</head>
<body>
<div id="divd">
    <p id="p1">欢迎来到登录页面！</p>
    <div class="form-container">
        <div id="div1">
            <form action="administrator_handing" method="POST">
                <label style="font-size:28px;">管理员登录</label><br><br>
                <label style="font-size:20px;">姓名</label>&nbsp;&nbsp;
                <input type="text" id="name" name="name2" onFocus="this.style.backgroundColor = '#CF9'" required>
                <span id="span5"></span><br><br>
                <label style="font-size:20px;">密码</label>&nbsp;&nbsp;
                <input type="password" id="password" name="password2" onFocus="this.style.backgroundColor = '#CF9'" required>
                <span id="span6"></span><br><br>
                <input id="submit3" type="submit" value="登录" style="font-size:16px;">
            </form>
        </div>
    </div>
</div>
</body>
</html>