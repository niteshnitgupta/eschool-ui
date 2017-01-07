<?php

include("../../../apis/db_connection.php");

if ( isset ($_POST["id"]) && $_POST["id"] != null  )
{
	$id = $_POST['id'] ;
}


if ( isset ($_POST["dept_name"]) && $_POST["dept_name"] != null  )
{
	$name = $_POST['dept_name'] ;
}

if ( isset( $name ) )
{
	if ( isset($id)  )
	{
		$query = "UPDATE departments set name='" .$name. "' where id = " .$id. " ;" ;
		echo $query ;
		$result = $conn->query($query);
	}
	else
	{
		$institute_id = 1 ;
		$query = "INSERT INTO departments ( name , institute ) values ( '" .$name. "' , " .$institute_id. " ) ;" ;
		echo $query ;
		$result = $conn->query($query);		
	}
	
}

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
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Add New Department</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            
			<form method="post">
				<div class="box-body">
				  <div class="form-group">
					<label class="req">Department Name <span style="color:#DD0000">*</span></label>
					<input type="text" class="form-control" name ="dept_name"/>
					<?php 
					if (isset($id ))
					{
						echo '<input type="hidden" class="form-control" name ="id" value= "' .$id. '" /> ' ;
					}
					?>

					
				  </div>

				  <div class="form-group">
					<button class="btn btn-primary form-control">SAVE</button>
				  </div>
				</div>
				<!-- /.box-body -->
			</form>
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
				  
				  <?php 
				  
				  $query = "select * from departments" ;
				  $result = $conn->query($query);
				  
				  if ($result)
				  {
					  $i = 0 ;
					  while ( $current_row = $result->fetch_assoc() )
					  {
						  $i++ ;
						  echo '<tr class="odd">
						  <td width="10%">'. $i .'</td>
						  <td width="40%">'. $current_row['name'] .'</td>
						  <td width="10%">
						  <form method = "POST">
						  
							<input type="hidden" class="form-control" name ="id" value= "' .$current_row['id']. '" />
							<input type="hidden" class="form-control" name ="dept_name" value= "' .$current_row['name']. '" />
							<input type="hidden" class="form-control" name ="action" value= "E" />
							
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-pencil" style="padding-right:10px;"></i></button>
						  </form>
						  <form method = "POST">
						  
							<input type="hidden" class="form-control" name ="id" value= "' .$current_row['id']. '" />
							<input type="hidden" class="form-control" name ="dept_name" value= "' .$current_row['name']. '" />
							<input type="hidden" class="form-control" name ="action" value= "D" />

							
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-minus"></i></button>
						  </form>
						  </td>
						  </tr>' ;
					  }
				  }
					?>
				  
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
