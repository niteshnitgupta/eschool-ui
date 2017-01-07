<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Department Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Departments</a></li>
        <li class="active">Modify</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Modify Department</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label class="req">Department Name <span style="color:#DD0000">*</span></label>
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
              <h3 class="box-title"><b>Existing Departments</b></h3>

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
                      <th>Department Name</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
				  
                    <tr class="odd">
                      <td width="10%">1</td>
                      <td width="40%">Musculoskeletal PT</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="10%">2</td>
                      <td width="40%">Community PT</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i></td>
                    </tr>
                    <tr class="odd">
                      <td width="10%">3</td>
                      <td width="40%">Neuro PT</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i></td>
                    </tr>
                    <tr class="even">
                      <td width="10%">4</td>
                      <td width="40%">CardioVascular and Respiratory PT</td>
                      <td width="10%"><i class="fa fa-pencil" style="padding-right:10px;"></i></td>
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
