<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Elective Subjects
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Subjects</a></li>
        <li class="active">Elective Subjects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Elective Subjects</b></h3>

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
              <div class="form-group">
                <label class="req">Subject<span style="color:#DD0000">*</span></label>
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
                <label class="req">Students<span style="color:#DD0000">*</span></label>
                <select class="form-control select2" multiple="multiple">
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
              <h3 class="box-title"><b>Existing Assigned Subjects</b></h3>

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
                      <th>Student</th>
                      <th>Subject</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="5%">1</td>
                      <td width="10%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="30%">Nisha</td>
                      <td width="40%">Project discussion  -  Proj IV</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="5%">2</td>
                      <td width="15%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="30%">Rinku</td>
                      <td width="40%">Neuroscience</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="odd">
                      <td width="5%">3</td>
                      <td width="10%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="30%">Mustu</td>
                      <td width="40%">Community Health</td>
                      <td width="5%"><i class="fa fa-times"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="5%">4</td>
                      <td width="10%">IV B.P.Th</td>
                      <td width="10%">IV</td>
                      <td width="30%">Ankit</td>
                      <td width="40%">Musculo</td>
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
});
</script>
