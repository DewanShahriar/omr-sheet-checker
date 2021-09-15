<style>

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid #fb3199;
}
.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid #fb3199;
    text-align:center;
}
.table-bordered > thead > tr > th{
    color:#fb3199;
    font-size:18px;
}
.table-bordered > tbody > tr:nth-child(even){
    background:#fed4e6;
    margin:3px 0px;
}
.table-bordered > tbody > tr > td{
    margin:3px 0px;
    border:none;
}
.table-bordered > tbody > tr > td:first-child{
    border-right: 1px solid #fb3199;
}
.table-bordered {
    border: 1px solid #fb3199;
}
.instruction{
    margin-top:20px;
}
.instruction >thead{
    background:#fed4e6;
}
.instruction ul li{ 
 list-style-type:none;
 text-align:left;
 color:#fb3199;
}
.answer_sheet{
    text-align:center;
    border-radius:5px;
    background:#fb3199;
    padding:6px 0px;
    color:#fff;
    font-size:20px;
    font-weight:bold;
    margin-bottom:20px;
}
</style>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $this->lang->line('correct_answer_edit'); ?><span id="preview"></span></h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url('admin/exam/list') ?>" class="btn bg-purple btn-sm"><i class="fa fa-plus"></i> <?php echo $this->lang->line('exam_list'); ?></a>
                    </div>
                </div>
                
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <table class="table table-bordered instruction">
                            <thead>
                                <tr>
                                    <th>INSTRUCTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                 <td>
                                     <ul>
                                        <li>1. <?= $edit_info->exam_name?></li>
                                        <li>2. There is only one correct answer for each question</li>
                                        <li>3. There are total <?= $edit_info->total_question?> questions.</li>
                                        <li>4. <?php if($edit_info->negative_mark == 0) echo "There is no negative mark."; else echo "Negative mark ".$edit_info->negative_mark; ?></li>
                                         <li>5. Each Question has <?= $edit_info->per_question_mark?> mark.</li>
                                     </ul>
                                 </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="answer_sheet">
                                ANSWR SHEET 
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                        </div>
                        
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:40px;"></th>
                                        <th scope="col">A</th>
                                        <th scope="col">B</th>
                                        <th scope="col">C</th>
                                        <th scope="col">D</th>
                                        <th scope="col">E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($first_array as $key=>$value){?>
                                <tr>
                                    <td><?php echo $value->question_number;?>.</td>
                                    <td><input type="radio" name="first_array<?= $key?>" value="1" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 1) echo 'checked';?> ></td>
                                    <td><input type="radio" name="first_array<?= $key?>" value="2" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 2) echo 'checked';?> ></td>
                                    <td><input type="radio" name="first_array<?= $key?>" value="3" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 3) echo 'checked';?> ></td>
                                    <td><input type="radio" name="first_array<?= $key?>" value="4" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 4) echo 'checked';?> ></td>
                                    <td><input type="radio" name="first_array<?= $key?>" value="5" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 5) echo 'checked';?> ></td>
                                </tr>
                                <?php }?>
                            
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:40px;"></th>
                                        <th scope="col">A</th>
                                        <th scope="col">B</th>
                                        <th scope="col">C</th>
                                        <th scope="col">D</th>
                                        <th scope="col">E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($second_array as $key=>$value){?>
                                    <tr>
                                        <td><?php echo $value->question_number;?>.</td>
                                        <td><input type="radio" name="second_array<?= $key?>" value="1" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 1) echo 'checked';?> ></td>
                                        <td><input type="radio" name="second_array<?= $key?>" value="2" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 2) echo 'checked';?> ></td>
                                        <td><input type="radio" name="second_array<?= $key?>" value="3" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 3) echo 'checked';?> ></td>
                                        <td><input type="radio" name="second_array<?= $key?>" value="4" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 4) echo 'checked';?> ></td>
                                        <td><input type="radio" name="second_array<?= $key?>" value="5" onchange="update_option(this.value, <?= $value->id?>);" <?php if($value->option_number == 5) echo 'checked';?> ></td>
                                    </tr>
                                <?php }?>
                            
                                </tbody>
                            </table>
                        </div>
                        
                        
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

<script type="text/javascript">
    function update_option(value, id) {

        //alert(key);
        //console.log(value);
        
        var fd = new FormData();
        
       fd.append('option_number',value);
       fd.append('id',id);
        
       $.ajax({
          url: '<?php echo base_url() . "admin/update_option_number"; ?>',
          type: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          beforeSend: function() {
            // setting a timeout
            $('#preview').html('<img src="<?php echo base_url('assets/dist/img/loader.gif')?>" alt="" width="20px" height="20px">');
          },
          success: function(res){
             var data = JSON.parse(res);
             //console.log(data);
             if(data == 'success'){
                //console.log('success');
                $('#preview').html('');
             } else {
                console.log('error');
                $('#preview').html('<img src="<?php echo base_url('assets/dist/img/error.png')?>" alt="" width="20px" height="20px">');
             }
          },
       });
        

    }
</script>

