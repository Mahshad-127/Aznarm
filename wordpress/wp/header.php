<!DOCTYPE html>
<html>
    <head>
      <title>subject</title>
            <meta charset="utf-8">
             <link rel="stylesheet" href="style.css">
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
            <script src="https://kit.fontawesome.com/d281436bc2.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mega-menu.css">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/mega-menu.js"></script>
        <script src="js/main.js"></script>
       
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
         <div class="searchform">
        <form id="formsearch" name="formsearch" method="get" action="<?php echo site_url(); ?>">
          <input src="<?php echo get_template_directory_uri();?>/images/search_btn.gif" class="button_search" type="image" />
          <span>
          <input name="s" class="editbox_search" id="editbox_search" maxlength="80" value="جستجو" type="text" />
          </span>
        </form>
      </div>
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
                  <li><a href="#">خانه</a></li>
                  <li class="dropdown menu-large">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">کنسول بازی <b class="caret"></b> </a>
                     <ul class="dropdown-menu megamenu row">
                        <li>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                           <div class="col-sm-6 col-md-3">
                              <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x120" />
                              </a>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown menu-large">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوازم صوتی تصویری <b class="caret"></b></a>          
                     <ul class="dropdown-menu megamenu row">
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Software</li>
                              <li><a href="#">Desktop</a></li>
                              <li class="disabled"><a href="#">Mobile</a></li>
                              <li><a href="#">Tablet</a></li>
                              <li class="divider"></li>
                              <li class="dropdown-header">Hardware</li>
                              <li><a href="#">Arduino</a></li>
                              <li><a href="#">Raspberry PI</a></li>
                              <li><a href="#">VoCore</a></li>
                              <li><a href="#">Banana PI</a></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Nano-Tech</li>
                              <li><a href="#">AFM</a></li>
                              <li><a href="#">STM</a></li>
                              <li><a href="#">Nano-Tubes</a></li>
                              <li><a href="#">Nano-Wires</a></li>
                              <li><a href="#">Materials</a></li>
                              <li class="divider"></li>
                              <li class="dropdown-header">A.I.</li>
                              <li><a href="#">Artificial Intelligence</a></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">SaaS</li>
                              <li><a href="#">On-Demand</a></li>
                              <li><a href="#">No Software</a></li>
                              <li><a href="#">Cloud Computing</a></li>
                              <li class="divider"></li>
                              <li class="dropdown-header">On-Premise</li>
                              <li><a href="#">Data Center</a></li>
                              <li><a href="#">Hosting Environment</a></li>
                              <li><a href="#">Internal IT</a></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Server-Side</li>
                              <li><a href="#">PHP</a></li>
                              <li><a href="#">Java</a></li>
                              <li><a href="#">Python</a></li>
                              <li><a href="#">Ruby</a></li>
                              <li><a href="#">ColdFusion</a></li>
                              <li><a href="#">ASP.NET</a></li>
                              <li><a href="#">GO</a></li>
                              <li><a href="#">Perl</a></li>
                              <li><a href="#">Lasso</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown menu-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوازم صوتی تصویری <b class="caret"></b></a>          
                    <ul class="dropdown-menu megamenu row">
                       <li class="col-sm-3">
                        <ul>
                          <li class="dropdown-header">Server-Side</li>
                          <li><a href="#">PHP</a></li>
                          <li><a href="#">Java</a></li>
                          <li><a href="#">Python</a></li>
                          <li><a href="#">Ruby</a></li>
                          <li><a href="#">ColdFusion</a></li>
                          <li><a href="#">ASP.NET</a></li>
                          <li><a href="#">GO</a></li>
                          <li><a href="#">Perl</a></li>
                          <li><a href="#">Lasso</a></li>
                       </ul>
                       </li>
                       <li class="col-sm-3">
                        <ul>
                          <li class="dropdown-header">Server-Side</li>
                          <li><a href="#">PHP</a></li>
                          <li><a href="#">Java</a></li>
                          <li><a href="#">Python</a></li>
                          <li><a href="#">Ruby</a></li>
                          <li><a href="#">ColdFusion</a></li>
                          <li><a href="#">ASP.NET</a></li>
                          <li><a href="#">GO</a></li>
                          <li><a href="#">Perl</a></li>
                          <li><a href="#">Lasso</a></li>
                       </ul>
                       </li>
                       <li class="col-sm-3">
                        <ul>
                          <li class="dropdown-header">Server-Side</li>
                          <li><a href="#">PHP</a></li>
                          <li><a href="#">Java</a></li>
                          <li><a href="#">Python</a></li>
                          <li><a href="#">Ruby</a></li>
                          <li><a href="#">ColdFusion</a></li>
                          <li><a href="#">ASP.NET</a></li>
                          <li><a href="#">GO</a></li>
                          <li><a href="#">Perl</a></li>
                          <li><a href="#">Lasso</a></li>
                       </ul>
                       </li>
                       <li class="col-sm-3">
                          <ul>
                             <li class="dropdown-header">Server-Side</li>
                             <li><a href="#">PHP</a></li>
                             <li><a href="#">Java</a></li>
                             <li><a href="#">Python</a></li>
                             <li><a href="#">Ruby</a></li>
                             <li><a href="#">ColdFusion</a></li>
                             <li><a href="#">ASP.NET</a></li>
                             <li><a href="#">GO</a></li>
                             <li><a href="#">Perl</a></li>
                             <li><a href="#">Lasso</a></li>
                          </ul>
                       </li>
                    </ul>
                 </li>
                 <li class="dropdown menu-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوازم صوتی تصویری <b class="caret"></b></a>          
                  <ul class="dropdown-menu megamenu row">
                     <li class="col-sm-3">
                      <ul>
                        <li class="dropdown-header">Server-Side</li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">Ruby</a></li>
                        <li><a href="#">ColdFusion</a></li>
                        <li><a href="#">ASP.NET</a></li>
                        <li><a href="#">GO</a></li>
                        <li><a href="#">Perl</a></li>
                        <li><a href="#">Lasso</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-3">
                      <ul>
                        <li class="dropdown-header">Server-Side</li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">Ruby</a></li>
                        <li><a href="#">ColdFusion</a></li>
                        <li><a href="#">ASP.NET</a></li>
                        <li><a href="#">GO</a></li>
                        <li><a href="#">Perl</a></li>
                        <li><a href="#">Lasso</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-3">
                      <ul>
                        <li class="dropdown-header">Server-Side</li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">Ruby</a></li>
                        <li><a href="#">ColdFusion</a></li>
                        <li><a href="#">ASP.NET</a></li>
                        <li><a href="#">GO</a></li>
                        <li><a href="#">Perl</a></li>
                        <li><a href="#">Lasso</a></li>
                     </ul>
                     </li>
                     <li class="col-sm-3">
                        <ul>
                           <li class="dropdown-header">Server-Side</li>
                           <li><a href="#">PHP</a></li>
                           <li><a href="#">Java</a></li>
                           <li><a href="#">Python</a></li>
                           <li><a href="#">Ruby</a></li>
                           <li><a href="#">ColdFusion</a></li>
                           <li><a href="#">ASP.NET</a></li>
                           <li><a href="#">GO</a></li>
                           <li><a href="#">Perl</a></li>
                           <li><a href="#">Lasso</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown menu-large">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوازم صوتی تصویری <b class="caret"></b></a>          
                <ul class="dropdown-menu megamenu row">
                   <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Server-Side</li>
                      <li><a href="#">PHP</a></li>
                      <li><a href="#">Java</a></li>
                      <li><a href="#">Python</a></li>
                      <li><a href="#">Ruby</a></li>
                      <li><a href="#">ColdFusion</a></li>
                      <li><a href="#">ASP.NET</a></li>
                      <li><a href="#">GO</a></li>
                      <li><a href="#">Perl</a></li>
                      <li><a href="#">Lasso</a></li>
                   </ul>
                   </li>
                   <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Server-Side</li>
                      <li><a href="#">PHP</a></li>
                      <li><a href="#">Java</a></li>
                      <li><a href="#">Python</a></li>
                      <li><a href="#">Ruby</a></li>
                      <li><a href="#">ColdFusion</a></li>
                      <li><a href="#">ASP.NET</a></li>
                      <li><a href="#">GO</a></li>
                      <li><a href="#">Perl</a></li>
                      <li><a href="#">Lasso</a></li>
                   </ul>
                   </li>
                   <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Server-Side</li>
                      <li><a href="#">PHP</a></li>
                      <li><a href="#">Java</a></li>
                      <li><a href="#">Python</a></li>
                      <li><a href="#">Ruby</a></li>
                      <li><a href="#">ColdFusion</a></li>
                      <li><a href="#">ASP.NET</a></li>
                      <li><a href="#">GO</a></li>
                      <li><a href="#">Perl</a></li>
                      <li><a href="#">Lasso</a></li>
                   </ul>
                   </li>
                   <li class="col-sm-3">
                      <ul>
                         <li class="dropdown-header">Server-Side</li>
                         <li><a href="#">PHP</a></li>
                         <li><a href="#">Java</a></li>
                         <li><a href="#">Python</a></li>
                         <li><a href="#">Ruby</a></li>
                         <li><a href="#">ColdFusion</a></li>
                         <li><a href="#">ASP.NET</a></li>
                         <li><a href="#">GO</a></li>
                         <li><a href="#">Perl</a></li>
                         <li><a href="#">Lasso</a></li>
                      </ul>
                   </li>
                </ul>
             </li>
             <li class="dropdown menu-large">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">لپ تاپ <b class="caret"></b></a>          
              <ul class="dropdown-menu megamenu row">
                 <li class="col-sm-3">
                    <ul>
                       <li class="dropdown-header">Web Design</li>
                       <li><a href="#">HTML5</a></li>
                       <li class="disabled"><a href="#">CSS</a></li>
                       <li><a href="#">JavaScript</a></li>
                       <li class="divider"></li>
                       <li class="dropdown-header">Web Development</li>
                       <li><a href="#">Websites</a></li>
                       <li><a href="#">Mobile Apps</a></li>
                       <li><a href="#">Responsive</a></li>
                       <li><a href="#">Web Apps</a></li>
                    </ul>
                 </li>
                 <li class="col-sm-2">
                    <ul>
                       <li class="dropdown-header">Graphic Design</li>
                       <li><a href="#">PSD</a></li>
                       <li><a href="#">Images</a></li>
                       <li><a href="#">Logos</a></li>
                       <li><a href="#"></a></li>
                       <li><a href="#">Vertical variation</a></li>
                       <li class="divider"></li>
                       <li class="dropdown-header">Database Design</li>
                       <li><a href="#">Single button dropdowns</a></li>
                    </ul>
                 </li>
                 <li class="col-sm-2">
                    <ul>
                       <li class="dropdown-header">UI/UX Design</li>
                       <li><a href="#">User Interface</a></li>
                       <li><a href="#">User Experience</a></li>
                       <li><a href="#">Web Designers</a></li>
                       <li class="divider"></li>
                       <li class="dropdown-header">Digital Marketing</li>
                       <li><a href="#">Paid</a></li>
                       <li><a href="#">Social</a></li>
                       <li><a href="#">Content Marketing</a></li>
                    </ul>
                 </li>
                 <li class="col-sm-2">
                   <ul>
                      <li class="dropdown-header">UI/UX Design</li>
                      <li><a href="#">User Interface</a></li>
                      <li><a href="#">User Experience</a></li>
                      <li><a href="#">Web Designers</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Digital Marketing</li>
                      <li><a href="#">Paid</a></li>
                      <li><a href="#">Social</a></li>
                      <li><a href="#">Content Marketing</a></li>
                   </ul>
                </li>
                <li class="col-sm-2">
                 <ul>
                    <li class="dropdown-header">UI/UX Design</li>
                    <li><a href="#">User Interface</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Web Designers</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Digital Marketing</li>
                    <li><a href="#">Paid</a></li>
                    <li><a href="#">Social</a></li>
                    <li><a href="#">Content Marketing</a></li>
                 </ul>
              </li>
              <li class="col-sm-2">
               <ul>
                  <li class="dropdown-header">UI/UX Design</li>
                  <li><a href="#">User Interface</a></li>
                  <li><a href="#">User Experience</a></li>
                  <li><a href="#">Web Designers</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Digital Marketing</li>
                  <li><a href="#">Paid</a></li>
                  <li><a href="#">Social</a></li>
                  <li><a href="#">Content Marketing</a></li>
               </ul>
            </li>
                 <li class="col-sm-2">
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
                 </li>
              </ul>
           </li>
               </ul>
            </div>
         </div>
         <?php
wp_nav_menu( array(
'menu' => 'primary',
'theme_location' => 'primary',
'depth' => 2,
'container' => 'div',
'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
'menu_class' => 'nav navbar-nav',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
'walker' => new wp_bootstrap_navwalker())
);
?>
      </div>  
      
    </header>
