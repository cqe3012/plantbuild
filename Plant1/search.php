<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>搜索结果</title>
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="css/styles-merged.css">
        <link rel="stylesheet" href="css/custom.css">
<!--        <script src="js/vendor/jquery.min.js"></script>-->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.min.css">
        <link href="https://cdn.bootcdn.net/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/maintenance.css">
    </head>
    <body style="background-color: #fff;">
<!--        <script>
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
        <?php
////      PHP获取js变量                        
//        $name = "<script>document.writeln(name);</script>";
        $name = $_GET["name"];
//        echo $name;
//        $name = "吊兰";
        include 'medooinit.php';
        //左连接
        $data = $mydb->select("plant", [
            "[>]picture" => ["name" => "name"]
                ], [
            "picture.path",
            "plant.another_name",
            "plant.feature",
            "plant.culture",
            "plant.fun"
                ], [
            "plant.name" => $name
        ]);
//        echo $mydb->last();
//        echo '<br>';
//        print_r($data);
        ?>
        <!-- START: header -->
        <div class="probootstrap-loader"></div>

        <header role="banner" class="probootstrap-header">
            <!--style="height: 55px;"-->
            <div class="container">
                <a href="index.php" class="probootstrap-logo">Sunflower<span>.</span></a>
                <!--style="margin-top: 10px; padding-top: 10px; overflow:hidden;"-->
                <li class="gg">
                    <!--                    navbar-right-->
                    <form class="navbar-form"  role="search" action="search.php" method="GET">
                        <div class="form-group">
                            <input type = "text" class = "form-control" placeholder = "Search" name="name">
                            <button type = "submit" class = "btn btn-default search" >搜索</button>
    <!--                            <input type="submit" name="submit" value="搜索">-->
                        </div>
                    </form>
                </li>

                <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
                <div class="mobile-menu-overlay"></div>

                <nav role="navigation" class="navbar probootstrap-nav hidden-xs">
                    <ul class="nav navbar-nav probootstrap-main-nav">
                        <li class="active gg"><a href="index.php" class="kk">主页</a></li>
                        <!-- dropdown下拉菜单 -->
                        <li class="dropdown gg">
                            <a href="#" class="dropdown-toggle kk" data-toggle="dropdown">
                                分类
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="caoben.php">草本植物</a></li>
                                <li class="divider"></li>
                                <li><a href="duorou.php">多肉植物</a></li>
                                <li class="divider"></li>
                                <li><a href="guanye.php">观叶植物</a></li>
                                <li class="divider"></li>
                                <li><a href="huahui.php">花卉</a></li>
                                <li class="divider"></li>
                                <li><a href="shuisheng.php">水生植物</a></li>
                                <li class="divider"></li>
                                <li><a href="redai.php">热带植物</a></li>
                            </ul>
                        </li>

                        <!--                        <li class="gg" style="margin-top: 10px">
                                                    navbar-right
                                                    <form class="navbar-form"  role="search" style="padding: 0; margin-top: 0;" action="search.php" method="GET">
                                                        <div class="form-group">
                                                            <input type = "text" class = "form-control" placeholder = "Search" name="name">
                                                            <button type = "submit" class = "btn btn-default search" >搜索</button>
                                                            <input type="submit" name="submit" value="搜索">
                                                        </div>
                                                    </form>
                        
                                                </li>-->
                        <!--style="float:right"-->
                        <li class="gg navbar-right" ><a href="login.php" style="font-weight: 550; padding-left: 0">登录</a></li>
                    </ul>

                    <div class="extra-text visible-xs"> 
                        <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END: header -->

        <section class="probootstrap-section">
            <div class="container">
                <div class="probootstrap-section-heading text-center mb50 probootstrap-animate">
                    <h2 class="heading name"><?php echo $name; ?></h2>
                    <a href="#" class="btn yanghu">养护攻略</a>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <a href="<?php
                        if (isset($data[0]["path"])) {
                            echo $data[0]["path"];
                        }
                        ?>" class="image-popup">
                            <img src="<?php
                            if (isset($data[0]["path"])) {
                                echo $data[0]["path"];
                            }
                            ?>" class="img-responsive img-rounded" alt="Free Bootstrap Template by sc.chinaz.com">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs probootstrap-animate" data-animate-effect="fadeIn">
                        <a href="<?php
                        if (isset($data[1]["path"])) {
                            echo $data[1]["path"];
                        }
                        ?>" class="image-popup">
                            <img src="<?php
                            if (isset($data[1]["path"])) {
                                echo $data[1]["path"];
                            }
                            ?>" class="img-responsive img-rounded" alt="Free Bootstrap Template by sc.chinaz.com">
                        </a>
                    </div>
                    <!--                    <div class="clearfix visible-sm-block"></div>-->
                    <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs probootstrap-animate" data-animate-effect="fadeIn">
                        <a href="<?php
                        if (isset($data[2]["path"])) {
                            echo $data[2]["path"];
                        }
                        ?>" class="image-popup">
                            <img src="<?php
                            if (isset($data[2]["path"])) {
                                echo $data[2]["path"];
                            }
                            ?>" class="img-responsive img-rounded" alt="Free Bootstrap Template by sc.chinaz.com">
                        </a>
                    </div>
                    <!--                    <div class="clearfix visible-md-block"></div>-->
                    <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs probootstrap-animate" data-animate-effect="fadeIn">
                        <a href="<?php
                        if (isset($data[3]["path"])) {
                            echo $data[3]["path"];
                        }
                        ?>" class="image-popup">
                            <img src="<?php
                            if (isset($data[3]["path"])) {
                                echo $data[3]["path"];
                            }
                            ?>" class="img-responsive img-rounded" alt="Free Bootstrap Template by sc.chinaz.com">
                        </a>
                    </div>
                </div>
        </section>  

        <section class="probootstrap-section">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                        <div class="service" id="left">
                            <div class="icon"><i class="icon-tree"></i></div>
                            <h2 class="heading">生态特征</h2>
                            <p><?php
                                if (isset($data[0]["feature"])) {
                                    echo $data[0]["feature"];
                                }
                                ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                        <div class="service" id="left">
                            <div class="icon"><i class="icon-book2"></i></div>
                            <h2 class="heading">植物文化</h2>
                            <p><?php
                                if (isset($data[0]["culture"])) {
                                    echo $data[0]["culture"];
                                }
                                ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                        <div class="service" id="left">
                            <div class="icon"><i class="icon-emoji-flirt"></i></div>
                            <h2 class="heading">植物趣事</h2>
                            <p><?php
                                if (isset($data[0]["fun"])) {
                                    echo $data[0]["fun"];
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--        url(img/slider_3.jpg)-->
        <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(images2/b12.jpg)">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-6">
                        <div class="probootstrap-footer-widget">
                            <p>Copyright ©2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
        </div>
        <script src="js/vendor/jquery-2.1.1.min.js"></script>
        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://cdn.bootcdn.net/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function () {
                $.ajax({
                    method: "POST",
                    url: "public.php",
                    success: function (res) {
                        $(".form-control").autocomplete({
                            source: JSON.parse(res)
                        });
                    }
                });
                $(".yanghu").click(function () {
                    var name = $(".name").text();
                    //跳转到养护攻略页面并传递植物名称
                    window.location.href = "maintenance.php?name=" + name;
                })
            });
        </script>
<!--    <script src="js/vendor/bootstrap.min.js"></script>-->
<!--        <script src="js/maintenance.js"></script>-->
    </body>
</html>