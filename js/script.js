function rebuildSlider(className, row = 1) {
    const carousele = $(className)
    const columnClassName = carousele.find('.owl-item').first().children().first()[0].className;
    //const itemClassName = $('.'+columnClassName).first().children().first()[0].className;
    const objItem = $(className+' .'+columnClassName.replace(' ','.')).children();
    let counter = 0;
    let newSliderContent = '';
    $.each(objItem, function (key, value){
        if (counter === 0) {newSliderContent += '<div class="'+columnClassName+'">'};
        newSliderContent += value['outerHTML'];
        counter++;
        if (counter === row) {newSliderContent += '</div>'; counter = 0;}
    });
    //console.log(newSliderContent.replace(/\s+/g,' '));
    carousele.owlCarousel().trigger('replace.owl.carousel', [jQuery(newSliderContent.replace(/\s+/g,' '))]).trigger('refresh.owl.carousel');
}
function scanerForRebuildSlider(className, desktop = 1, notebook = 1, tablet = 1, mobile = 1) {
    const widthScreen = window.innerWidth;
    switch (true) {
        case (widthScreen<=575): {
            console.log("mobile");
            rebuildSlider(className, mobile);
            break;
        }
        case (widthScreen<=991): {
            console.log("tablet");
            rebuildSlider(className, tablet);
            break;
        }
        case (widthScreen<=1199): {console.log("notebook");
            rebuildSlider(className, notebook);
            break;
        }
        default: {
            console.log("desktop");
            rebuildSlider(className, desktop);
            break;
        }
    }
}
function responsivRowOwl(className, d=1, n=1, t=1, m=1) {
    $(className).on('resized.owl.carousel', function() {
        scanerForRebuildSlider(className, d, n, t, m);
    });
    scanerForRebuildSlider(className, d, n, t, m);
}

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