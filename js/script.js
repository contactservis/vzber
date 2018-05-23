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
});