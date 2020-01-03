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
    
        <div    class="divb"    >
         <div style="   width: 100%; height: 40px; background-color: rgb(29, 29, 121);text-align: right; font-size: 20px; color: white; ">   محصولات جدید  </div>
        
        <section id="slideshow">
          <div class="entire-content">
            <div class="content-carrousel">
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/38419_0_0.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/as7.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/111.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/222.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/aa.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/22.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/as.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/as5.jpg"/></figure>
              <figure class="shadow"><img src="<?php bloginfo('template_directory'); ?>/img/as6.jpg"/></figure>
        </div>
      </div>
    </section>
  </div>  
  <div    class="divb1"    >
    <div style="   width: 100%; height: 40px; background-color: rgb(29, 29, 121);text-align: right; font-size: 20px; color: white; ">   محصولات جدید  </div>
  
    <!-- <article class="article">
      <img src="img/1.png" >
      <h2>عنوان</h2>
      <P>fgggfbgbgtb</P>
      <div class="more" ><a  href="#"  ></a></div>
    </article> -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
                <div class="card" style="   margin-bottom: 10px;  margin-right: 22px; float: right; width: 25rem;">
                      <!-- <img class="card-img-top" src='' alt="Card image" style="width:100%"> -->
                 <?php the_post_thumbnail();?>
                      <div class="card-body">
                        <h4 class="card-title"><?php the_title();?></h4>
                        <p class="card-text"> <?php the_content_rss('', true,
                      '', 20); ?> </p>
                        <a href="<?php the_permalink();?>" class="btn btn-primary stretched-link">بیشتر</a>
                     </div>
                    </div>
              
                <?php  endwhile; endif; ?>
   
   
  </div>  
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
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('websoft-widget') ) : ?>
<?php  endif; ?>

</div>

        
  
  </div>
 
</div>
</div>
 </main>
 
 
 
 <?php get_footer(); ?>
     
 
 
 
 
 
 
 
 
 
 
 