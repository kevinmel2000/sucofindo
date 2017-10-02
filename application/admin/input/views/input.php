        <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">General Form</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">General Form <small>Wizard for general info, time sheet, quality, quantity & remarks.</small></h1>
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
                            <h4 class="panel-title">Form Wizards</h4>
                        </div>
                        <div class="panel-body">
                            <form action="http://www.seantheme.com/" method="POST">
								<div id="wizard">
									<ol>
										<li>
										    General Info
										    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
										</li>
										<li>
										    Time Sheet
										    <small>Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin.</small>
										</li>
										<li>
										    Quality
										    <small>Phasellus lacinia placerat neque pretium condimentum.</small>
										</li>
										<li>
										    Quantity
										    <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
										</li>
                                        <li>
                                            Document Upload
                                            <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                                        </li>
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">General Info</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <label>Delivery Orders</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Delivery Order Number" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Delivery Order Date</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Delivery Order Date" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Vessel Name</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Vessel Name" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Cargo</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Cargo" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Port</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Port" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Barge name</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Barge name" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Loading Date</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Loading Date" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Bunker / Discharge Date</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="vessel_name" placeholder="Bunker / Discharge Date" class="form-control" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									<!-- begin wizard step-2 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Time Sheet</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
													<div class="form-group">
														<label>Jenis Pemuatan</label>
                                                        <select id="jenis_pemuatan" class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-white">
                                                            <option value="-" selected>Belum Memilih</option>
                                                            <option value="pemuatan">Loading</option>
                                                            <option value="pengisian">Discharge</option>
                                                        </select>
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                            </div>
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tongkang Sandar</label>
                                                        <div class="controls">
                                                            <input type="text" name="tongkang_sandar" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pemeriksaan Awal</label>
                                                        <div class="controls">
                                                            <input type="text" name="pemeriksaan_awal" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mulai Pengisian</label>
                                                        <div class="controls">
                                                            <input type="text" name="mulai_pengisian" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Selesai Pengisian</label>
                                                        <div class="controls">
                                                            <input type="text" name="selesai_pengisian" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pemeriksaan Akhir</label>
                                                        <div class="controls">
                                                            <input type="text" name="pemeriksaan_akhir" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Sampling</label>
                                                        <div class="controls">
                                                            <input type="text" name="sampling" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Perhitungan Selesai</label>
                                                        <div class="controls">
                                                            <input type="text" name="perhitungan_selesai" placeholder="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->

                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Quality</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Density @15</label>
                                                        <div class="controls">
                                                            <input type="text" name="density" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Water Content</label>
                                                        <div class="controls">
                                                            <input type="text" name="water_content" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Sulfur Content</label>
                                                        <div class="controls">
                                                            <input type="text" name="sulfur_content" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4-->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Cetane Index / Number</label>
                                                        <div class="controls">
                                                            <input type="text" name="cetane_index" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4-->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Flash Point</label>
                                                        <div class="controls">
                                                            <input type="text" name="Flash Point" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4-->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Color Product</label>
                                                        <div class="controls">
                                                            <input type="text" name="Flash Point" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4-->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
									</div>
									<!-- end wizard step-3 -->
                                    <!-- begin wizard step-4 -->
                                    <div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Quantity</legend>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" name="quantity" value="DO" class="form-control" readonly="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Initial</label>
                                                        <div class="controls">
                                                            <input type="text" name="initial" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Track</label>
                                                        <div class="controls">
                                                            <input type="text" name="track" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <input type="text" name="desc" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" name="quantity" value="Tongkang -A/L" class="form-control" readonly="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Initial</label>
                                                        <div class="controls">
                                                            <input type="text" name="initial" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Track</label>
                                                        <div class="controls">
                                                            <input type="text" name="track" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <input type="text" name="desc" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" name="quantity" value="Tongkang -B/D" class="form-control" readonly="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Initial</label>
                                                        <div class="controls">
                                                            <input type="text" name="initial" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Track</label>
                                                        <div class="controls">
                                                            <input type="text" name="track" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <input type="text" name="desc" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" name="quantity" value="Kapal" class="form-control" readonly="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Initial</label>
                                                        <div class="controls">
                                                            <input type="text" name="initial" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Track</label>
                                                        <div class="controls">
                                                            <input type="text" name="track" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <input type="text" name="desc" value="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- end row -->
                                        </fieldset>
                                    </div>
                                    <!-- end wizard step-4 -->
									<!-- begin wizard step-5 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Upload</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <table class="table">
                                                        <tr>
                                                            <th>File Name</th>
                                                            <th colspan="2">&nbsp;</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="filename[]" />
                                                            </td>
                                                            <td>
                                                                <input type="file" name="document_upload[]" style="height:35px;" placeholder="Document Upload" />
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"> + </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </fieldset>
									</div>
									<!-- end wizard step-5 -->
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