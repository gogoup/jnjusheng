$(document).ready(function(){
    navSlide();
    infor();
    fix();
})
/*导航栏下拉菜单*/
function navSlide(){
    $(".header-nav ul li a").mouseenter(function(){
        $(this).parent().find(".header-nav-slide").slideDown();
    });
    $(".header-nav ul li").mouseleave(function(){
        $(this).parent().find(".header-nav-slide").slideUp();
    })
}
/*资讯服务*/
function  infor(){
    var index=0;
    $($(".home-info-list ul li")[index]).css({"background":"#002772","color":"#ffffff"});
    $($(".home-info-detail>ul>li")[index]).css("display","block");
    $(".home-info-list ul li").hover(function(){
        $(".home-info-list ul li").css({"background":"#ffffff","color":"#000000"});
        $($(".home-info-detail>ul>li")[index]).css("display","none");
        index=$(this).index();
        $($(".home-info-list ul li")[index]).css({"background":"#002772","color":"#ffffff"});
        $($(".home-info-detail>ul>li")[index]).css("display","block")
    })
}
function fix(){
    $(".common-fixed ul li").click(function(){
        $(this).find("img").css("src","../image/codeHover.png");
    })
}