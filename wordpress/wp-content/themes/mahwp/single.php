<?php get_header(); ?>  

  
<body >



<main>
  <div class="container-fluid"  >  
  <div class="row">
     <div class="col-md-4" style=" height: 550px;    ">
      <div class="hovereffect">
       <a href=""> <img class="zoom"   src="<?php bloginfo('template_directory'); ?>/img/honor-8x-wants.jpg" alt="Italian Trulli" style="width: 520px;; height: 560px;  margin-left: 0%;padding: 10px; ">
       </a>
       <div class="overlay">
        <!-- <h2>Hover effect 4</h2>
        <a class="info" href="#">link here</a> -->
     </div>
      </div>
     </div>
     <div class="col-md-8"  >
     <div class="col-md-6"  >
      <div class="hovereffect">
            <a href=""> <img   class="zoom"   class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/33.jpg" alt="Italian Trulli" style="width:500px; height: 300px;  padding: 10px; ">
           </a> 
           <div class="overlay">
            <!-- <h2>Hover effect 4</h2>
            <a class="info" href="#">link here</a> -->
         </div>
          </div>
          </div>
     <div class="col-md-6"  >
      <div class="hovereffect">
        <a href=""> <img class="zoom"  class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/saat.jpg" alt="Italian Trulli" style="width:500px; height: 300px;  padding: 10px; ">
       </a> 
       <div class="overlay">
        <!-- <h2>Hover effect 4</h2>
        <a class="info" href="#">link here</a> -->
     </div>
      </div>
        </div>
        <div class="col-md-12" >
          <div class="hovereffect">
          <a href=""> <img   class="zoom"  src="<?php bloginfo('template_directory'); ?>/img/ssss.jpg" alt="Italian Trulli" style="width:100%; height: 260px;  padding: 10px; ">
          </a>
          <div class="overlay">
            <!-- <h2>Hover effect 4</h2>
            <a class="info" href="#">link here</a> -->
         </div>
        </div>
    </div>
     </div>
    
  </div>
  </div>










<div class="container-fluid">
 <div class="row">
   <div class="col-md-9">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>            
      <div class="col-md-7">
         <div class="singlew">
            <div class="title_single"><?php the_title();?></div>
            <p><pre><?php the_content();  ?>
            </pre></p>
           </div>
      </div>
 <div class="col-md-5"> <div class="singlep">
 <!--  <img  class="imgs" src="<?php bloginfo('template_directory'); ?>/img/saat.jpg"> -->
  <?php the_post_thumbnail();?>
 </div></div>
  <?php  endwhile; endif; ?>
<?php comments_template(); ?>

 
</div>
     <div class="col-md-3">
   
    
      <ul   class="list-group" style="padding-right: 20px;  " >
         <li class="list-group-item active"  style="background-color: rgb(29, 29, 121);"  >بخش های وب سایت</li>
         <li class="list-group-item" style="text-align:right;"><a  href="google.com" >صفحه اصلی</li>
         <li class="list-group-item"><a  href="google.com" >انجمن های تخصصی</a></li>
         <li class="list-group-item"><a  href="google.com" >مجله نویز</a></li>
         <li class="list-group-item"><a  href="google.com" >فیلم های اموزشی</a></li>
         <li class="list-group-item"><a  href="google.com" >تبلیغات</a></li>
         <li class="list-group-item"><a  href="google.com" >کانال تلگرام</a></li>
       </ul>
       <ul   class="list-group" style="padding-right: 20px;  " >
         <li class="list-group-item active"  style="background-color: rgb(29, 29, 121);"  > شاخه ها</li>
         <li class="list-group-item"><a  href="google.com" >پرفروش ترین ها</a> </li>
         <li class="list-group-item">  <a  href="google.com" >پربازدیدترین ها</a></li>
         <li class="list-group-item"><a  href="google.com" >گوشی موبایل</a> </li>
         <li class="list-group-item"><a  href="google.com" >پاوربانک</a> </li>
         <li class="list-group-item"><a  href="google.com" >محصولات جدید</a> </li>
       </ul>
       <ul   class="list-group" style="padding-right: 20px;  " >
         <li class="list-group-item active"  style="background-color: rgb(29, 29, 121);"  > تماس باما</li>
         <li class="list-group-item">:شماره های تماس</li>
         <li class="list-group-item">  دفترمرکزی:4254544524</li>
         <li class="list-group-item">02166766245:فکس </li>
         <li class="list-group-item">  ساعات پاسخگویی  </li>
         <li class="list-group-item">شنبه - چهارشنبه ۸:۳۰ - ۲۱
           پنجشنبه ۹ - ۲۰</a> </li>
       </ul>
   

    
<div class="sidebar">
<!-- <aside class="widget2">
<div class="title_side"><h4>عنوان ابزارک</h4></div>
<ul >
<li><a   class="aa" href="#" >لفلبیلبلذ</a></li>
<li><a   class="aa" href="#" >لفلبیلبلذ</a></li>
<li><a   class="aa" href="#" >لفلبیلبلذ</a></li>
<li><a   class="aa" href="#" >لفلبیلبلذ</a></li>
<li><a   class="aa" href="#" >لفلبیلبلذ</a></li>
</ul>
</aside> -->
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('websoft-widget') ) : ?>
<?php  endif; ?>



</div>




        
  
  </div>
</div>
</div>
 </main>
 
 
 
 <?php get_footer(); ?>
     
 
 
 
 
 
 
 
 
 
 
 