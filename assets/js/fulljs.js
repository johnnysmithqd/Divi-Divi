      $(document).ready(function() {
       $('#myModalAuto').modal('show');
       
       $(".cart-collaterals").remove();
 //       $("#customer_details").remove();
 //       $("#order_review_heading").remove();
 $(".woocommerce-shipping-fields").remove();
 $("#billing_country_field").remove();
 $(".images").remove();


 $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

 $('a[href*=#]:not([href=#])').click(function() {

  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

    if (target.length) {

      $('html,body').animate({
        scrollTop: target.offset().top-$('#fixedbar').outerHeight()
      }, 1000);

      return false;
    }
  }
});

 $(".toggle-button").click(function(){
  $(".myIframe").toggle();
});
 


 $('.swiper-container').each(function(){
  new Swiper($(this), {
    pagination: $(this).find('.swiper-pagination'),
    paginationClickable: $(this).find('.swiper-pagination'),
    nextButton: $(this).find('.swiper-button-next'),
    prevButton: $(this).find('.swiper-button-prev'),
       //   scrollbar: $(this).find('.swiper-scrollbar'),
       spaceBetween: 10,
       loop: true

     });
});



 $('.main-carousel').owlCarousel({
  autoplay: true,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  animateOut: 'fadeOut'

});
 $('.about-carousel').owlCarousel({
  autoplay: true,
  items: 1,
  nav: true,
  pag: true,
  loop: true,
  navContainer: '#customNav',
  dotsContainer: '#customDots',
  animateOut: 'fadeOut'

});
 $('.acomodacoes-carousel').owlCarousel({
  autoplay: true,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  animateOut: 'fadeOut'
});

 $('.owl-carousel-novidades-1').owlCarousel({
  autoplay: true,
  autoplayTimeout: 2000,
  items: 1,
  nav: false,
  pagination: true,
  loop: true,
  margin:200,
  animateOut: 'fadeOut'
});
 $('.owl-carousel-novidades-2').owlCarousel({
  autoplay: true,
  autoplayTimeout: 2500,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  margin:200,
  animateOut: 'fadeOut'
});
 $('.owl-carousel-novidades-3').owlCarousel({
  autoplay: true,
  autoplayTimeout: 3500,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  margin:200,
  animateOut: 'fadeOut'
});
 $('.owl-carousel-novidades-4').owlCarousel({
  autoplay: true,
  autoplayTimeout: 3000,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  margin:200,
  animateOut: 'fadeOut'
});
 $('#lua-de-mel-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 3000,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
  margin:200,
  animateOut: 'fadeOut'
});
 $(".pacotes-carousel").owlCarousel({
  autoplay: true,
  items: 1,
  nav: false,
  pag: true,
  loop: true,
});



 var owl = $("#pacotes-carousel");

 owl.owlCarousel({
  items: 1 
});

    // Custom Navigation Events
    $(".owl-carousel-arrows .next").click(function() {
      owl.trigger('next.owl.carousel');
    });

    $(".owl-carousel-arrows .prev").click(function() {
      owl.trigger('prev.owl.carousel');
    });




  });

