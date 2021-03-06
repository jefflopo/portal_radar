$(document).ready( function(){
    
    $("#input-search").on("focus", function(){
        $("li.search").addClass("ativo");
    }).on("blur", function(){
       $("li.search").removeClass("ativo"); 
    });
    
    $(".thumbnails").owlCarousel({
 
      //autoPlay: 3000,
      items : 4,
      dotsEach: true,
      navigation: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      dotSpeed: 3/true
      
 
    });
    $('#carousel_').carousel({
        interval:2000
    });
    
    var owl = $(".thumbnails").data('owlCarousel');

    $('.fa-angle-left').on("click", function(){

            owl.prev();

    });

    $('.fa-angle-right').on("click", function(){

            owl.next();

    });
    
    var owl2 = $(".thumbnails").data('owlCarousel');
    
    $('#btn2-artigo-prev').on("click", function(){
        owl2.prev();
    });
    $('#btn2-artigo-next').on("click", function(){
        owl2.next();
    });
    
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    
    $("#page-up").on("click", function(event){
        
        $("body").animate({
            scrollTop:0
        }, 1000);
        
        event.preventDefault();
        
    });
    $("#btn-bars").on("click", function(){
       
        $("header").toggleClass("open-menu");
        
    });
    
    $("#menu-mobile-mask, .btn-close").on("click", function(){
        
        $("header").removeClass("open-menu");
        
    });
    
    $("#btn-close-2, #footer").on("click", function(){
        
        $(".collapse").collapse("hide");
        
    });
    
    $("#collapse1").on("hide.bs.collapse", function(){
        $("#btn-menu-2").html('<i class="fa fa-bars"></i> Menu <i class="fa fa-angle-double-down" aria-hidden="true"></i>');
    });
    $("#collapse1").on("show.bs.collapse", function(){
        $("#btn-menu-2").html('<i class="fa fa-bars"></i> Menu <i class="fa fa-angle-double-up" aria-hidden="true"></i>');
    });
    
    $("#btn-search").on("click", function(){
        
        $("header").toggleClass("open-search");
        $("header").removeClass("open-menu");
        $("#input-search-mobile").focus();
        
    });
    
    $("#btn-bars").on("click", function(){
        
        $("header").removeClass("open-search");
        
    });
    
});

