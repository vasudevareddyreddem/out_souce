<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin30">
                     <center>  <img src="img/f_logo.png" class="m_top_20"></center>
                       <p class="f_color padding_10">Copyright © 2017 Meddocs
                    All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 margin30">
                        <h3>CONTACT US</h3>
                        <ul class="list-unstyled contact">
                                <li><strong><i class="fa fa-map-marker "></i></strong> 
                                <p><strong>MedDocs Publishers LLC</strong><br>Suite 200-A, 
401 Ryland St, 
Reno, NV 89502<br>
United States</p></li>
                                <li> <strong><i class="fa fa-phone "></i> </strong>
                                <p>+1-775-549-0087 
                              </p></li>
                                <li><strong><i class="fa fa-envelope "></i> </strong>  <a href="mailto:support@meddocsonline.org"><p>support@meddocsonline.org</p></a></li>
                                

                              <li>
                              <strong><i class="fa fa-globe  "></i> </strong>
                                <p><a href="index.html">www.meddocsonline.org</a></p>  
                              </li>

                            </ul>
                       
                    </div>
                    <div class="col-md-2 col-sm-6 margin30">
                        <h3>QUICK LINKS</h3>
                        <ul class="list-unstyled">
                             <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="journals.html">Journals</a></li>
                           <li><a href="e-books.html">eBooks</a></li>
                            <li><a href="conference.html">Conferences</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="membership.html">Membership</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                            <li><a href="submit-manuscript.html">Submit Manuscript</a></li>
                           <li><a href="author-guidelines.html">Author Guidelines</a></li>
                           <li><a href="joinas-a-reviewer.html">Join As A Reviewer</a></li>
                            <li><a href="open-access.html">Open Access</a></li>
                           <li><a href="peer-review.html">Peer Review</a></li>
                           <li><a href="plagiarism.html">Plagiarism</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 margin30">
                        <h3>MAIN LINKS</h3>
                        <ul class="list-unstyled">
                            
                            <li><a href="journals.html">Journals</a></li>
                            <li><a href="conference.html">Conferences</a></li>
                            <li><a href="e-books.html">eBooks</a></li>
                            
                        </ul>

                         <h3 class="m_top_20">FOLLOW US</h3>
                        <ul class="list-unstyled">
                            
                            <li><a href="https://www.facebook.com/MedDocsOnline/" target="_blank">Face Book</a></li>
                            <li><a href="https://twitter.com/MedDocsOnline" target="_blank">Twitter</a></li>
                            <li><a href="https://plus.google.com/u/0/104451341523748356714" target="_blank">Google +</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--footer-->
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
       <!--  <div class="copyright">
            <div class="container text-center">
                <span>&copy; Copyright 2015. All right reserved. Assan real estate</span>
            </div>
        </div> -->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
         <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--bootstrap js plugin-->

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
          <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/classie.js" type="text/javascript"></script>
        <script src="js/selectFx.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
         <script src="js/tweetie.min.js" type="text/javascript"></script>
       
        <!--customizable plugin edit according to your needs-->
        <script src="js/real-estate-custom.js" type="text/javascript"></script>
        <script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/banner.js"></script>

        <script type="text/javascript">
           /* $(function(){
      $(".dropdown").hover(            
              function() {
                  $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              },
              function() {
                  $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              });
      });*/

        $(function(){
      $(".drop").hover(            
              function() {
                
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              },
              function() {
                 
                  $(this).toggleClass('open');
                  $('b', this).toggleClass("caret caret-up");                
              });
      });


           
    $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
       $('.navbar-inverse').css('background','#0688de');
     }
    else
     {
      $('.navbar-inverse').css('background','none');
     }
 });
        </script>

           <script type="text/javascript">
           $(document).ready(function() {
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
    autoPlay: 2000,
     loop: true,
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false,
      stopOnHover : true,
      
       dots: false,
       touchDrag: true
   // itemsMobile disabled - inherit from itemsTablet option
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })
 
});
        </script>

        <script type="text/javascript">
            
            $(".box_hover").each(function(){

        $(this).hover(function(){

                $(this).find(".green_icon").css({"display":"none","z-index":"5"});
                $(this).find(".white_icon").css({"display":"block","z-index":"5"});
                $(this).find("h4").css({"color":"#000"});
               
        },
        function(){

                $(this).find(".green_icon").css({"display":"block","z-index":"5"});
                $(this).find(".white_icon").css({"display":"none","z-index":"5"});
                $(this).find("h4").css({"color":"#6496b9"});
                
        });



});
        </script>

         <script type="text/javascript">jssor_1_slider_init();</script>

         <script type="text/javascript">
             
      
$(document).ready(function(){
    function loop(){
        $('.svg_img').animate({'width':'235px'},1000).animate({'width':'230px'},1000);
         loop();

    }
    
     loop();
 
});
         </script>


         <script type="text/javascript">
             // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
         </script>

    </body>

</html>
