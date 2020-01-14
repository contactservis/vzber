// главная страница
$(document).ready(function(){
    //раскрывающиеся боксы вопросов помощи на главной странице
    $(".box_help").on('click', function(){
        var text_box = $(this).children(".card-body");
        var head_box = $(this).children(".card-header");
        var pl_min   = $(head_box).children("span.float-right");

        $(text_box).animate({
            display:'block',
            height: "toggle"
        }, 300 , function(){
        
        });
        if ($(text_box).hasClass('hide')){
            console.log('текст скрыт!');
            $(text_box).removeClass('hide');
            $(pl_min).removeClass('icon_pl');
            $(pl_min).addClass('icon_min');
        }else {
            $(text_box).addClass('hide');
            $(pl_min).removeClass('icon_min');
            $(pl_min).addClass('icon_pl');

        }

    });

    // кнопка
    let button_os = $('.button_os');
    $.each(button_os, function (i, item) {
        let span = item.getElementsByTagName('*');
        let width = span.length*3;
        $.each(span, function (ic, itemc) {
            width += itemc.clientWidth;
        });
        item.style.minWidth = width + 'px';
    })
    $('.button_os span').on('click', function(){
        let span_parent  = $(this).parent('.button_os');
        let all_span_box = $(span_parent).find("span");
        if(window.innerWidth<span_parent[0].clientWidth){
            if($(this).is(':first-child')){
                span_parent.css("transform", "translate(0px)");
            }else if($(this).is(':last-child')){
                span_parent.css("transform", "translate("+(window.innerWidth-span_parent[0].clientWidth-45)+"px)");
            }else{
                span_parent.css("transform", "translate("+(-1)*($(this)[0].clientWidth/2+$(this)[0].offsetLeft-window.innerWidth/2+15)+"px)");
            }
        }
        let name = $(this)[0].attributes['data-name'].nodeValue;
        let numSlide = $(this)[0].attributes['data-pointer'].nodeValue;
        $('div[data-sliderName="'+name+'"]:visible').fadeOut(200, function () {
            $('div[data-sliderName="'+name+'"][data-slide="'+numSlide+'"]').fadeIn(200);
        });
        $(all_span_box).removeClass('bt_sr_active');
        $(this).addClass('bt_sr_active');
    });
});