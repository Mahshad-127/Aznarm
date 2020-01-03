<!DOCTYPE html>
<html lang="rtl"  >
    <head>
      <title><?php bloginfo('title'); ?></title>
            <meta charset="<?php bloginfo('charset'); ?>">
             <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mega-menu.css">
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
            <script src="https://kit.fontawesome.com/d281436bc2.js" crossorigin="anonymous"></script>
            <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css"> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mega-menu.css">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/mega-menu.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
         <?php wp_head();?>
</head>




<header> 
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 40px; margin: 20px;  ">
    
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="align-items: center;">
        <ul class="navbar-nav mr-auto" style="list-style-type:none;">
          <li class="nav-item active">
          
          <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin: 20px;" style="text-decoration: none;" >   
              <i class="fa fa-lock"></i>
              
              ورود/ثبت نام
            
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="#" >Action</a> -->
              <a class="dropdown-item" href="#"  >ورود</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"  >ثبت نام</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="margin: 20px;" >
              <i class="fa fa-shopping-cart"></i>
              سبدخرید</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"style="margin-right: 700px;"  >
          <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="Search" >
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: rgb(29, 29, 121); color: white ;" >جستجو</button>
        </form>
      </div>
    </nav>
    
 <div class="navbar navbar-default navbar-static-top"  style="background-color: rgb(29, 29, 121);">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
                <!-- <a class="navbar-brand" href="#"><img alt="Logo" src="https://www.solodev.com/assets/side-nav/logo.png"></a>  -->
             </div> 
            <div class="navbar-collapse collapse">

          

               <ul class="nav navbar-nav">
                  <li><a href="http://localhost/wordpress/#">خانه</a></li>
                  <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">لپ تاپ <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">برند</li>
                        <li><a href="#">دل</a></li>
                        <li><a href="#">اپل</a></li>
                        <li><a href="#">ایسوس</a></li>
                       
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">لوازم جانبی لپ تاپ</li>
                        <li><a href="#">موس</a></li>
                        <li><a href="#">اسپیکر</a></li>
                        <li><a href="#">مودم</a></li>
                        <!-- <li><a href="#">Ruby</a></li>
                        <li><a href="#">ColdFusion</a></li>
                        <li><a href="#">ASP.NET</a></li>
                        <li><a href="#">GO</a></li>
                        <li><a href="#">Perl</a></li>
                        <li><a href="#">Lasso</a></li> -->
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">مناسب برای</li>
                        <li><a href="#">کاربر عمومی</a></li>
                        <li><a href="#">کاربر صنعتی</a></li>
                        <li><a href="#">کاربر مالتی مدیا</a></li>
                      
                     </ul>
                     </li>
                   
                  </ul>
               </li>
                  <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">کنسول بازی  <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">بازی</li>
                        <li><a href="#">ایکس باکس</a></li>
                        <li><a href="#">پلی استیشن</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">کنسول بازی خانگی</li>
                        <li><a href="#">ایکس باکس</a></li>
                        <li><a href="#">پلی استیشن</a></li>
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                        <ul>
                           <li class="dropdown-header">تجهیزات بازی</li>
                           <li><a href="#">بازی حرکتی</a></li>
                           <li><a href="#">واقعیت مجازی</a></li>
                          
                        </ul>
                     </li>
                  </ul>
               </li>
                  <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">موبایل <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                      <li class="dropdown-header">برند</li>
                        <li><a href="#">دل</a></li>
                        <li><a href="#">اپل</a></li>
                        <li><a href="#">ایسوس</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">از نظر سیمکارت</li>
                        <li><a href="#">تک سیمکارت</a></li>
                        <li><a href="#">دو سیمکارت</a></li>
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                        <ul>
                           <li class="dropdown-header">براساس سیستم عامل</li>
                           <li><a href="#">اندروید</a></li>
                           <li><a href="#">ویندوز</a></li>
                           
                        </ul>
                     </li>
                  </ul>
               </li>
                 <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">تبلت <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                      <li class="dropdown-header">برند</li>
                        <li><a href="#">دل</a></li>
                        <li><a href="#">اپل</a></li>
                        <li><a href="#">ایسوس</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                      <li class="dropdown-header">براساس سیستم عامل</li>
                           <li><a href="#">اندروید</a></li>
                           <li><a href="#">ویندوز</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-4">
                        <ul>
                           <li class="dropdown-header">لوازم جانبی</li>
                           <li><a href="#">هدفون</a></li>
                           <li><a href="#">هندزفری</a></li>
                         
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوازم صوتی وتصویری  <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">تلویزیون</li>
                        <li><a href="#">سونی</a></li>
                        <li><a href="#">سامسونگ</a></li>
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">سینمای خانگی</li>
                        <li><a href="#">تسکو</a></li>
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                        <ul>
                           <li class="dropdown-header">لوازم جانبی</li>
                           <li><a href="#">ضبط کننده صدا</a></li>
                           <li><a href="#">باتری</a></li>
                         
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">کامپیوتر ولوازم اداری  <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     
                                
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">پرینتر</li>
                        <li><a href="#">کانن</a></li>
                           <li><a href="#">اچ پی</a></li>
                         
                       
                     </ul>
                     </li>
                     <li class="col-sm-4">
                      <ul>
                        <li class="dropdown-header">ارتباطات و شبکه</li>
                        <li><a href="#">هاب </a></li>
                           <li><a href="#">مودم</a></li>
                         
                     </ul>
                     </li>
                     <li class="col-sm-4">
                        <ul>
                           <li class="dropdown-header">لوازم جانبی</li>
                           <li><a href="#">ضبط کننده صدا</a></li>
                           <li><a href="#">باتری</a></li>
                         
                        </ul>
                     </li>
                  </ul>
               </li>
                 <!-- <li class="col-sm-2">
                    <ul>
                       <li class="dropdown-header">Project Management</li>
                       <li><a href="#">Initiating</a></li>
                       <li><a href="#">Planning</a></li>
                       <li><a href="#">Executing</a></li>
                       <li><a href="#">Monitoring</a></li>
                       <li><a href="#">Controlling</a></li>
                       <li><a href="#">Closing</a></li>
                       <li><a href="#">PM Systems</a></li>
                       <li><a href="#">Best Practices</a></li>
                       <li><a href="#">Project Manager</a></li>
                    </ul>
                 </li> -->
              </ul>
           </li>
               </ul>
            </div>
         </div>
      </div>  
    
    </header>