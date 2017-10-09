<!-- begin #content -->
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Function Access <small>Function to create user permissions on the menu page</small></h1>
	<!-- end page-header -->

    <!-- begin front message -->
    <?php echo (isset($front_message) ? $front_message : ""); ?>
    <!-- end front message -->

	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-xs-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                    	<a href="<?php echo base_url(); ?>index.php/function_access/add" class="btn btn-xs btn-icon btn-circle btn-primary" ><i class="fa fa-plus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Function Access - Table</h4>
                </div>
                <div class="panel-body" style="overflow-x: hidden;">
                	<table class="table table-striped">
                		<tr>
                			<th>No</th>
                			<th>Group Name</th>
                			<th>Function</th>
                		</tr>
                		<?php 
                		$no = 1;
                		if($all_items->num_rows() > 0) :
                		foreach($all_items->result() as $row) : 
                		?>
                		<tr>
                		<td><?php echo $no; ?></td>
                		<td><?php echo $row->GROUP_NAME; ?></td>
                		<td>
                			<a href="<?php echo base_url(); ?>index.php/function_access/edit/<?php echo $row->GROUP_ID; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                			<a onclick="return confirm('are you sure ?')" href="<?php echo base_url(); ?>index.php/function_access/delete/<?php echo $row->GROUP_ID; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</a>
                		</td>
                		</tr>
                		<?php 
                		$no++;
                		endforeach;
                		endif; ?>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>