// banners

$(function(){
    var q=1;
    if($(".banners input.cr-selector-img-3").trigger("click")){
        q=3;
    }
    if($(".banners input.cr-selector-img-2").trigger("click")){
        q=2;
    }
    if($(".banners input.cr-selector-img-1").trigger("click")){
        q=1;
    }
    $(".rightarrow").click(function(){
        if(q>3){
            q=1;
        }
        if(q==1){
            $(".banners input.cr-selector-img-2").trigger("click");
        }
        else if(q==2){
            $(".banners input.cr-selector-img-3").trigger("click");
        }
        else if(q==3){
            $(".banners input.cr-selector-img-1").trigger("click");
        }
        q++;
    })
    $(".leftarrow").click(function(){
        if(q>3){
            q=1;
        }
        if(q==1){
            $(".banners input.cr-selector-img-3").trigger("click");
        }
        else if(q==2){
            $(".banners input.cr-selector-img-2").trigger("click");
        }
        else{
            $(".banners input.cr-selector-img-1").trigger("click");
        }
        q++;
    })
    var timer1;
    function play(){
        timer1=setInterval(function(){
            $(".rightarrow").trigger("click");
        },2300);
    }
    function stop(){
        clearInterval(timer1);
    }
    $(".cr-bgimg div,.leftarrow,.rightarrow").mouseover(function(){ 
        stop();
    });
    $(".cr-bgimg div,.leftarrow,.rightarrow").mouseout(function(){ 
        play();
    });
    play();
})

$(function(){
    $(".leftarrow,.rightarrow,.banners label").css("display","none");
    $(".cr-bgimg div,.leftarrow,.rightarrow,.banners label").hover(function(){
        $(".leftarrow,.rightarrow,.banners label").stop(true,true);
        $(".leftarrow,.rightarrow,.banners label").css("display","block");
    },function(){
        $(".leftarrow,.rightarrow,.banners label").stop(true,true);
        $(".leftarrow,.rightarrow,.banners label").css("display","none");
    })
});
    








//?????????

$(function(){
    var p=0;//??????????????????????????????
    var wrap=$('.meetingimgs');
    var firstimg=$('.meetingimgs>li').first().clone();//?????????????????????
    $(".meetingimgs").append(firstimg).width($(".meetingimgs>li").length*100+'%');//???????????????

    function change(){
        p++;
        if(p==$(".meetingimgs>li").length){//??????p??????
            p=1;
            $(".meetingimgs").css('left','0');
        }
        wrap.stop().animate({left:-p*100+'%'},230);
        var q;
        if(p<3)
            q=p+1;
        else
            q=1;
        showBtn(q);
    }

    //????????????
    $(".newsimg_button>a").click(function(){
        var i=$(this).attr("index");
        var q;
        if(p<3)
            q=p+1;
        else
            q=1;
        var n=q-i;
        if(n>0){//????????????
            wrap.stop().animate({left:-(q-n-1)*100+'%'},230);
            q=q-n;
            if(q==1)
                p=3;
            else
                p=1;
            showBtn(q);
        }
        else{//????????????
            for(var j=0;j<-n;j++){
                change();
            }
        }
    });

    //????????????????????????
    function showBtn(q){
        $(".newsimg_button>a").removeAttr('id');
        $(".newsimg_button>a").eq(q-1).attr('id','on');
    }
    
    var timer;
    function play(){
        timer=setInterval(change,2300);
    }
    function stop(){
        clearInterval(timer);
    }
    
    $(".meetingimgs,.newsimg_button").mouseover(function () { 
        stop();
    });
    $(".meetingimgs,.newsimg_button").mouseout(function () { 
        play(); 
    });
    play();
})


// bellow_right

$(function(){
    $(".bellow_right>div a:nth-child(2)").hover(function(){
        $(this).find("span").stop(true,true);
        $(this).find("span").animate({height:"40px"});
        
    },function(){
        $(this).find("span").stop(true,true);
        $(this).find("span").animate({height:"0"});
    })
});



$(function () {
    $("#rocket-to-top").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 200) {
                $("#rocket-to-top").fadeIn(500);
            } else {
                $("#rocket-to-top").fadeOut(500);
            }
        });
        $("#rocket-to-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });
    });
});