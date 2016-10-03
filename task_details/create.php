<?php
include("../common/header_l1.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Task
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Task Details</a></li>
        <li class="active">Add Task</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Add Task</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="form-group">
                <label class="req">Task<span style="color:#DD0000">*</span></label>
                <input type='text' class="form-control" />
              </div>
              <div class="form-group">
                <label class="req">Description<span style="color:#DD0000">*</span></label>
                <input type='text' class="form-control" />
              </div>

              <div class="form-group">
                <label class="req">Priority<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label class="req">Task Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="taskdate">
              </div>

              <div class="form-group">
                <label class="req">User type<span style="color:#DD0000">*</span></label>
                <select class="form-control select2" id="selectUserType">
                  <option>Student</option>
                  <option selected="selected">Employee</option>
              </select>
              </div>

              <div class="form-group employee">
                <label class="req">Department<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group employee">
                <label class="req">Employee (Press Ctrl to select more than 1 Employee)<span style="color:#DD0000">*</span></label>
                <select class="form-control select2" multiple>
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>























              <div class="form-group student">
                <label class="req">Course<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group student">
                <label class="req">Batch<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group student">
                <label class="req">Student (Press Ctrl to select more than 1 Student)<span style="color:#DD0000">*</span></label>
                <select class="form-control select2" multiple>
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>




              <div class="form-group">
                <label class="req">Status<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <?php
                    for($i=2026; $i>2000; $i--)
                    {
                  ?>
                      <option><?php echo $i; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <button class="btn btn-primary form-control">SAVE</button>
              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Existing Tasks</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="grid-view" id="item-grid">
                <table class="items">
                  <thead>
                    <tr>
                      <th>Sl.No.</th>
                      <th>Task</th>
                      <th>Priority</th>
                      <th>User Name</th>
                      <th>Task Date</th>
                      <th>Status</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="20%">Check Papers</td>
                      <td width="10%">IV</td>
                      <td width="10%">Natasha</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">Resolved</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i><i class="fa fa-close" style="padding-right:10px;"></i></td>
                    </tr>
                    <tr class="odd">
                      <td width="10%">2</td>
                      <td width="20%">Prepare Reports</td>
                      <td width="10%">IV</td>
                      <td width="10%">Sujata</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">Resolved</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i><i class="fa fa-close" style="padding-right:10px;"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("../common/footer_l1.php");
?>
<script>
$(function () {
  $(".select2").select2();

  $('.datepicker').datepicker({
      autoclose: true
  });
  $(".student").hide(); 
  $("#selectUserType").change(function(){
    if($(this).val() == "Student") {
      $(".employee").slideUp();
      $(".student").slideDown();  
    } else {
      $(".student").slideUp();
      $(".employee").slideDown();
    }
    
  });
});
</script>
