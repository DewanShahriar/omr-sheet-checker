<?php
$parent_services = $this->db->select('id, service_name, url')->where('parent_id', 0)->order_by('priority', 'DESC')->get('tbl_services')->result();
$expertises = $this->db->select('id, title')->order_by('priority', 'DESC')->get('tbl_expertise')->result();
$solution = $this->db->select('id, title')->order_by('priority', 'DESC')->get('tbl_solutions_for_business')->result();
$shortcut_info = array();
$temo_shortcut_info    = $this->db->get('tbl_shortcut')->result(); 

foreach($temo_shortcut_info as $key => $value) {
    
    $shortcut_info[$value->name] = $value;
    
}

$page_info = array();
$temo_page_info    = $this->db->get('tbl_common_pages')->result(); 

foreach($temo_page_info as $key => $value) {
    
    $page_info[$value->name] = $value;
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Hi-soft - IT Solutions and Services Company HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (isset($share_title))? $share_title : 'HRSOFTBD - IT Solutions and Services Company' ;?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>front_end_assets/images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/animate/animate.min.css"/>
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="<?= base_url();?>front_end_assets/css/style.css" />
    <style>
      
    </style>

  </head>
  <body>

    <!-- <div class="preloader">
      <div class="loader">
          <img src="<?= base_url()?>front_end_assets/images/hrsoftbd_logo.png" alt="">
          <p>HRSOFTBD</p>
      </div>
    </div> -->

    <section class="top_header">
      <div class="row">
        <div class="col-lg-12">
          <div class="top_info_txt">
            <div class="">
              HR soft BD is available during COVID-19. Taking into account the involving situation regarding the COVID-19 pandemic, we want to assure that HR soft BD continues to deliver dedicated support and development service.
            </div>
            <div class="close_top"><i class="fas fa-times"></i></div>
          </div>
          
        </div>
      </div>
    </section>

    <!--=================================
    header -->
    <header class="header default">
      <div class="topbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-4 d-inline-block py-1">
                  <a href="#">
                  <i class="far fa-envelope mr-2 fa-flip-horizontal text-primary envelop_animate"></i>
                  <?php echo $shortcut_info['email']->value;?></a>
                </div>
                <div class="mr-auto d-inline-block py-1">
                  <a href=""><i class="fas fa-phone-volume text-primary mr-2 phone_animate"></i><span id='typed31'><?php echo $shortcut_info['phone']->value;?></span></</a>
                </div>
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    <li><a href="<?= base_url();?>site/client">Clients</a></li>
                    <li><a href="<?= base_url();?>site/portfolio">Portfolio</a></li>
                    <li><a href="faq.html">SMS</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="<?= base_url();?>">
            <img class="img-fluid" src="<?= base_url()?>front_end_assets/images/hrsoftbd_logo.png" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item <?php if($activeMenu === 'home') echo 'active';?>">
                <a class="nav-link nav_link" href="<?php echo base_url();?>">Home</a>
              </li>
              <li class="dropdown nav-item <?php if($activeMenu === 'company') echo 'active';?>">
                <a href="#" class="nav-link" data-toggle="dropdown">Company</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url();?>site/about">About Us<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url();?>site/career">Career<i class="fas fa-arrow-right"></i></a></li>
                  
                  <li><a class="dropdown-item" href="<?= base_url();?>site/work">How to Work<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url();?>site/team">Our Team<i class="fas fa-arrow-right"></i></a></li>
                  
                  <li><a class="dropdown-item" href="<?= base_url();?>site/mission">Mission and Vision<i class="fas fa-arrow-right"></i></a></li>
                  
                  <li><a class="dropdown-item" href="<?= base_url();?>site/value">Our Values<i class="fas fa-arrow-right"></i></a></li>
                  
                  <li><a class="dropdown-item" href="<?= base_url();?>site/technologies">Techonologies<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url();?>site/story">Success Stories<i class="fas fa-arrow-right"></i></a></li>
                </ul>
              </li>
              <li class="dropdown nav-item <?php if($activeMenu === 'service') echo 'active';?>">
                <a href="#" class="nav-link" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                  <?php foreach ($parent_services as $key => $value) {?>
                    <li><a class="dropdown-item" href="<?= base_url('service/'.$value->url);?>"><?php echo $value->service_name;?><i class="fas fa-arrow-right"></i></a></li>
                  <?php }?>
                  <!-- <li><a class="dropdown-item" href="<?= base_url();?>site/website-design-development">Website Design and Development<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url()?>site/software-design-development">Software Design and Development<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url()?>site/app">App Design and Development</a></li>
                  <li><a class="dropdown-item" href="<?= base_url()?>site/marketing">Digital Marketing<i class="fas fa-arrow-right"></i></a></li>
                  <li><a class="dropdown-item" href="<?= base_url()?>site/domain-hosting">Domain and Hosting<i class="fas fa-arrow-right"></i></a></li> -->
                </ul>
              </li>
              <li class="dropdown nav-item <?php if($activeMenu === 'solution') echo 'active';?>">
                <a href="#" class="nav-link" data-toggle="dropdown">Solutions</a>

                <ul class="dropdown-menu">
                  <?php foreach ($solution as $key => $value) {?>
                    <li><a class="dropdown-item" href="<?= base_url('site/solution/').$value->id;?>"><?= $value->title?><i class="fas fa-arrow-right"></i></a></li>
                  <?php }?>
                  
                </ul>
              </li>
              <li class="dropdown nav-item <?php if($activeMenu === 'expertise') echo 'active';?>">
                <a href="#" class="nav-link" data-toggle="dropdown">Expetise</a>
                <ul class="dropdown-menu">
                  <?php foreach ($expertises as $key => $value) {?>
                    <li><a class="dropdown-item" href="<?= base_url('site/expertise/').$value->id;?>"><?= $value->title?><i class="fas fa-arrow-right"></i></a></li>
                  <?php }?>
                  
                </ul>
              </li>
              <li class="nav-item <?php if($activeMenu === 'blog') echo 'active';?>">
                <a href="<?= base_url();?>site/blog" class="nav-link nav_link">Blog</a>
              </li>
              
              <li class="nav-item <?php if($activeMenu === 'contact') echo 'active';?>">
                <a href="<?= base_url();?>site/contact" class="nav-link nav_link">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
            <ul class="nav ml-1 ml-lg-2 align-self-center">
              
              <li class="header-search nav-item">
                <div class="search">
                  <a class="search-btn not_click" href="javascript:void(0);"></a>
                  <div class="search-box not-click">
                    <form action="https://themes.potenzaglobalsolutions.com/html/hi-soft/search.html" method="get">
                      <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                      <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
    header -->

    <!-- content part start -->
    <?php $this->load->view($content);?>
    <!-- content part end -->
    <!--=================================
    footer-->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-3">
              <a href="<?= base_url();?>"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/hrsoftbd_logo.png" alt="logo"></a>
            </div>
            <div class="col-sm-9 text-sm-right mt-4 mt-sm-0">
              <ul class="list-unstyled mb-0 social-icon">
                <li><a href="https://www.facebook.com/hrsoftbd/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/hrsoftbd" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/hrsoftbd" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCpH3ce1MV-Hg3pOriZIyD_A" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/hrsoft.bd/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCpH3ce1MV-Hg3pOriZIyD_A" target="_blank"><i class="fab fa-github"></i></a></li>
              </ul>
            </div>
          </div>
          <hr class="my-4 my-sm-5 pb-0">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Data Synchronization</a></li>
                <li><a href="#">Content Management</a></li>
                <li><a href="#">Content Delivery</a></li>
                <li><a href="#">Transaction Processing</a></li>
                <li><a href="#">Process Automation</a></li>
              </ul>
              <ul class="list-unstyled mb-0">
                <li><a href="#">Event Processing</a></li>
                <li><a href="#">Information Security</a></li>
                <li><a href="#">Mobile Platforms</a></li>
                <li><a href="#">Communications</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
            <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="<?= base_url();?>site/about">About</a></li>
                <li><a href="<?= base_url();?>site/team">Our Team</a></li>
                <li><a href="#">IT Blog</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="<?= base_url();?>site/career">Careers <span class="badge badge-success ml-2">We're hiring</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
            <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Forum Support</a></li>
                <li><a href="<?= base_url();?>site/faq">Help & FAQs</a></li>
                <li><a href="<?= base_url();?>site/contact">Contact Us</a></li>
                <li><a href="#">Pricing And Plans</a></li>
                <li><a href="<?= base_url();?>site/term-conditions">Terms and Condition</a></li>
                <li><a href="<?= base_url();?>site/privacy-policy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="footer-contact-info">
              <h5 class="text-primary mb-3">Contact With Us</h5>
              <div class="contact-address">
                <div class="contact-item">
                  <label>Corporate Office:</label>
                  <p>48, KaziNazrul Islam Avenue, Karwan Bazar, Dhaka-1215, Bangladesh.</p>
                </div>
                <div class="contact-item">
                  <label>Support Center:</label>
                  <p>12/6, Solimullah Road, Mohammadpur, Dhaka 1207, Bangladesh.</p>
                </div>
                <div class="contact-item">
                  <label>Become a client:</label>
                  <p>+8801722158130</p>
                  <p>+8801709372481</p>
                </div>
                <div class="contact-item">
                  <label>Work with us:</label>
                  <p>info@hrsoftbd.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-sm-5 py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <p class="mb-0">©Copyright 2021 <a href="hrsoftbd.com">hrsoftbd</a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--================================= Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="<?= base_url();?>front_end_assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/popper/popper.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?= base_url();?>front_end_assets/js/jquery.appear.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/swiper/swiper.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/swiperanimation/SwiperAnimation.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/counter/jquery.countTo.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>


    <script src="<?= base_url();?>front_end_assets/js/jarallax/jarallax.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/jarallax/jarallax-video.min.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/horizontal-timeline/horizontal-timeline.js"></script>
    <script src="<?= base_url();?>front_end_assets/js/shuffle/shuffle.min.js"></script>

    <script src="<?= base_url();?>front_end_assets/js/typed.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="<?= base_url();?>front_end_assets/js/custom.js"></script>

    <!-- <script>
      $(window).on('load', function() { // makes sure the whole site is loaded 
        $('.loader').css("opacity", "1").css("transition", "all linear 3s");
        $('.preloader').delay(3500).fadeOut('1'); // will fade out the white DIV that covers the website. 
      })
    </script> -->

    <script>
      $( ".close_top" ).click(function() {
        $( ".top_header" ).slideUp( 1200);
      });

      // type js 
      var typed4 = new Typed('#typed3', {
          strings: ['+8801722158130, +8801709372481'],
          typeSpeed: 100,
          backSpeed: 0,
          cursorChar: '',
          bindInputFocusEvents: true,
          loop: false
      });
    </script>

  </body>
</html>
