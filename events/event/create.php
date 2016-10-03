<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Events</a></li>
        <li class="active">Add Event</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Add Event</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label class="req">Event Name <span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control"/>
              </div>
              <div class="form-group">
                <label class="req">Holiday ? <span style="color:#DD0000"><input type="checkbox"/></span></label>
              </div>

              <div class="form-group">
                <label class="req">Event Type<span style="color:#DD0000">*</span></label>
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
                <label class="req">Description <span style="color:#DD0000">*</span></label>
                <textarea class="form-control"></textarea>
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
                <label class="req">Organizer / Incharge Name <span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control"/>
              </div>
              <div class="form-group">
                <label class="req">Event For<span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                  <option>Common To All</option>
                  <option>Selected Batch</option>
                  <option>Selected Department</option>
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
              <h3 class="box-title"><b>Existing Events</b></h3>

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
                      <th>Name</th>
                      <th>Holiday</th>
                      <th>Type</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Organizer/Incharge</th>
                      <th>Event For</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="20%">Neuro PT</td>
                      <td width="2%">Yes</td>
                      <td width="20%">Cool Dude</td>
                      <td width="40%">23-Oct-2018</td>
                      <td width="40%">23-Oct-2018</td>
                      <td width="40%">Mustafa</td>
                      <td width="40%">Common To All</td>
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
