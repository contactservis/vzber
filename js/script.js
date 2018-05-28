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
        }, 600 , function(){
        
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

    $('.main_list_proekt .card').mouseenter(function(){
        $(this).animate({
            'margin-top': '-3px'            
        }, 200, function(){
            /*$(this).css({'-webkit-box-shadow': '2px 6px 18px 2px rgba(214,214,214,1)',
            '-moz-box-shadow': '2px 6px 18px 2px rgba(214,214,214,1)',
            'box-shadow': '2px 6px 18px 2px rgba(214,214,214,1)'});*/
        });
    });

    $('.main_list_proekt .card').mouseleave(function(){
        $(this).animate({
            'margin-top': '0px'
        }, 200, function(){

        });
    });

    // кнопка 
    $('.button_os span').on('click', function(){
        var span_parent  = $(this).parent('.button_os');
        var all_span_box = $(span_parent).find("span")
        
        if ($(this).hasClass('bt_sr_active')){
            $(all_span_box).addClass('bt_sr_active');
            $(this).removeClass('bt_sr_active');
        }else {
            $(all_span_box).removeClass('bt_sr_active');
            $(this).addClass('bt_sr_active');
        }
    });
});