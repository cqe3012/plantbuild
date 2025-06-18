/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function ()
{
    $().UItoTop({easingType: 'easeOutQuart'});
    //获取点击的标签同级div的strong标签内容 即植物名称
    $(".yanghu").click(function () {
        var name = $(this).siblings("div").find("strong").text();
        //跳转到养护攻略页面并传递植物名称
        window.location.href = "maintenance.php?name=" + name;
    })
})



