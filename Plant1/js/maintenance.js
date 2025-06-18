/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//浏览器大小发生改变时触发的函数
//window.onresize = function () {
//    var browserWidth = document.body.clientWidth;//获取浏览器可视区域的宽度。
//    if (browserWidth < 1070) {//当浏览器可视区域小于1070时触发
//    }
//}
$(document).ready(function () {
    window.onresize = function () {
        var browserWidth = document.body.clientWidth;//获取浏览器可视区域的宽度。
        if (browserWidth > 768) {//当浏览器可视区域大于768时触发
//            console.log(browserWidth);
            //设置高度为三个div中最大高度
//innerHeight（）：height+padding
            var h_max = 0;
            $(".service").each(function () {
                var h = $(this).height();
                h_max = h_max < h ? h : h_max;
            })
            $(".service").height(h_max);
            //$().height()是不包含padding和margin的设置，而$().css("height"，)是包含的
//                $(".service").css('height', h_max);
        }
    }
});
//$(document).ready(function () {
//    $(window).onresize();
//    window.onresize = function () {
//        var browserWidth = document.body.clientWidth;//获取浏览器可视区域的宽度。
//        if (browserWidth > 768) {//当浏览器可视区域大于768时触发
////设置高度为三个div中最大高度
////innerHeight（）：height+padding
//            var h_max = 0;
//            $(".service").each(function () {
//                var h = $(this).height();
//                h_max = h_max < h ? h : h_max;
//            })
//            $(".service").height(h_max);
//            //$().height()是不包含padding和margin的设置，而$().css("height"，)是包含的
////                $(".service").css('height', h_max);
//        }
//    }
//});
//$(window).onresize(function () {
//    var browserWidth = document.body.clientWidth; //获取浏览器可视区域的宽度。
//    if (browserWidth > 768) {//当浏览器可视区域大于768时触发
////设置高度为三个div中最大高度
////innerHeight（）：height+padding
//        var h_max = 0;
//        $(".service").each(function () {
//            var h = $(this).height();
//            h_max = h_max < h ? h : h_max;
//        })
//        $(".service").height(h_max);
//        //$().height()是不包含padding和margin的设置，而$().css("height"，)是包含的
////                $(".service").css('height', h_max);
//    }
//})

