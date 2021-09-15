    <!--=================================
    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/05.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Technologies</h1>
              <p class="text-white mb-0">Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="header-inner-nav">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/about">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/career">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/work">How we work</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/team">Our team</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/mission">Mission and vision</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/value">Our values</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url()?>site/technologies">Technologies</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/story">Success Stories</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Header Inner -->

    <!--=================================
    About -->
    <section id="overview" class="space-ptb pb-md-5 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="text-white mb-4 mb-md-5">Making a decision to do something this is the first step. We all know that nothing moves until someone makes a decision.</h3>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-sm-6 mb-3 mb-lg-0">
                <span class="display-3 text-white">81%</span>
                <h6 class="text-white font-weight-normal mb-0">The old expression is absolutely true</h6>
              </div>
              <div class="col-sm-6 mb-4 mb-lg-0">
                <span class="display-3 text-white">45%</span>
                <h6 class="text-white font-weight-normal mb-0">Once you have a clear understanding of what you want,</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <p class="mb-0 text-white">The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    About -->

    <!--=================================
    About -->
    <section class="bg-dark-half-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img class="w-100" src="<?= base_url();?>front_end_assets/images/about/12.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <img class="w-100" src="<?= base_url();?>front_end_assets/images/about/13.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    About -->



    <!--=================================
    Range -->
    <section id="technology" class="space-ptb bg-light-half-md">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>All Technologies</h2>
              <p>Fortune 100 companies and established brands trust our enterprise software development.</p>
            </div>
          </div>
        </div>
        <div class="row">

          <?php foreach($technologies_list as $key=>$value){?>
            <div class="col-md-3">
              <div class="category-box category-box-style-01 category_box">
                <div class="category-icon">
                  <!-- <i class="flaticon-monitor"></i> -->
                  <img src="<?php echo base_url($value->icon)?>" alt="icon">
                  <h5 class="category-title mb-0"><?= $value->name?></h5>
                </div>
                <p class="mb-0"><?= $value->description?></p>
              </div>
            </div>
          <?php }?>
              
        </div>
      </div>
    </section>
    <!--=================================
    Range -->


    <!--=================================
    footer-->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-3">
              <a href="index.html"><img class="img-fluid" src="<?= base_url();?>front_end_assets/images/logo.svg" alt="logo"></a>
            </div>
            <div class="col-sm-9 text-sm-right mt-4 mt-sm-0">
              <ul class="list-unstyled mb-0 social-icon">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
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
                <li><a href="#">About</a></li>
                <li><a href="#">Leadership Team</a></li>
                <li><a href="#">IT Blog</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Careers <span class="badge badge-success ml-2">We're hiring</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
            <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="#">Forum Support</a></li>
                <li><a href="#">Help & FAQs</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Pricing And Plans</a></li>
                <li><a href="#">Cookies Policy</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="footer-contact-info">
              <h5 class="text-primary mb-3">Contact hi-Soft</h5>
              <div class="contact-address">
                <div class="contact-item">
                  <label>Address:</label>
                  <p>6580 Allison Turnpike Creminfort, AL 32808</p>
                </div>
                <div class="contact-item">
                  <label>Phone:</label>
                  <h4 class="mb-0 font-weight-bold"><a href="#">+(704) 279-1249</a></h4>
                </div>
                <div class="contact-item">
                  <label>Email:</label>
                  <a class="text-dark" href="#">letstalk@hisoft.com</a>
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
              <p class="mb-0">©Copyright 2020 <a href="index.html">hi-soft</a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->