		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header"><?php echo (isset($page_header) ? $page_header : ""); ?></h1>
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
                        <h4 class="panel-title">Add Project Category - Table</h4>
                    </div>
                    <div class="panel-body">
                    <form action="<?php echo base_url(); ?>index.php/projcat/add_data/" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Project Category Name</label>
                                        <div class="controls">
                                            <input type="text" name="projcat_name" value="" class="form-control" />
                                            <?php  echo form_error('projcat_name', '<label class="error-red">', '</label>'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix space-height-10"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/projcat/"><i class="fa fa-reply"></i> Back</a>
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Submit</button>
                                    <input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash'];?>" />
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