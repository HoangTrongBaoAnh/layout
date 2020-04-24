$(document).ready(function(){
    $('.news-ticker').marquee({
        duration: 10000,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true
    });   
    $('.menu-demuc').click(function(){
        $(this).next().slideToggle(500);
    })
})