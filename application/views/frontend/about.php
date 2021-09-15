

<style>


.gallery_tab .nav {
  justify-content: space-between;
}

.gallery_tab .nav .nav-item {
  width: 49%;
  text-align: center;
  margin-bottom: 80px;
}

.gallery_tab .nav .nav-item .nav-link {
  padding: 120px 30px;
  position: relative;
}


/*
  .nav-pills .nav-link::after {
  content: '\f061';
  font-family: "Font Awesome 5 Free";
  font-weight: bold;
  opacity: 0;
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  }*/

.gallery_tab .nav .nav-item .nav-link:after {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  background: #000;
  opacity: .7;
  z-index: -1;
}

.gallery_tab .nav .nav-item .nav-link:before {
  position: absolute;
  content: '';
  content: '\f30b';
  font-family: "Font Awesome 5 Free";
  font-size: 20px;
  background: #fff;
  color: #6154bc;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, .7);
  }
  70% {
    box-shadow: 0 0 0 15px rgba(3, 168, 124, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(3, 168, 124, 0);
  }
}

.gallery_tab .nav-pills .nav-link {
  justify-content: center;
  z-index: 99;
  color: #fff;
}

.gallery_tab .nav-pills .nav-link span {
  position: relative;
  bottom: -170px;
  color: #fff;
  background: #ef3139;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 20px;
  font-weight: 400;
}

.gallery_tab .nav-pills .nav-link::after {
  content: '\f061';
  font-family: "Font Awesome 5 Free";
  font-weight: bold;
  opacity: 0;
  position: absolute;
  right: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}


</style>

<!--================================= Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/01.jpg');">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
        <div class="header-inner-title text-center">
          <h1 class="text-white font-weight-normal">About HRSOFTBD</h1>
          <p class="text-white mb-0">Our Expertise. Know more about what we do</p>
        </div>
      </div>
    </div>
  </div>
  <div class="header-inner-nav">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link active" href="<?= base_url()?>site/about">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/career">Careers</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/work">How we work</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/team">Our team</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/mission">Mission and vision</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/value">Our values</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/technologies">Technologies</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url()?>site/story">Success Stories</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Header Inne -->
<!--================================= History -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="section-title text-center">
          <h2>Established 2012 in Hrsoftbd has been offering world-class information technology.</h2>
          <p class="px-xl-5">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="cd-horizontal-timeline">
          <div class="timeline">
            <div class="events-wrapper">
              <div class="events">
                <ul>
                  <li><a href="#0" data-date="01/01/2010" class="selected">2012</a></li>
                  <li><a href="#0" data-date="01/01/2012">2014</a></li>
                  <li><a href="#0" data-date="01/01/2014">2016</a></li>
                  <li><a href="#0" data-date="01/01/2016">2018</a></li>
                  <li><a href="#0" data-date="01/01/2018">2020</a></li>
                  <li><a href="#0" data-date="01/01/2020">2022</a></li>
                </ul>
                <span class="filling-line" aria-hidden="true"></span>
              </div>
              <!-- .events -->
            </div>
            <!-- .events-wrapper -->
            <ul class="cd-timeline-navigation">
              <li><a href="#0" class="prev inactive"></a></li>
              <li><a href="#0" class="next"></a></li>
            </ul>
            <!-- .cd-timeline-navigation -->
          </div>
          <!-- .timeline -->
          <div class="events-content">
            <ul>
              <li class="selected" data-date="01/01/2010">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2012</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark"> They often mean leaving the perception of security in order to discover your personal freedom. These are the changes that will bring happiness and satisfaction into your life. Just go there now.</h6>
                      <p class="border-left pl-3 font-italic">9 years out… having made a decade of changes. Imagine living the life you want to live.</p>
                      <p class="mb-0">The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li data-date="01/01/2012">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2014</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark">What is the exact sequence of events that will take you to where you want to be? Have a think consciously of what you need to do. Every outcome begins with the first step.</h6>
                      <p class="border-left pl-3 font-italic">When you decide you want to have a romantic meal for two, there are many steps that you need to perform in order for that to happen.</p>
                      <p class="mb-0">This is the beginning of creating the life that you want to live. Know what the future holds for you as a result of the choice you can make today.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li data-date="01/01/2014">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2016</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark">Have some fun and hypnotize yourself to be your very own “Ghost of Christmas future” and see what the future holds for you. Success is something of which we all want more. Most people believe that success is difficult.</h6>
                      <p class="border-left pl-3 font-italic">Get the oars in the water and start rowing. Execution is the single biggest factor in achievement.</p>
                      <p class="mb-0">The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else. The point is that we must be fully aware of the price and be willing to pay it</p>
                    </div>
                  </div>
                </div>
              </li>
              <li data-date="01/01/2016">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2018</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark">He sells his farm and hikes off over the horizon, never to be heard from again. Rumors say that years later he died destitute, never having found the diamonds he spent his life seeking.</h6>
                      <p class="border-left pl-3 font-italic">I don’t think the deciding factor was the desire. Lots of people come here to Japan, but never quite find out how to stay. </p>
                      <p class="mb-0">Instead, it seems to be more a matter of what they can allow themselves to have. Some people call this a sense of deserving. Others call it a sense of entitlement. No matter what term you use, it’s basically the same thing.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li data-date="01/01/2018">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2020</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark">Introspection is the trick. Understand what you want, why you want it and what it will do for you. This is a critical factor, and as such, is probably the most difficult step. For this reason, most people never complete this aspect – then wonder why life is so difficult!</h6>
                      <p class="border-left pl-3 font-italic">“Nothing changes until something moves” – this is the battle cry of author and journalist Robert Ringer. And he is absolutely correct</p>
                      <p class="mb-0">Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li data-date="01/01/2020">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="year">2022</h1>
                  </div>
                  <div class="col-md-8">
                    <div class="timeline-text">
                      <h6 class="text-dark">Make no mistake, the new owner already had money, or he could not have bought the land. There’s nothing in this story to make us think he was dreaming about riches, vast or otherwise. No burning desire. But he got the goodies.</h6>
                      <p class="border-left pl-3 font-italic">Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
                      <p class="mb-0">Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- .events-content -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= History -->
