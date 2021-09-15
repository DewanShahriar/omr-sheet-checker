    <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/02.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Blog</h1>
              <p class="text-white mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity. When asked the question</p>
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
        <div class="row">
          <?php foreach ($blogs as $key => $value) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="blog-post">
              <div class="blog-post-image">
                <a href="<?= base_url('site/blog-details/'.$value->id)?>">
                <img class="img-fluid" src="<?= base_url($value->photo)?>" alt="">
                </a>
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="<?= base_url()?>site/blog" class="btn btn-light-round btn-round text-primary"><?= str_replace("**",",", $value->category);?></a>
                  </div>
                  <div class="blog-post-date">
                    <a href="#"><?= date('M d, Y', strtotime($value->publish_date))?></a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="blog-post-title">
                    <a href="<?= base_url('site/blog-details/'.$value->id)?>"><?= $value->title?></a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
            
          <?php }?>
          
         
  
        
         
        </div>
        <div class="row mt-4 mt-md-5">
          <div class="col-12 text-center">
            <a href="<?= base_url()?>site/blog" class="btn btn-primary-round btn-round">Load More<i class="fas fa-arrow-right pl-3"></i></a>
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