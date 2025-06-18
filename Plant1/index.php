<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首页</title>
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="css/styles-merged.css">
        <link rel="stylesheet" href="css/custom.css">
<!--        <script src="js/vendor/jquery.min.js"></script>-->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.min.css">
        <link href="https://cdn.bootcdn.net/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
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
        <section class="probootstrap-slider flexslider">
            <div class="probootstrap-text-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate mb20" data-animate-effect="fadeIn">植物养护</h1>
                                <!--                                <div class="probootstrap-animate probootstrap-sub-wrap mb30" data-animate-effect="fadeIn">A new website</div>-->
                                <p class="probootstrap-animate" data-animate-effect="fadeIn"><a href="#" class="btn btn-ghost btn-ghost-white">Get This</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <li style="background-image: url(img/slider_1.jpg);"></li>
                <li style="background-image: url(img/slider_2.jpg);"></li>
            </ul>
        </section>
        <!-- END: slider  -->
        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_1.jpg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">花卉</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">花卉是具有观赏价值的草本植物，是用来描绘欣赏的植物的统称，喜阳且耐寒，具有繁殖功能的短枝，有许多种类。花卉由花冠、花萼、花托、花蕊组成，有各种各样的颜色，长得也各种各样，有香味或者无香味等。</p>
                                <p><a href="huahui.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_2.jpg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">草本植物</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">草本植物茎内的木质部不发达，含木质化细胞少，支持力弱。体形一般都很矮小，寿命较短，茎干软弱，多数在生长季节终了时地上部分或整株植物体死亡。根据年限长短分为一年生、二年生和多年生草本植物。</p>
                                <p><a href="caoben.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_3.jpg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">热带植物</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">热带温度变化小，全年皆夏，气候炎热、雨量充沛，一年四季适宜植物生长，在这里大大小小的植物都可以找到它们生存繁衍的合适场所。在热带森林里，树木分层生长，在高大的树下有灌木、灌木下有草丛，层层叠叠。</p>
                                <p><a href="redai.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-lg-block visible-md-block"></div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_4.jpg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">多肉植物</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">多肉植物也叫多水植物、肉质植物，是指植物器官的茎或叶或根具有发达的薄壁组织贮藏水分，在外形上显得肥厚多汁的植物。家族十分庞大，全球已知多肉达一万余种隶属100余科，属于高等植物，适应繁殖能力很强。</p>
                                <p><a href="duorou.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_5.jpg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">水生植物</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">能在水中生长的植物统称为水生植物。叶子柔软而透明，有的为丝状如金鱼藻。丝状叶可以大大增加与水的接触面积，使叶子能最大限度地得到水里很少得到的光照，吸收水里溶解很少的二氧化碳，保证光合作用的进行。</p>
                                <p><a href="shuisheng.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="product-item">
                            <figure><img src="img/img_6.jpeg" class="img-responsive"></figure>
                            <div class="text">
                                <h2 class="heading">观叶植物</h2>
                                <p style="line-height: 1.2em; text-align: justify; text-indent: 2em;">观叶植物，一般指叶形和叶色美丽的植物，原生于高温多湿的热带雨林中，需光量较少﹑竹芋类﹑蕨类植物等。木本植物大多属灌木或灌木状植物，如小叶榄仁﹑鹅掌藤等等。又分为草本植物和木本植物，如椒草类。</p>
                                <p><a href="guanye.php" class="btn btn-primary btn-sm">View Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-lg-block visible-md-block"></div>
                </div>
            </div>
        </section>  
        
        <!--url(images2/b8.jpg)-->
        <section class="probootstrap-section probootstrap-bg" style="background-image: url(img/slider_2.jpg) ;">
            <div class="container text-center">
                <h2 class="heading probootstrap-animate" data-animate-effect="fadeIn">Smile Like Sunflower</h2>
                <p class="sub-heading probootstrap-animate" data-animate-effect="fadeIn">本网站是一个覆盖各类植物养护、图片、技巧的一个专业植物知识查询类网站，主要提供植物名称及图片大全、植物养护知识、家庭养花技巧等优质的相关知识。</p>
            </div>
        </section>
        <!--url(images2/b10.jpg)-->
        <footer class="probootstrap-footer probootstrap-bg" style="background-image:url(img/slider_3.jpg) ">
            <div class="container">
                <div class="row mb60">
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h4 class="heading">About Our website</h4>
                            <p>This website is a professional plant knowledge inquiry website covering all kinds of plant maintenance, pictures and skills.</p>
                            <p><a href="#">Read more...</a></p>
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget" style="margin-left:50px">
                            <h4 class="heading">Quick Links</h4>
                            <ul class="stack-link">
                                <li><a href="huahui.php">Flowers</a></li>
                                <li><a href="caoben.php">Herbaceous plants</a></li>
                                <li><a href="redai.php">Tropical plants</a></li>
                                <li><a href="duorou.php">Succulent plants</a></li>
                                <li><a href="shuisheng.php">Aquatic plants</a></li>
                                <li><a href="guanye.php">Foliage plants</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h4 class="heading">Plants</h4>
                            <ul class="stack-link">
                                <li><a href="#">Organic Fruits</a></li>
                                <li><a href="#">Organic Vegeables</a></li>
                                <li><a href="#">Non-GMO Products</a></li>
                                <li><a href="#">Locally Grown Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="probootstrap-footer-widget">
                            <h4 class="heading">Subscribe</h4>
                            <p>Far far away behind the word mountains far from.</p>
                            <form action="#">
                                <div class="form-field">
                                    <input type="text" class="form-control" placeholder="Enter your email">
                                    <button class="btn btn-subscribe"><i class="icon-arrow-long-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-md-6">
                        <div class="probootstrap-footer-widget">
                            <p>Copyright ©2025</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="probootstrap-footer-widget right">
                            <ul class="probootstrap-footer-social">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                            </ul>
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
<!--        <script src="js/vendor/bootstrap.min.js"></script>-->
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
                })
            });
        </script>
<!--        <script src="js/home.js"></script>-->
    </body>
</html>