<!--================================= portfolio -->
<section class="space-pb popup-gallery overflow-hidden">
  <div class="container-fluid">
    <div class="row d-flex align-items-end">
      <div class="col-lg-12">
        <div class="gallery_tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" style="background-image: url('<?= base_url()?>front_end_assets/images/gallery/official01.jpg');background-position: center; background-size: cover;">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span>Official Photo Gallery</span> </a>
            </li>
            <li class="nav-item" style="background-image: url('<?= base_url()?>front_end_assets/images/gallery/01.jpg');background-position: center; background-size: cover;">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span>Occational Program Gallery</span></a>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/01.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official01.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/02.jpg"><img class="img-fluid w-100" src="<?= base_url()?>front_end_assets/images/gallery/official02.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/03.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official03.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/04.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official04.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official05.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official06.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/official07.jpg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/01.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/02.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/03.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/04.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/05.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/06.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/07.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/08.jpg" alt=""></a>
              </div>	
              <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/05.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/09.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/06.jpg"><img class="img-fluid w-100" src="<?= base_url()?>front_end_assets/images/gallery/10.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/07.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/11.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/12.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/14.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/15.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/16.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/17.jpg" alt=""></a>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                <a class="portfolio-img" href="<?= base_url()?>front_end_assets/images/gallery/08.jpg"><img class="img-fluid" src="<?= base_url()?>front_end_assets/images/gallery/18.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= portfolio -->
<!--=================================Counter -->
<section class="py-4 bg-transparant border">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="counter counter-02">
          <div class="counter-icon align-self-center">
            <i class="flaticon-emoji"></i>
          </div>
          <div class="counter-content align-self-center">
            <span class="timer" data-to="<?php echo $shortcut_info['happy_client']->value;?>" data-speed="10000"><?php echo $shortcut_info['happy_client']->value;?></span>
            <label><?php echo $shortcut_info['happy_client']->title;?></label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter counter-02">
          <div class="counter-icon">
            <i class="flaticon-trophy"></i>
          </div>
          <div class="counter-content">
            <span class="timer" data-to="<?php echo $shortcut_info['skilled_experts']->value;?>" data-speed="10000"><?php echo $shortcut_info['skilled_experts']->value;?></span>
            <label><?php echo $shortcut_info['skilled_experts']->title;?></label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter counter-02">
          <div class="counter-icon">
            <i class="flaticon-strong"></i>
          </div>
          <div class="counter-content">
            <span class="timer" data-to="<?php echo $shortcut_info['finished_projects']->value;?>" data-speed="10000"><?php echo $shortcut_info['finished_projects']->value;?></span>
            <label><?php echo $shortcut_info['finished_projects']->title;?></label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter counter-02">
          <div class="counter-icon">
            <i class="flaticon-icon-149196"></i>
          </div>
          <div class="counter-content">
            <span class="timer" data-to="<?php echo $shortcut_info['media_posts']->value;?>" data-speed="10000"><?php echo $shortcut_info['media_posts']->value;?></span>
            <label><?php echo $shortcut_info['media_posts']->title;?></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Counter -->
<!--=================================Testimonial -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 text-center">
        <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-avatar shadow">
                <img class="img-fluid rounded-circle" src="<?= base_url()?>front_end_assets/images/avatar/01.jpg" alt="">
              </div>
              <div class="testimonial-content">
                <p>We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <h6 class="mb-1">Alice Williams    </h6>
                  <span>Vetrov Systems Development</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-avatar shadow">
                <img class="img-fluid rounded-circle" src="<?= base_url()?>front_end_assets/images/avatar/02.jpg" alt="">
              </div>
              <div class="testimonial-content">
                <p>The hi-soft database has been one of our current sources for recruitment, backed by a very experienced team who would go out of their way to make sure that requests are taken ahead.</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <h6 class="mb-1">Michael Bean</h6>
                  <span>Web Developer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Testimonial -->
<!--================================= Action Box -->
<section class="space-pb dark-background">
  <div class="container">
    <div class="bg-dark text-center rounded py-5 px-3">
      <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
      <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
      <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
  </div>
</section>
<!--================================= Action Box -->

