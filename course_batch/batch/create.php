<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Batch
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Subjects</a></li>
        <li class="active">Add Batch</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Add Batch</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
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
              <div class="form-group">
                <label class="req">Batch  Name<span style="color:#DD0000">*</span></label>
                <input type='text' class="form-control" />
              </div>
              <div class="form-group">
                <label class="req">Start Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="startdate">
              </div>
              <div class="form-group">
                <label class="req">End Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="enddate">
              </div>
              <div class="form-group">
                <label class="req">Maximum Number of Students<span style="color:#DD0000">*</span></label>
                <input type='text' class="form-control" />
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
              <h3 class="box-title"><b>Existing Batch</b></h3>

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
                      <th>Course</th>
                      <th>Batch</th>
                      <th>Max No. Of Stud.</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="20%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="10%">20</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">09/012/2016</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="10%">2</td>
                      <td width="20%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="10%">25</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">09/012/2016</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="odd">
                      <td width="10%">3</td>
                      <td width="20%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="10%">43</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">09/012/2016</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="10%">4</td>
                      <td width="20%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="10%">23</td>
                      <td width="20%">09/07/2016</td>
                      <td width="20%">09/012/2016</td>
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
