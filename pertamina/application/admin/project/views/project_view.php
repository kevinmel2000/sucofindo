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
                            <h4 class="panel-title">Preview Project - Table</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url(); ?>index.php/project/update_data/" method="post">
                                <div class="row">
                                <?php foreach($project->result() as $row) { ?>
                                    <div class="col-xs-12 col-md-12">
                                        <table class="table">
                                            <tr>
                                                <td>Project Name</td>
                                                <td><input type="text" readonly="" name="project_name" value="<?php echo $row->project_name; ?>" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td>Project Category</td>
                                                <td><input type="text" readonly="" name="projcat_name" value="<?php echo $row->projcat_name; ?>" class="form-control" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                <?php } ?>
                                </div>
                            </form>
                            <div class="clearfix space-height-10"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/project/"><i class="fa fa-reply"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->