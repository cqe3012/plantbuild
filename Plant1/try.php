<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>置顶</title>
<!--     
 <script>
//            在新页面接收参数， 并且将参数转为可用的json格式时， 可以用下面的方法：
            var url = location.search; //获取url中"?"符后的字串 ("maintenance.php?id="+title;)
            if (url.indexOf("?") != -1) {    //判断是否有参数 
                var str = url.substr(1); //从第一个字符开始 因为第0个是?号 获取所有除问号的所有字符串
                strs = str.split("=");   //用等号进行分隔 （因为知道只有一个参数 所以直接用等号进分隔 如果有多个参数 要用&号分隔 再用等号进行分隔）
//                参数是中文 需要解码 源码%是用来分割中文的，而每一个字是里面的十六进制
//                UTF-8可以直接在js中使用，decodeURI来解码
                var name = decodeURI(strs[1]);          //直接弹出第一个参数 （如果有多个参数 还要进行循环的）
            }
        </script>-->
    </head>
    <body>
   
      <?php
      require 'medooinit.php';
     // session_start();
      
        $name = $_GET["name"];
      //  $xiugai= "update plant set flag = 1 WHERE name=($name)";
      
//        $database->update("plant",
//                ["flag" => "1"],
//                ["name" => "$name"]);
//  
//        $database->update("plant", array(
//	"flag" => "1",
//        ), array(
//	"name" => "$name"
//        ));
//        
//
$plantdb->update("plant", array(
	"flag" => "1",
    ), array(
	"name" => "$name"
    ));
echo 'hello';

       echo "<script>history.back();\r\n </script>";

       ?>
    </body>
</html>
