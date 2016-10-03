<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Institute Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Institute Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Institute Details</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#addInstitute" data-toggle="tab">Add Institute</a></li>
                  <li><a href="#viewInstitue" data-toggle="tab">View Institutes</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="addInstitute">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Institute Name<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>

                        <div class="form-group">
                          <label class="req">Institute Address<span style="color:#DD0000">*</span></label>
                          <textarea type='text' class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Email<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Phone<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Mobile<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Fax<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Admin Contact Person<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Country<span style="color:#DD0000">*</span></label>
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
                          <label class="req">Currency Type<span style="color:#DD0000">*</span></label>
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
                          <label class="req">Language<span style="color:#DD0000">*</span></label>
                          <input type='text' value="English" class="form-control" readonly="readonly" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Code<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Time Zone<span style="color:#DD0000">*</span></label>
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
                          <label class="req">Upload Logo<span style="color:#DD0000">*</span></label>
                          <input type='file'/>
                        </div>
                      </div>
                    </div>




                    <div class="form-group">
                      <button class="btn btn-primary form-control">SAVE</button>
                    </div>
                  </div>

                  <div class="tab-pane" id="viewInstitue">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Institute Name<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>

                        <div class="form-group">
                          <label class="req">Institute Address<span style="color:#DD0000">*</span></label>
                          <textarea type='text' class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Email<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Phone<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Mobile<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Fax<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Admin Contact Person<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Country<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Currency Type<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Language<span style="color:#DD0000">*</span></label>
                          <input type='text' value="English" class="form-control" readonly="readonly" />
                        </div>
                        <div class="form-group">
                          <label class="req">Institute Code<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Time Zone<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Upload Logo<span style="color:#DD0000">*</span></label>
                          <input type='file'/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
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
