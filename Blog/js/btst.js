$('.about').hide();
$('.blog').hide();
$('.contact').hide();
$('.projects').hide();

$('#home').click(function(){
      $('.home').show();
      $('.about').hide();
      $('.blog').hide();
      $('.contact').hide()
      $('.projects').hide()
 });

 $('#about').click(function(){
       $('.home').hide();
       $('.about').show();
       $('.blog').hide();
       $('.contact').hide()
       $('.projects').hide()
  });

  $('#blog').click(function(){
        $('.home').hide();
        $('.about').hide();
        $('.blog').show();
        $('.contact').hide()
        $('.projects').hide()
   });

   $('#contact').click(function(){
         $('.home').hide();
         $('.about').hide();
         $('.blog').hide();
         $('.contact').show()
         $('.projects').hide()
    });

    $('#projects').click(function(){
          $('.home').hide();
          $('.about').hide();
          $('.blog').hide();
          $('.contact').hide()
          $('.projects').show()
     });
