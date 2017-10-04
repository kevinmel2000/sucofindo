		<!-- begin #content -->
		<div id="content" class="content" style="min-width:3000px;">
			<!-- begin breadcrumb -->
			<?php echo (isset($breadcrumb) ? $breadcrumb : ""); ?>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Report <small>General Report Data</small></h1>
			<!-- end page-header -->

            <!-- begin front message -->
            <?php echo (isset($front_message) ? $front_message : ""); ?>

            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label>Client</label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">SMS</option>
                                        </select>
                                    </div>
                                </div> 
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Product</label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">All</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Loading Port</label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">All</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Discharge Port</label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">All</option>
                                        </select>
                                    </div>
                                </div>  
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Vessel </label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">All</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="controls">
                                        <input style="width:200px;" type="text" name="start_date" placeholder="" class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="controls">
                                        <input style="width:200px;" type="text" name="end_date" placeholder="" class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>Loss / Gain </label>
                                    <div class="controls">
                                        <select style="width:200px;" class="form-control select2">
                                            <option value="sms">All</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <!-- begin row -->
            <div class="row">
             <!-- begin col-12 -->
             <div class="col-md-12">
                <!-- begin panel -->
                <table width="100%" cellspacing="0" id="data-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Client</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Action</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Product</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Vessel</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Barge</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Port</td>
                            <td rowspan="2" style="vertical-align: middle;text-align: center;">Date Of Load</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">Delivery Order</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">OGQ On Barge</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">Barge Fix After Loading</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">Barge Fix Before Discharge</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">Barge Fix After Discharge</td>
                            <td colspan="2" style="vertical-align: middle;text-align: center;">Ship Received</td>
                            <td colspan="8" style="vertical-align: middle;text-align: center;">Difference</td>
                        </tr>
                        <tr>
                            <td>K/L</td>
                            <td>KL 15</td>

                            <td>K/L</td>
                            <td>15</td>
                            
                            <td>K/L</td>
                            <td>KL 15 C</td>
                            
                            <td>K/L</td>
                            <td>KL 15 C</td>
                            
                            <td>K/L</td>
                            <td>KL 15 C</td>
                            
                            <td>K/L</td>
                            <td>KL 15 C</td>
                            
                            <td>Diff KL</td>
                            <td>Load.R1</td>
                            <td>Diff KL</td>
                            <td>Tran.R2</td>
                            <td>Diff KL</td>
                            <td>Disc.R3</td>
                            <td>Diff KL</td>
                            <td>Outt.R4</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    </tbody>
                </table>
                <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
		<!-- end #content -->