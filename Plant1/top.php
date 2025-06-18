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

    </head>
    <body>
      <?php
      require 'medooinit.php';
        $name = $_GET['name'];
        $type = $_GET['type'];
      //  echo $type;
      //  echo $name;
   $data2 = $mydb->update("plant",  [
            "flag" => "0"], [
            "type" => $type
        ]);
    $data1 = $mydb->update("plant",  [
            "flag" => "1"], [
            "name" => $name
        ]);
     echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
       ?>
    </body>
</html>
