<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>热带植物</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css1/style_1.css">
        <script src="js1/jquery.js"></script>
        <script src="js1/jquery-migrate-1.1.1.js"></script>
        <script src="js1/script.js"></script>
        <script src="js1/jquery.ui.totop.js"></script>
        <script src="js1/superfish.js"></script>
        <script src="js1/jquery.equalheights.js"></script>
        <script src="js1/jquery.mobilemenu.js"></script>
        <script src="js1/jquery.easing.1.3.js"></script>
        <script src="js1/zidian.js"></script>
<!--        <script>
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});
    })
</script>-->
    </head>
    <body id="top">
        <!--==============================header=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <h1>
                        <a href="index.html">
                            <img src="images/logo.png" alt="Your Happy Family">
                        </a>
                    </h1>
                </div>
            </div>
            <div class="clear"></div>
            <div class="menu_block ">
                <div class="container_12">
                    <div class="grid_12">
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li><a href="index.php">首页</a></li>
                                <li><a href="huahui.php">花卉</a></li>
                                <li><a href="caoben.php">草本植物</a></li>
                                <li class="current"><a href="redai.php">热带植物</a></li>
                                <li><a href="duorou.php">多肉植物</a></li>
                                <li><a href="shuisheng.php">水生植物</a></li>
                                <li><a href="guanye.php">观叶植物</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!--==============================Content=================================-->
        <div class="content">
            <div class="container_12">
                <div class="grid_12">
                    <h2>热带植物&nbsp;Tropical plants;</h2>
                </div>
                <!--热带1-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            require 'medooinit.php';
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "1","type" => "热带植物"]);
                            $a = $pic[0]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#">
                                <strong><?php
                                    $data = $mydb->select('plant', ['name'], ["flag" => "1","type" => "热带植物"]);
                                    echo $data[0]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "1","type" => "热带植物"]);
                                    echo $data[0]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "1","type" => "热带植物"]);
                        echo $data[0]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[0]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[0]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[0]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                    </div> 
                    <br><br><br>
                </div>

                <!--热带植物2-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "0","type" => "热带植物"]);
                            $a = $pic[0]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#"> 
                                <strong><?php
                                    $data = $mydb->select('plant', ['name'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[0]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[0]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "0","type" => "热带植物"]);
                        echo $data[0]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[0]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[0]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[0]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                        <a href="#" class="btn top">置顶</a>
                    </div> 
                    <br><br><br><br><br><br><br>
                </div>

                <!--热带植物3-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "0","type" => "热带植物"]);
                            $a = $pic[1]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#"> 
                                <strong><?php
                                    $data = $mydb->select('plant', ['name'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[1]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[1]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "0","type" => "热带植物"]);
                        echo $data[1]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[1]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[1]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[1]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                        <a href="#" class="btn top">置顶</a>
                    </div> 
                    <br><br><br><br><br><br>
                </div>

                <!--热带植物4-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "0","type" => "热带植物"]);
                            $a = $pic[2]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#"> 
                                <strong><?php
                                    $data = $mydb->select('plant', ['name'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[2]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[2]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "0","type" => "热带植物"]);
                        echo $data[2]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[2]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[2]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[2]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                        <a href="#" class="btn top">置顶</a>
                    </div> 
                    <br><br><br><br><br><br>
                </div>

                <!--热带植物5-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "0","type" => "热带植物"]);
                            $a = $pic[3]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#"> 
                                <strong><?php
                                    $data = $mydb->select('plant', ['name'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[3]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[3]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "0","type" => "热带植物"]);
                        echo $data[3]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[3]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[3]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[3]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                        <a href="#" class="btn top">置顶</a>
                    </div> 
                    <br><br><br><br><br>
                </div>

                <!--热带植物6-->
                <div class="grid_6">                
                    <div class="img_block fleft">                                         
                        <div class="img_inner">
                            <?php
                            $pic = $mydb->select("plant", ["picture"], ["flag" => "0","type" => "热带植物"]);
                            $a = $pic[4]["picture"];
                            echo "<img src='{$a}'/>";
                            ?>
                        </div>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>

                    <div class="extra_wrapper">
                        <div class="text1"><a href="#"> 
                                <strong><?php                               
                                    $data = $mydb->select('plant', ['name'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[4]["name"];
                                    ?>
                                </strong>&nbsp;<?php
                                    $data = $mydb->select('plant', ['englishname'], ["flag" => "0","type" => "热带植物"]);
                                    echo $data[4]["englishname"];
                                    ?><br></a>
                        </div><br>别名：
                        <?php
                        $data = $mydb->select('plant', ['another_name', 'feature', 'fun', 'culture'], ["flag" => "0","type" => "热带植物"]);
                        echo $data[4]["another_name"];
                        echo "<br><br> <b>生态特征：</b>";
                        echo $data[4]["feature"];
                        echo "<br> <b>植物趣事：</b>";
                        echo $data[4]["fun"];
                        echo "<br> <b>植物文化：</b>";
                        echo $data[4]["culture"];
                        ?><br>
                        <a href="#" class="btn yanghu">养护攻略</a>
                        <a href="#" class="btn top">置顶</a>
                    </div> 
                    <br><br><br>
                </div>

            </div>
        </div>


        <div class="bottom_block pb1">
            <div class="container_12">
                <div class="grid_11">
                    <h2>Price List</h2>
                    <div class="img_block fleft ib2">
                        <img src="images/page3_img4.jpg" alt="" class="img_inner">
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>
                    <br><br><br>
                    <div class="extra_wrapper">
                        <ul class="list l1">
                            <li>
                                <div class="price"><a href="#">椰子树</a><span>$ 100045.20</span></div>
                            </li>
                            <li>
                                <div class="price"><a href="#">咖啡树</a><span>$ 120.10</span></div>
                            </li>
                            <li>
                                <div class="price"><a href="#">可可树</a><span>$ 63.50</span></div>
                            </li>
                            <li>
                                <div class="price"><a href="#">波罗蜜</a><span>$ 90.30</span></div>
                            </li>
                            <li>
                                <div class="price"><a href="#">见血封喉</a><span>$ 45.60</span></div>
                            </li>
                            <li>
                                <div class="price"><a href="#">猪笼草</a><span>$ 50.79 </span></div>
                            </li>	
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================footer=================================-->
        <footer>
            <div class="container_12">
                <div class="grid_12 ">
                    <div class="copy" style="center">
                        Eden (C) 2025 &nbsp;|&nbsp;  
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        
        <script>
            $(document).ready(function ()
            {
                $().UItoTop({easingType: 'easeOutQuart'});
                //获取点击的标签同级div的strong标签内容 即植物名称
                $(".top").click(function () {
                    var name = $(this).siblings("div").find("strong").text();
                    //跳转到置顶页面并传递植物类型和名称
                    window.location.href= "top.php?type=热带植物&name="+name;
                })
            })                        
        </script>
    </body>
</html>
