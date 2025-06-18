<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
 
    </head>
    <body>
        <?php
        if($_POST){
             if($_POST['name2']=='user'&& $_POST['password2']=='1234'){
                 echo "<script>alert('登录成功！'); location.replace(\"index.php\");</script>";

             }
             else{   //echo '登录失败';
                      //$_SESSION['error'] = '登录失败!';
//                     header('Location:register_login.php');
                      echo "<script>alert('登录失败！');history.back();\r\n </script>";
             }    
        }
        ?>
    </body>
</html>
