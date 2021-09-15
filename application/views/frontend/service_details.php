    <!--=================================
    inner banner -->
<?php if($service_info){?>
<section class="header-inner bg-overlay-black-50" style="background-image: url('<?= base_url($service_details->top_title_photo);?>');">
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
    inner banner -->

    <!--=================================
    Service details -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="service-details">
          <h4 class="font-weight-bold"><?php echo $service_details->share_title;?></h4>
          <p class="mb-4 mb-md-5"><?php echo $service_details->share_description;?></p>
          <div class="custom_details text-center">
          <img class="img-fluid border-radius mb-4 mb-md-5" src="<?= base_url($service_details->body_photo);?>" alt="">
          <?php echo $service_details->top_description_en;?>
          </div>
          <h4 class="font-weight-bold">Key Features</h4>
          <?php if($service_details->key_features_en){?>
          <ul class="list list-unstyled mb-4 mb-md-5">
            <?php
            $feature_list = explode('**', $service_details->key_features_en);
            foreach ($feature_list as $k=> $list) {?>
              <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span><?= $list?></span></li>
            <?php }?>
          </ul>
          <?php }?>
          
          <div class="row mb-4 mb-md-5">
            <div class="col-md-6 mb-4 mb-md-0">
              <img class="img-fluid border-radius" src="<?= base_url($service_details->feature_photo1);?>" alt="">
            </div>
            <div class="col-md-6">
              <h4 class="font-weight-bold">The Advantages</h4>
              <!-- <p class="mb-4">You carry on doing the same things, living the same way and dealing with this thing in the same way as you have been doing.</p> -->
              <?php if($service_details->advantages_en){?>
              <ul class="list list-unstyled mb-4">

                <?php
                $advantage_list = explode('**', $service_details->advantages_en);
                foreach ($advantage_list as $k=> $list) {?>
                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span><?= $list?></span></li>
                <?php }?>
                
              </ul>
              <?php }?>
              <!-- <p class="mb-0">Think about that as you stand at this place where the path splits. You want to make a decision and commit to one of these paths.</p> -->
            </div>
          </div>

          <div class="row mb-4 mb-md-5">
            
            <div class="col-md-6">
              <h4 class="font-weight-bold">Other Features</h4>
              <!-- <p class="mb-4">You carry on doing the same things, living the same way and dealing with this thing in the same way as you have been doing.</p> -->
              <?php if($service_details->other_features_en){?>
              <ul class="list list-unstyled mb-4">

                <?php
                $other_features_list = explode('**', $service_details->other_features_en);
                foreach ($other_features_list as $k=> $list) {?>
                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span><?= $list?></span></li>
                <?php }?>
                
              </ul>
              <?php }?>
              
              <!-- <p class="mb-0">Think about that as you stand at this place where the path splits. You want to make a decision and commit to one of these paths.</p> -->
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
              <img class="img-fluid border-radius" src="<?= base_url($service_details->feature_photo2);?>" alt="">
            </div>
          </div>
          <?php echo $service_details->bottom_description_en;?>
          
          <h4 class="font-weight-bold mb-4">Please contact us via below from for more info</h4>
          <form class="row">
            <div class="form-group col-md-4 mb-4">
              <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
            </div>
            <div class="form-group col-md-4 mb-4">
              <input type="text" class="form-control" id="exampleInputLname" placeholder="Last Name">
            </div>
            <div class="form-group col-md-4 mb-4">
              <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address">
            </div>
            <div class="form-group col-md-12 mb-4">
              <textarea class="form-control" rows="5" id="exampleInputEnquiry" placeholder="Enquiry Description"></textarea>
            </div>
            <div class="form-group col-md-12 mb-4">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label small" for="customCheck1">i agree to talk about my project with Hi-soft</label>
              </div>
            </div>
            <div class="form-group col-md-12 mb-0">
              <button type="submit" class="btn btn-primary">Send Massage<i class="fas fa-arrow-right pl-3"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    Service details -->

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