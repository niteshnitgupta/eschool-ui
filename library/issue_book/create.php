<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issue Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Books Issue</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Issue Book</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label class="req">ISBN Number <span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control"/>
              </div>
              <div class="form-group">
                <label class="req">User Type<span style="color:#DD0000">*</span></label>
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
                <label class="req">User ID<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="startdate">
              </div>
              <div class="form-group">
                <label class="req">Book Issue Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="startdate">
              </div>
              <div class="form-group">
                <label class="req">Due Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="enddate">
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
              <h3 class="box-title"><b>Existing Books Issued</b></h3>

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
                      <th>ISBN No.</th>
                      <th>User ID</th>
                      <th>Book Issue Date</th>
                      <th>Due Date</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="20%">11223322</td>
                      <td width="20%">789879</td>
                      <td width="30%">23-Oct-2018</td>
                      <td width="30%">23-Oct-2018</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
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
include("../../common/footer_l2.php");
?>
<script>
$(function () {
  $(".select2").select2();
  $('.datepicker').datepicker({
      autoclose: true
  });
});
</script>
