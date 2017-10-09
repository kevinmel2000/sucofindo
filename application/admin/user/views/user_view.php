<!-- begin #content -->
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">User Management <small>Function to create user</small></h1>
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
                    	<a href="<?php echo base_url(); ?>index.php/user/add" class="btn btn-xs btn-icon btn-circle btn-primary" ><i class="fa fa-plus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">User Management - Table</h4>
                </div>
                <div class="panel-body" style="overflow-x: hidden;">
                	<table class="table table-striped">
                		<tr>
                			<th>No</th>
                            <th>Photo</th>
                			<th>Username</th>
                			<th>Email</th>
                			<th>Firstname</th>
                			<th>Lastname</th>
                			<th>Status (Active)</th>
                			<th>Function</th>
                		</tr>
                		<?php 
                		$no = 1;
                		if($all_items->num_rows() > 0) :
                		foreach($all_items->result() as $row) : 
                		?>
                		<tr>
                		<td><?php echo $no; ?></td>
                        <td><?php echo img(array('style' => 'border-radius:4px;','height' => '50px', 'width' =>'45px', 'src' => base_url().'uploads/profile/'.$row->PHOTO)); ?></td>
                        <td>
                            <?php echo $row->USERNAME; ?> 
                        </td>
                        <td><?php echo $row->EMAIL; ?></td>
                        <td><?php echo $row->FIRST_NAME; ?></td>
                        <td><?php echo $row->LAST_NAME; ?></td>
                        <td><?php echo $row->STATUS; ?></td>
                		<td>
                			<a href="<?php echo base_url(); ?>index.php/user/edit/<?php echo $row->USR_ID; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <?php if($row->STATUS == 'Y') : ?>
                            <a onclick="return confirm('are you sure ?')" href="<?php echo base_url(); ?>index.php/user/suspend/<?php echo $row->USR_ID; ?>" class="btn btn-warning btn-sm"><i class="fa fa-hand-paper-o"></i> Suspend</a>
                			<?php elseif ($row->STATUS == 'N') : ?>
                            <a onclick="return confirm('are you sure ?')" href="<?php echo base_url(); ?>index.php/user/release/<?php echo $row->USR_ID; ?>" class="btn btn-success btn-sm"><i class="fa fa-hand-paper-o"></i> Release</a>
                            <?php endif; ?>
                            <a onclick="return confirm('are you sure ?')" href="<?php echo base_url(); ?>index.php/user/delete/<?php echo $row->USR_ID; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</a>
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