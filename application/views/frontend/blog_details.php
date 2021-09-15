    <!--=================================
    inner banner -->
<?php if($blog_info){?>
<section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/04.jpg');">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="header-inner-title text-center">
          <h1 class="text-white font-weight-normal mb-0"><?= $blog_info->title?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    inner banner -->

    <!--=================================
    Blog -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="blog-detail">
          <div class="blog-post mb-4 mb-md-5">
            <div class="blog-post-image">
              <img class="img-fluid" src="<?= base_url($blog_info->photo)?>" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-info">
                <div class="blog-post-author">
                  <a href="<?= base_url()?>site/blog" class="btn btn-light-round btn-round text-primary"><?= str_replace("**",",", $blog_info->category);?></a>
                </div>
                <div class="blog-post-date">
                  <a href="#"><?= date('M d, Y', strtotime($blog_info->publish_date))?></a>
                </div>
              </div>
              <div class="blog-post-details">
                <h5 class="blog-post-title">
                  <?= $blog_info->title?>
                </h5>
                <?= $blog_info->description?>
                <?php if($blog_info->quote){?>
                <div class="d-sm-flex bg-light border-radius p-4 p-md-5 mb-md-5 mb-4">
                  <i class="fas fa-quote-left pr-4 fa-6x text-primary"></i>
                  <p class="mb-0 text-dark"><?= $blog_info->quote?></p>
                </div>
              <?php }?>
                <ul class="list list-unstyled">
                  <?php
                  if($blog_info->main_point){
                  $main_points = explode('**', $blog_info->main_point);
                  foreach ($main_points as $key => $list) {?>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span><?= $list?></span></li>
                  <?php }}?>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="blog-post mb-4 mb-md-5">
            <?php if($blog_info->video_link){?>
            <div class="blog-post-image position-relative">
              <iframe width="560" height="400" src="<?php echo $blog_info->video_link;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php }?>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <h5 class="blog-post-title">
                  How google’s BERT algorithm affects your website traffic
                </h5>
                <p class="mb-4">Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed. This is a fundamental step, which most people overlook.</p>
                <div class="d-sm-flex align-items-center">
                  <div class="blog-post-meta pr-4">
                    <a href="#"><i class="far fa-heart pr-1"></i>14</a>
                    <a href="#"><i class="far fa-eye pr-1"></i>21</a>
                    <a href="#"><i class="far fa-comments pr-1"></i>03</a>
                  </div>
                  <div class="social d-flex align-items-center">
                    <p class="text-primary mb-0 pr-2">Share this post:</p>
                    <a href="#"><i class="fab fa-facebook-f pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-twitter pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-instagram pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-linkedin text-light"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="navigation post-navigation my-md-4">
            <div class="nav-previous">
              <a href="#" class="btn btn-light-round right-round btn-round"><i class="fas fa-arrow-left pr-3"></i><span>Five initial steps you must do to increase your business incomes</span></a>
            </div>
            <div class="nav-next">
              <a href="#" class="btn btn-primary-round btn-round"><span>How google’s BERT algorithm affects your website traffic</span><i class="fas fa-arrow-right pl-3"></i></a>
            </div>
          </div>
          <hr>
          
          
        </div>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    Blog -->

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