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
    $("#nav-holder").load("/blocks/nav/nav.html");
    $("footer").load("/blocks/footer/footer.html");
})