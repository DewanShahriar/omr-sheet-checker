    
<!-- inner banner -->

    <section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url()?>front_end_assets/images/header-inner/02.jpg');">

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-md-8">

            <div class="header-inner-title text-center">

              <h1 class="text-white font-weight-normal">We’d love to hear from you</h1>

              <p class="text-white mb-0">Whether you have a question about our product or services, need a demo or anything else, our team is always  ready to answer  all your questions.</p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    inner banner -->


    <!--=================================

    Contat Form -->

    <section class="space-ptb">

      <div class="container">

        <div class="row justify-content-lg-around position-relative">

          <div class="col-lg-5 col-md-7 pr-lg-5">
              <h3 class="mb-4">We're here to help</h3>
              <div class="row">

              <div class="col-sm-6 mb-4 mb-md-5">

                <h5>Corporate Office:</h5>

                <h6 class="text-light mb-0">48, KaziNazrul Islam Avenue, Karwan Bazar, Dhaka-1215, Bangladesh.</h6>

              </div>

              <div class="col-sm-6 mb-4 mb-md-5">

                <h5>Support Center:</h5>

                <h6 class="text-light mb-0">12/6, Solimullah Road, Mohammadpur, Dhaka 1207, Bangladesh.</h6>

              </div>

            </div>
             <h3>Get in touch</h3>
             <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
              </div>
              <div class="alert alert-success print-success-msg" style="display:none">
                  <ul></ul>
              </div>
            <div class="bg-white">


              

                <div class="form-group mb-3">

                  <input type="text" class="form-control" id="first_name" placeholder="Name" name="first_name" required="">

                </div>

                <div class="form-group mb-3">

                  <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" name="phone_number" required="">

                </div>

                <div class="form-group mb-3">

                  <input type="text" class="form-control" id="email" placeholder="Email Address" name="email" required="">

                </div>

                <div class="form-group mb-3">

                  <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required="">

                </div>

                <div class="form-group mb-4">

                  <textarea class="form-control" id="description" placeholder="Your questions" rows="5" name="description"></textarea>

                </div>

                <div class="form-group mb-4">

                  <div class="custom-control custom-checkbox">

                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="">

                    <label class="custom-control-label small" for="customCheck1">I agree to talk about my project with Hi-soft</label>

                  </div>

                </div>

                <div class="form-group text-center">

                  <button type="" class="btn btn-primary" onclick="contact_submit()">Send Massage</button>

                </div>

              

            </div>

          </div>

          <div class="col-lg-6 offset-lg-1 col-md-5 mb-4">

            <div class="is-sticky">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.595626450162!2d90.36047381438861!3d23.761795294259112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5885656b07%3A0x2871fff74d617a66!2sHRSOFT%20Bangladesh!5e0!3m2!1sen!2sbd!4v1629546663978!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

          </div>



          <div class="contact-bg-logo">

            <i class="fas fa-comment"></i>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    Contat Form  -->



    <!--=================================

    Contat Form info -->



    <!--=================================

    Contat Form info-->



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

                <a href="<?php echo base_url('site/career');?>" class="btn btn-primary-round btn-round text-white">View Positions<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">

            <div class="feature-info feature-info-style-04">

              <div class="feature-info-content">

                <h4 class="mb-3 font-weight-normal feature-info-title"><?php echo $shortcut_info['latest_blog']->title;?></h4>

                <p><?php echo $shortcut_info['latest_blog']->value;?></p>

                <a href="<?php echo base_url('site/blog');?>" class="btn btn-primary-round btn-round text-white">Read Articles<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

          <div class="col-lg-4">

            <div class="feature-info feature-info-style-04">

              <div class="feature-info-content">

                <h4 class="mb-3 font-weight-normal feature-info-title">Contact</h4>

                <p>I want you to think about how you will feel in 10 years if you continue doing the exact same things.</p>

                <a href="<?php echo base_url('site/contact');?>" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right pl-3"></i></a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--=================================

    News -->

    <script type="text/javascript">

   function contact_submit() {

      var first_name = $("#first_name").val();
      var email = $("#email").val();
      var phone_number = $("#phone_number").val();
      var subject = $("#subject").val();
      var description = $("#description").val();
      
      if($("#customCheck1").prop("checked") == true){
        $.ajax({
             url: "<?php echo base_url() . 'site/contact_form_submit'; ?>",
             type:'POST',
             data: {first_name:first_name, phone_number:phone_number, email:email, description:description, subject: subject},
             success: function(data) {
               var data = JSON.parse(data);
               console.log(data);
               if(data.status == 1){
                  $(".print-success-msg").find("ul").html('');
                  $(".print-error-msg").css('display','none');
                  $(".print-success-msg").css('display','block');
                  $(".print-success-msg").find("ul").append('<li>'+data.msg+'</li>');
               } else if(data.status == 0){
                  $(".print-error-msg").find("ul").html('');
                  $(".print-success-msg").css('display','none');
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").find("ul").append('<li>'+data.msg+'</li>');
               } else {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-success-msg").css('display','none');
                  $(".print-error-msg").css('display','block');
                  $(".print-error-msg").find("ul").append('<li>'+data.msg+'</li>');
               }
             }
         });
         
      } else {
         $(".print-error-msg").find("ul").html('');
         $(".print-success-msg").css('display','none');
         $(".print-error-msg").css('display','block');
         $(".print-error-msg").find("ul").append('<li>Please Check Agree </li>');
      }
      
   }


</script>