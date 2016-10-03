<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Return Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Books Return</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Return Book</b></h3>

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
                <label class="req">Return / Renew <span style="color:#DD0000">*</span></label>
                <select class="form-control select2">
                    <option>Return</option>
                    <option>Renew</option>
                </select>
              </div>
              
              <div class="form-group return">
                <label class="req">Book Return Date<span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control datepicker" id="startdate">
              </div>
              <div class="form-group return">
                <label class="req">Fine Amount <span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control"/>
              </div>
              <div class="form-group return">
                <label class="req">Remarks <span style="color:#DD0000">*</span></label>
                <input type="text" class="form-control"/>
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
              <h3 class="box-title"><b>Returned Books</b></h3>

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
                      <th>Book Return Date</th>
                      <th>Fine Amount</th>
                      <th>Remarks</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="20%">11223322</td>
                      <td width="25%">23-Oct-2018</td>
                      <td width="20%">23</td>
                      <td width="25%">Late Return</td>
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
