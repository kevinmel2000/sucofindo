		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Port <small>Port Confirm Update Data</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
                    <form method="post" action="<?php echo base_url(); ?>index.php/port/update_data/">
						<div class="row">
			                <div class="col-md-12">
			                    <div class="alert alert-danger alert-dismissible" role="alert">
			                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                      <strong><i class="fa fa-info-circle"></i>  Are you sure update this data? </strong>
			                      <input type="hidden" name="port_id" value="<?php echo $port_id; ?>" />
			                      <input type="hidden" name="port_name" value="<?php echo $port_name; ?>" />
			                      <input type="hidden" name="port_type" value="<?php echo $port_type; ?>" />
			                    </div>
			                </div>
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
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->