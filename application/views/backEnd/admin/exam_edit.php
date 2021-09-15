<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $this->lang->line('exam_edit'); ?>  </h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url() ?>admin/exam/list" type="submit" class="btn bg-purple btn-sm" style="color: white;"> <i class="fa fa-list"></i> <?php echo $this->lang->line('exam_list'); ?>  </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="<?php echo base_url("admin/exam/edit/".$edit_info->id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                           
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('exam_name'); ?> *</label>
                                            <input name="exam_name" placeholder="<?php echo $this->lang->line('exam_name'); ?> " class="form-control inner_shadow_info" required="" type="text" autocomplete="off" value="<?= $edit_info->exam_name?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('total_question'); ?>*</label>
                                            <input name="total_question" placeholder="<?php echo $this->lang->line('total_question'); ?>" class="form-control inner_shadow_info" min="1" type="number" required value="<?= $edit_info->total_question?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('per_question_mark'); ?></label>
                                            <input name="per_question_mark" placeholder="<?php echo $this->lang->line('per_question_mark'); ?>" class="form-control inner_shadow_info" min="1" type="number" value="<?= $edit_info->per_question_mark?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label><?php echo $this->lang->line('negative_mark'); ?></label>
                                            <input name="negative_mark" placeholder="<?php echo $this->lang->line('negative_mark'); ?>" class="form-control inner_shadow_info" type="number" value="<?= $edit_info->negative_mark?>">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            
                            
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm btn-danger"><?php echo $this->lang->line('reset'); ?></button>
                                    <button type="submit" class="btn btn-sm bg-teal"><?php echo $this->lang->line('update'); ?></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>
<script>
    // profile picture change
    function readpicture(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
    
          reader.onload = function (e) {
            $('#exam_picture_change')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
    
        reader.readAsDataURL(input.files[0]);
    }
    }

    
    
</script>