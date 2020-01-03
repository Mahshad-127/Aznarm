<?php/*
Template Name: Archives
*/?>
<?php get_header(); ?>
<body >



<main>
<div class="container-fluid">
 <div class="row">
   <div class="col-md-9">
   

<div id="container">
	<div id="content" role="main">
 
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
 
	</div><!-- #content -->
</div><!-- #container -->
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



<?php get_sidebar(); ?>
<?php get_footer(); ?>