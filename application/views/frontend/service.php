    <!--=================================
    Header Inner -->
    <?php if($service_info){?>
<section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url($service_info->thumb_photo);?>');">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="header-inner-title text-center">
          <h1 class="text-white font-weight-normal"><?php echo $service_info->service_name;?></h1>
          <p class="text-white mb-0"><?php echo $service_info->attractive_line;?></p>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    Header Inner -->

    <!--=================================
    Category -->
<section class="space-ptb">
  <div class="container">
    <div class="row">

      <?php foreach ($child_service_list as $key => $value) {?>
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-info feature-info-style-02">
          <div class="feature-info-icon">
            <img src="<?= base_url($value->icon);?>" alt="">
            <h5 class="mb-0 ml-4 feature-info-title"><?php echo $value->service_name?></h5>
          </div>
          <div class="feature-info-content">
            <p class="mb-0"><?php echo character_limiter(strip_tags($value->attractive_line), 100)?></p>
            <a href="<?= base_url('service-details/'.$value->url);?>" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
          <a href="<?= base_url('service-details/'.$value->url);?>" class="icon-btn"><div class="feature-info-bg-img" style="background-image: url('<?= base_url($value->thumb_photo);?>');"></div></a>
        </div>
      </div>
      <?php }?>
      
    </div>
    <div class="row mt-5">
      <div class="col-12 d-md-flex justify-content-center align-items-center">
        <p class="mb-3 mb-md-0 mx-0 mx-md-3">Start now! Your big opportunity may be right where you are!</p>
        <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3">See All Services<i class="fas fa-arrow-right pl-3"></i></a>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    Category -->

    <!--=================================
    Action Box -->
<section class="space-pb dark-background">
  <div class="container">
    <div class="bg-dark text-center rounded py-5 px-3">
      <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
      <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
      <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
  </div>
</section>
    <!--=================================
    Action Box -->
<?php } else {?>
<section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/1285952.jpg');">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="header-inner-title text-center">
          <h1 class="text-white font-weight-normal mb-0">Not Found</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }?>