$(document).ready(function(){
    // navSlide();
    infor($("#home-info-list ul li"),$("#home-info-detail>ul>li"));
    infor($("#service-new-left ul li"),$("#service-new-right>ul>li"));
    infor($("#service-activity-left ul li"),$("#service-activity-right>ul>li"));
    infor($("#service-terrace-left ul li"),$("#service-terrace-right>ul>li"));
    register();
    left_tab();
    lesson_tab();
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
function  infor(left,right){
    var index=0;
    $($(left)[index]).css({"background":"#0195FF","color":"#ffffff"});
    $($(right)[index]).css("display","block");
    $(left).hover(function(){
        $(left).css({"background":"#ffffff","color":"#000000"});
        $($(right)[index]).css("display","none");
        index=$(this).index();
        $($(left)[index]).css({"background":"#0195FF","color":"#ffffff"});
        $($(right)[index]).css("display","block")
    })
}
/*注册身份切换*/
function register(){
    var index=0;
    $($(".register-con-tab a")[index]).addClass("register-con-tab-now");
    $($(".register-con-left")[index]).css("display","block");
    $(".register-con-tab a").click(function(){
        index=$(this).index();
        $(".register-con-tab a").removeClass("register-con-tab-now");
        $(this).addClass("register-con-tab-now");
        $(".register-con-left").css("display","none");
        $($(".register-con-left")[index]).css("display","block")
    })
}
/*新闻列表切换*/
function left_tab(){
    var i=0;
    $($(".business-con-left ul li")[i]).find("a").addClass("business-con-now");
    $($(".business-con-right-tab")[i]).css("display","block");
    $(".business-con-left ul li").click(function(){
        $(this).siblings().find("a").removeClass("business-con-now");
        $(".business-con-right-tab").css("display","none");
        i=$(this).index();
        $(this).find("a").addClass("business-con-now");
        $($(".business-con-right-tab")[i]).css("display","block");
    })
}
/*创业课程切换*/
function lesson_tab(){
    var i=0;
    $(".business-course-bot-area").css("display","none");
    $($(".business-course-bot-left ul li")[i]).addClass("business-course-now");
    $($(".business-course-bot-area")[i]).css("display","block");
    $(".business-course-bot-left ul li").click(function(){
        $(this).siblings().removeClass("business-course-now");
        $(".business-course-bot-area").css("display","none");
        i=$(this).index();
        $(this).addClass("business-course-now");
        $($(".business-course-bot-area")[i]).css("display","block");
    })
}