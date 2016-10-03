<?php
include("../../common/header_l2.php");
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Book Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Add Book</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Book Details</b></h3>

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
                  <li class="active"><a href="#addBook" data-toggle="tab">Add Book</a></li>
                  <li><a href="#viewBookList" data-toggle="tab">View Books</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="addBook">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Book ISBN No.<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Title<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Edition<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Publisher<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Shelf No.<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Book Cost<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Book Condition<span style="color:#DD0000">*</span></label>
                          <select class="form-control select2">
                            <option value="">Select Option</option>
                            <option value="1">As New</option>
                            <option value="2">Fine</option>
                            <option value="3">Very Good</option>
                            <option value="4">Good</option>
                            <option value="5">Fair</option>
                            <option value="6">Poor</option>
                            <option value="7">Missing</option>
                            <option value="8">Lost</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="req">Book No.<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Author<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Book Category<span style="color:#DD0000">*</span></label>
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
                          <label class="req">No Of Copies<span style="color:#DD0000">*</span></label>
                          <input type='text' value="English" class="form-control" readonly="readonly" />
                        </div>
                        <div class="form-group">
                          <label class="req">Book Position<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                        <div class="form-group">
                          <label class="req">Language<span style="color:#DD0000">*</span></label>
                          <input type='text' class="form-control" />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary form-control">SAVE</button>
                    </div>
                  </div>

                  <div class="tab-pane" id="viewBookList">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="grid-view" id="item-grid">
                          <table class="items">
                            <thead>
                              <tr>
                                <th>Sl.No.</th>
                                <th>Book ISBN No.</th>
                                <th>Book No.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Manage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd">
                                <td width="5%">1</td>
                                <td width="20%">12433454545</td>
                                <td width="20%">234423</td>
                                <td width="40%">Data Structures</td>
                                <td width="20%">As New</td>
                                <td width="5%"><i class="fa fa-eye"></i>&nbsp; <i class="fa fa-times"></i></td>
                              </tr>
                              <tr class="even">
                                <td width="5%">1</td>
                                <td width="20%">12433454545</td>
                                <td width="20%">234423</td>
                                <td width="40%">Data Structures</td>
                                <td width="20%">As New</td>
                                <td width="5%"><i class="fa fa-eye"></i>&nbsp; <i class="fa fa-times"></i></td>
                              </tr>
                            </tbody>
                          </table>
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
