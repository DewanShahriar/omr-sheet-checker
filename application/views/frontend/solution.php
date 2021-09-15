    <!--=================================
    inner banner -->
<?php if($solution_info){?>
<section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url();?>front_end_assets/images/header-inner/07.jpg');">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="header-inner-title text-center">
          <h1 class="text-white font-weight-normal"><?= $solution_info->title?></h1>
          
        </div>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    inner banner -->

    <!--=================================
    Case Study Detail -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <h2 class="mb-3">Overview</h2>
      </div>
      <div class="col-xl-5 col-md-6">
        <h6 class="text-dark"><?= $solution_info->overview_note?></h6>
      </div>
      <div class="col-xl-7 col-md-6">
        <p><?= $solution_info->overview_details?></p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-12">
        <img class="img-fluid border-radius" src="<?= base_url($solution_info->feature_photo);?>" alt="">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-12">
        <ul class="clients-detail list-inline d-md-flex">
          <li>
            <strong class="text-dark d-block mb-2">Client</strong>
            <span>Developer</span>
          </li>
          <li>
            <strong class="text-dark d-block mb-2">Categories</strong>
            <span>It Company</span>
          </li>
          <li>
            <strong class="text-dark d-block mb-2">Budgets</strong>
            <span>$250.000</span>
          </li>
          <li>
            <strong class="text-dark d-block mb-2">Location</strong>
            <span>New York, USA</span>
          </li>
          <li>
            <strong class="text-dark d-block mb-2">Project Url</strong>
            <a href="#">http://www.exampleproject.com</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-lg-10">
        <h2 class="text-dark">Challenge</h2>
        <?= $solution_info->challenges?>
        
        
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12 mt-4">
        <img class="w-100 border-radius" src="<?= base_url($solution_info->meeting_photo);?>" alt="">
      </div>
    </div>
    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-lg-10">
        <h2 class="text-dark">Solution</h2>
        <?= $solution_info->solutions?>
      </div>
    </div>
    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-lg-10">
        <h2 class="text-dark">Results</h2>
        <?= $solution_info->results?>
      </div>
    </div>
    <div class="row justify-content-center mt-4 mt-md-5">
      <div class="col-lg-10">
        <div class="row">
          <div class="col-md-4">
            <h2 class="text-primary font-weight-bold">81%</h2>
            <p class="text-light font-weight-normal mt-2 mb-0">A totally new way to grow your business</p>
          </div>
          <div class="col-md-4">
            <h2 class="text-primary font-weight-bold">Improved</h2>
            <p class="text-light font-weight-normal mt-2 mb-0">We are adding extra value for your business</p>
          </div>
          <div class="col-md-4">
            <h2 class="text-primary font-weight-bold">Increased</h2>
            <p class="text-light font-weight-normal mt-2 mb-0">Award-winning website design & creative digital agency services</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row  justify-content-center my-4 my-md-5">
      <div class="col-sm-12">
        <hr class="light-bg m-0">
      </div>
    </div>
    <div class="row  justify-content-center">
      <div class="col-sm-6 mb-3 mb-md-0">
        <a href="#" class="btn btn-light-round right-round btn-round w-space"><i class="fas fa-arrow-left pr-3"></i>Previous Case Study</a>
      </div>
      <div class="col-sm-6 text-md-right">
        <a href="#" class="btn btn-primary-round btn-round w-space">Next Case Study<i class="fas fa-arrow-right pl-3"></i></a>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    Case Study Detail -->

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
