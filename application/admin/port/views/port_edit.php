		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Port <small>Port Edit Data</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Edit Port - Table</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url(); ?>index.php/port/confirm_update/">
                                <div class="row">
                                <?php foreach($port->result() as $row) { ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Port Name</label>
                                            <div class="controls">
                                                <input type="text" name="port_name" value="<?php echo $row->port_name; ?>" class="form-control" />
                                            </div>
                                            <?php  echo form_error('port_name', '<label class="error-red">', '</label>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Port Type</label>
                                            <div class="controls">
                                                <input type="text" name="port_type" value="<?php echo $row->port_type; ?>" class="form-control" />
                                                <input type="hidden" name="port_id" value="<?php echo $row->id; ?>" />
                                            </div>
                                            <?php  echo form_error('port_type', '<label class="error-red">', '</label>'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="clearfix space-height-10"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/port/"><i class="fa fa-reply"></i> Back</a>
                                        <input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash'];?>" />
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->