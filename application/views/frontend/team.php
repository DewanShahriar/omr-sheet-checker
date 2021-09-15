    <!--=================================

    Header Inner -->

    <section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('<?= base_url();?>front_end_assets/images/header-inner/15.jpg');">

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-md-8">

            <div class="header-inner-title text-center">

              <h1 class="text-white font-weight-normal">Meet The Crew</h1>

              <p class="text-white mb-0">These are the people that make the magic happen.</p>

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

                <li class="nav-item"><a class="nav-link active" href="<?= base_url()?>site/team">Our team</a></li>

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

    <!--=================================

    Header Inner -->



    <!--=================================

    About -->

    <section class="space-ptb">

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-6">

            <div class="section-title">

              <h2 class="mb-3">We enable constant enterprise transformation at speed and scale.</h2>

              <p>We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like “I’m not good enough”, “I’m not smart enough”, “I’m not lucky enough”, and the worst,</p>

            </div>

            <a href="#" class="btn btn-light-round btn-round w-space">Know More About<i class="fas fa-arrow-right pl-3"></i></a>

          </div>

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <img class="img-fluid border-radius mb-4 mt-4" src="<?= base_url();?>front_end_assets/images/about/05.jpg" alt="">

                <img class="img-fluid border-radius mb-4 mb-sm-0" src="<?= base_url();?>front_end_assets/images/about/06.jpg" alt="">

              </div>

              <div class="col-sm-6">

                <img class="img-fluid border-radius mb-4" src="<?= base_url();?>front_end_assets/images/about/07.jpg" alt="">

                <div class="counter counter-03">

                  <div class="counter-content">

                    <span class="timer" data-to="491" data-speed="10000">339</span>

                    <label>Projects Complete</label>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    About -->



    <!--=================================

    team -->

    <section class="space-pb">

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-9">

            <div class="section-title text-center">

              <h2>Meet our Crew</h2>

              <p class="lead">Our Crew is friendly, talkative, and fully reliable.</p>

            </div>

          </div>

        </div>

        <div class="row">

          <?php foreach ($all_team as $key => $value) {?>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6">
              <div class="team">
                <div class="team-bg"></div>
                <div class="team-img">
                  <img class="img-fluid" src="<?= base_url($value->photo);?>" alt="">
                </div>
                <div class="team-info">
                  <a href="#" class="team-name"><?= $value->name?></a>
                  <p><?= $value->position?></p>
                  <ul class="list-unstyled">
                    <?php if($value->fb_link){?><li><a href="<?= $value->fb_link?>"><i class="fab fa-facebook-f"></i></a></li><?php }?>
                    <?php if($value->tw_link){?><li><a href="<?= $value->tw_link?>"><i class="fab fa-twitter"></i></a></li><?php }?>
                    <?php if($value->in_link){?><li><a href="<?= $value->in_link?>"><i class="fab fa-linkedin-in"></i></a></li><?php }?>
                  </ul>
                </div>
              </div>
            </div>
          <?php }?>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">
            <div class="team">
              <div class="team-bg"></div>
              <div class="team-img">
                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/01.jpg" alt="">
              </div>
              <div class="team-info">
                <a href="#" class="team-name">Aaron Sharp</a>
                <p>Chief People Officer</p>
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/02.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Homer Reyes</a>

                <p>Vice President</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/03.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Felica Queen</a>

                <p>Team Leader</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/04.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Sara Lisbon</a>

                <p>Production Manager</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/05.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Michael Bean</a>

                <p>Quality control</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/06.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Alice Williams </a>

                <p>Marketing manager</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/07.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Paul Flavius</a>

                <p>Human resources</p>

                <ul class="list-unstyled">

                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/08.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Anne Smith</a>

                <p>Sales and Marketing</p>

                <ul class="list-unstyled">

                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/09.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Mellissa Doe</a>

                <p>Marketing Expert</p>

                <ul class="list-unstyled">

                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/10.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Ben Aguilar</a>

                <p>Community</p>

                <ul class="list-unstyled">

                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>

                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team">

              <div class="team-bg"></div>

              <div class="team-img">

                <img class="img-fluid" src="<?= base_url();?>front_end_assets/images/team/11.jpg" alt="">

              </div>

              <div class="team-info">

                <a href="#" class="team-name">Kim Hamilton</a>

                <p>Developer</p>

                <ul class="list-unstyled">

                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-xl-2 col-md-3 col-sm-4 col-6">

            <div class="team apply-position">

              <div class="team-icon">

                <i class="far fa-user-circle"></i>

              </div>

              <div class="team-info">

                <a href="#" class="btn btn-link">Apply for Possition<i class="fas fa-arrow-right text-dark pl-1"></i> </a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    team -->



    <!--=================================

    Testimonial -->

    <section class="space-pb pt-4 pt-md-0">

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-sm-12 text-center">

            <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">

              <div class="item">

                <div class="testimonial-item">

                  <div class="testimonial-avatar shadow">

                    <img class="img-fluid rounded-circle" src="<?= base_url();?>front_end_assets/images/avatar/01.jpg" alt="">

                  </div>

                  <div class="testimonial-content">

                    <p>We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.</p>

                  </div>

                  <div class="testimonial-author">

                    <div class="testimonial-name">

                      <h6 class="mb-1">Alice Williams</h6>

                      <span>Vetrov Systems Development</span>

                    </div>

                  </div>

                </div>

              </div>

              <div class="item">

                <div class="testimonial-item">

                  <div class="testimonial-avatar shadow">

                    <img class="img-fluid rounded-circle" src="<?= base_url();?>front_end_assets/images/avatar/02.jpg" alt="">

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

    <!--=================================

    Testimonial -->



    <!--=================================

    Client Logo -->

    <section class="space-pb our-clients">

      <div class="container">

        <div class="row align-items-center justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-4 mb-4 mb-md-0">

            <h5 class="text-primary mb-0">Awards and Nominees</h5>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-8">

            <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/01.svg" alt="">

              </div>

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/02.svg" alt="">

              </div>

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/03.svg" alt="">

              </div>

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/04.svg" alt="">

              </div>

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/05.svg" alt="">

              </div>

              <div class="item">

                <img class="img-fluid grayscale" src="<?= base_url();?>front_end_assets/images/award-logo/06.svg" alt="">

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    Client Logo -->



    <!--=================================

    News -->

    <section class="space-pb">

      <div class="container">

        <div class="row dark-background">

          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">

            <div class="feature-info feature-info-style-04">

              <div class="feature-info-content">

                <h4 class="mb-3 font-weight-normal feature-info-title">Careers</h4>

                <p>Walkout 10 years into your future and feel how it feels to carry on doing the same thing.</p>

                <a href="careers.html" class="btn btn-primary-round btn-round text-white">View Positions<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">

            <div class="feature-info feature-info-style-04">

              <div class="feature-info-content">

                <h4 class="mb-3 font-weight-normal feature-info-title">Latest News</h4>

                <p>This path is just like today, with one difference: you have 10 fewer years remaining in your life.</p>

                <a href="blog.html" class="btn btn-primary-round btn-round text-white">Read Articles<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

          <div class="col-lg-4">

            <div class="feature-info feature-info-style-04">

              <div class="feature-info-content">

                <h4 class="mb-3 font-weight-normal feature-info-title">Contact</h4>

                <p>I want you to think about how you will feel in 10 years if you continue doing the exact same things.</p>

                <a href="contact.html" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    News -->