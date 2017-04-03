$(document).ready( function(){
    
    $("#input-search").on("focus", function(){
        $("li.search").addClass("ativo");
    }).on("blur", function(){
       $("li.search").removeClass("ativo"); 
    });
    
    $(".thumbnails").owlCarousel({
 
      //autoPlay: 3000,
      items : 4
 
    });
    
    var owl = $(".thumbnails").data('owlCarousel');

    $('#btn-publicacoes-prev').on("click", function(){

            owl.prev();

    });

    $('#btn-publicacoes-next').on("click", function(){

            owl.next();

    });
    
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

});

