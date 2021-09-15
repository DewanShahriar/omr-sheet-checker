<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $this->lang->line('exam_list'); ?></h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url('admin/exam/add') ?>" class="btn bg-purple btn-sm"><i class="fa fa-plus"></i> <?php echo $this->lang->line('exam_add'); ?></a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="custom_table_box">
                        <table id="userListTable" class="table table-bordered table-striped table_th_info custom_table">
                        <thead>
                            <tr>
                                <th style="width: 5%;"><?php echo $this->lang->line('sl'); ?></th>
                                <th style="width: 25%;"><?php echo $this->lang->line('exam_name'); ?></th>
                                <th style="width: 20%;"><?php echo $this->lang->line('total_question'); ?></th>
                                <th style="width: 20%;"><?php echo $this->lang->line('per_question_mark'); ?></th>
                                <th style="width: 15%;"><?php echo $this->lang->line('negative_mark'); ?></th>
                                <th style="width: 15%;"><?php echo $this->lang->line('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl = 1;
                                foreach ($exam_list as $value) {
                                    ?>
                            <tr>
                                <td> <?php echo $sl++ ; ?> </td>
                                <td> <?php echo $value->exam_name; ?> </td>
                                <td> <?php echo $value->total_question; ?> </td>
                                <td> <?php echo $value->per_question_mark; ?> </td>
                                <td> <?php echo $value->negative_mark; ?> </td>
                                <td>
                                    <a href="<?php echo base_url('admin/exam/view/'.$value->id); ?>" class="btn btn-sm bg-primary"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url('admin/exam/edit/'.$value->id); ?>" class="btn btn-sm bg-teal"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('admin/exam/delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>
<script type="text/javascript">
    $(function () {
      $("#userListTable").DataTable();
    });
    
</script>

