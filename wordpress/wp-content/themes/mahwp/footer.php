
   <!-- Footer -->
 <footer class="page-footer font-small indigo" style="  color: white;   background-color:rgb(29, 29, 121);" >
 
   <!-- Footer Links -->
   <div class="container text-center text-md-left">
 
     <!-- Grid row -->
     <div class="row">
 
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
 
         <!-- Links -->
         <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">محصولات</h5>
 
         <ul class="list-unstyled">
           <li>
             <a href="#!">Very long link 1</a>
           </li>
           <li>
             <a href="#!">Very long link 2</a>
           </li>
           <li>
             <a href="#!">Very long link 3</a>
           </li>
           <li>
             <a href="#!">Very long link 4</a>
           </li>
         </ul> -->
 
       </div>
       <!-- Grid column -->
 
       <hr class="clearfix w-100 d-md-none">
 
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
 
         <!-- Links -->
         <h5 class="  font-weight-bold text-uppercase mt-3 mb-4">سایمان دیجیتال</h5>
 
         <ul   class="list-unstyled">
           <li   >
             <a href="#!">تماس با ما</a>
           </li>
           <li>
             <a href="#!">درباره ما</a>
           </li>
           <li>
             <a href="#!">بلاگ</a>
           </li>
           <li>
             <a href="#!">فرصت‌های شغلی</a>
           </li>
         </ul>
 
       </div>
       <!-- Grid column -->
 
       <hr class="clearfix w-100 d-md-none">
 
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
 
         <!-- Links -->
         <h5 class="font-weight-bold text-uppercase mt-3 mb-4">محصولات</h5>
 
         <ul class="list-unstyled">
           <li>
             <a href="#!">لوازم جانبی</a>
           </li>
           <li>
             <a href="#!">کیف و کاور گوشی</a>
           </li>
           <li>
             <a href="#!">انواع هندزفری ، هدفون،</a>
           </li>
           <li>
             <a href="#!">انواع پاوربانک</a>
           </li>
         </ul>
 
       </div>
       <!-- Grid column -->
 
       <hr class="clearfix w-100 d-md-none">
 
       <!-- Grid column -->
       <div class="col-md-3 mx-auto">
 
         <!-- Links -->
         <h5 class="font-weight-bold text-uppercase mt-3 mb-4">محصولات</h5>
 
         <ul class="list-unstyled">
           <li>
             <a href="#!">محصولات شیائومی</a>
           </li>
           <li>
             <a href="#!">خرید گوشی شیائومی</a>
           </li>
           <li>
             <a href="#!">خرید گوشی سامسونگ</a>
           </li>
           <li>
             <a href="#!">خرید گوشی های هواوی</a>
           </li>
         </ul>
 
       </div>
       <!-- Grid column -->
 
     </div>
     <!-- Grid row -->
 
   </div>
   <!-- Footer Links -->
 
   <!-- Copyright -->
   <div class="footer-copyright text-center py-3">© 2018 Copyright:
     <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
   </div>
   <!-- Copyright -->
 
 </footer>
 <!-- Footer -->
 
 
 
 
     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
     <script>
       $(document).ready(function() {
   
         $("#css3dimagePager li").click(function(){
        var rotateY = ($(this).index() * -90); 
       $("#css3dimageslider ul").css({"-webkit-transform":"rotateY("+rotateY+"deg)", "-moz-transform":"rotateY("+rotateY+"deg)", "-ms-transform":"rotateY("+rotateY+"deg)", "transform":"rotateY("+rotateY+"deg)"});
           $("#css3dimagePager li").removeClass("active");
           $(this).addClass("active");
         });
   
         $("#css3dtransparency").click(function() {
           $("#css3dimageslider").toggleClass("transparency");
           $(this).toggleClass("active");
         });
   
       });
     </script>
                    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                    <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script> -->
                    <script type="text/javascript">
                        $(document).on('ready', function () {
                            $(".vertical-center-4").slick({
                                dots: true,
                                vertical: true,
                                centerMode: true,
                                slidesToShow: 4,
                                slidesToScroll: 2
                            });
                            $(".vertical-center-3").slick({
                                dots: true,
                                vertical: true,
                                centerMode: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            });
                            
                            $(".vertical-center-2").slick({
                                dots: true,
                                vertical: true,
                                centerMode: true,
                                slidesToShow: 2,
                                slidesToScroll: 2
                            });
                            $(".vertical-center").slick({
                                dots: true,
                                vertical: true,
                                centerMode: true,
                            });
                            $(".vertical").slick({
                                dots: true,
                                vertical: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            });
                            $(".regular").slick({
                                dots: true,
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            });
                            $(".center").slick({
                                dots: true,
                                infinite: true,
                                centerMode: true,
                                slidesToShow: 5,
                                slidesToScroll: 3
                            });
                            $(".variable").slick({
                                dots: true,
                                infinite: true,
                                variableWidth: true
                            });
                            $(".lazy").slick({
                                lazyLoad: 'ondemand', // ondemand progressive anticipated
                                infinite: true
                               });
                               
  
     
 });
                    </script>
<?php wp_footer();?>
 </body>
 </html> 