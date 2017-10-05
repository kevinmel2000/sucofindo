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
   <!-- begin front message -->
   <?php echo (isset($front_message) ? $front_message : ""); ?>
   <!-- end front message -->
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
               <form action="<?php echo base_url(); ?>index.php/client/method/pelni_add" method="post" class="form-horizontal">
                  <div id="wizard">
                     <ol style="padding-left: 0px;">
                        <li>
                           General Info
                           <small></small>
                        </li>
                        <li>
                           Document Upload
                           <small></small>
                        </li>
                     </ol>
                     <!-- begin wizard step-1 -->
                     <div>
                        <fieldset>
                           <legend class="pull-left width-full">General Info</legend>
                           <!-- begin row -->
<?php 
$form_array[] = array('value' => 'data1','class' => '','type' => 'text', 'title' => 'Vessel', 'id' => 'vessel', 'name' => 'vessel');
$form_array[] = array('value' => 'data2','class' => '','type' => 'text', 'title' => 'Barge', 'id' => 'barge', 'name' => 'barge');
$form_array[] = array('value' => 'data3','class' => '','type' => 'text', 'title' => 'Port', 'id' => 'port', 'name' => 'port');
$form_array[] = array('value' => '2017-01-02 10:20:13','class' => 'datepicker','type' => 'text', 'title' => 'Loading Date', 'id' => 'loading_date', 'name' => 'loading_date');
$form_array[] = array('value' => 'data5','class' => '','type' => 'text', 'title' => 'Delivery Order KL', 'id' => 'deliv_order_kl', 'name' => 'deliv_order_kl');
$form_array[] = array('value' => 'data6','class' => '','type' => 'text', 'title' => 'Delivery Order KL 15<sup>o</sup>C', 'id' => 'deliv_order_kl15', 'name' => 'deliv_order_kl15');
$form_array[] = array('value' => 'data7','class' => '','type' => 'text', 'title' => 'Barge Fix After Loading KL', 'id' => 'bar_fig_afterload_kl', 'name' => 'bar_fig_afterload_kl');
$form_array[] = array('value' => 'data8','class' => '','type' => 'text', 'title' => 'Barge Fix After Loading KL 15<sup>o</sup>C', 'id' => 'bar_fig_afterload_kl15', 'name' => 'bar_fig_afterload_kl15');
$form_array[] = array('value' => 'data9','class' => '','type' => 'text', 'title' => 'Barge Fig. Before Discharge KL', 'id' => 'deliv_order_kl', 'name' => 'deliv_order_kl');
$form_array[] = array('value' => 'data10','class' => '','type' => 'text', 'title' => 'Barge Fig. Before Discharge KL 15 <sup>o</sup>C', 'id' => 'bar_fig_bfdc_kl15', 'name' => 'bar_fig_bfdc_kl15');
$form_array[] = array('value' => 'data11','class' => '','type' => 'text', 'title' => 'Barge Fig. After Discharge KL', 'id' => 'bar_fig_afdc_kl', 'name' => 'bar_fig_afdc_kl');
$form_array[] = array('value' => 'data12','class' => '','type' => 'text', 'title' => 'Barge Fig. After Discharge KL 15 <sup>o</sup>C', 'id' => 'bar_fig_afdc_kl15', 'name' => 'bar_fig_afdc_kl15');
$form_array[] = array('value' => 'data13','class' => '','type' => 'text', 'title' => 'Ship Received (PELNI) KL', 'id' => 'ship_rec_kl', 'name' => 'ship_rec_kl');
$form_array[] = array('value' => 'data14','class' => '','type' => 'text', 'title' => 'Ship Received (PELNI) KL 15 <sup>o</sup>C', 'id' => 'ship_rec_kl15', 'name' => 'ship_rec_kl15');
?>
<table class="table">
<?php foreach($form_array as $o) : ?>
	<tr>
	<td style="width: 150px;"><?php echo $o['title'];?></td>
	<td>
		<input type="text" class="col-xs-4 form-control <?php echo $o['class']; ?>" value="<?php echo $o['value']; ?>" name="<?php echo $o['name'];?>" id="<?php echo $o['id'];?>" />
	</td>
	</tr>
<?php endforeach; ?>
</table>

                              <!-- end col-4 -->
                              <div class="clearfix space-height-10"></div>

                   
                           <!-- end row -->
                        </fieldset>
                     </div>
                     <!-- end wizard step-1 -->
                     <!-- begin wizard step-4 -->
                     <div>
                        <fieldset>
                           <legend class="pull-left width-full">Upload</legend>
                           <!-- begin row -->
                           <div class="row">
                              <div class="col-xs-12">
                                 <table id="tbl_upload_list" class="table">
                                    <tr>
                                       <th>File Name</th>
                                       <th colspan="2">&nbsp;</th>
                                    </tr>
                                    <tr>
                                       <td>
                                          <input type="text" class="form-control" name="filename[]" />
                                       </td>
                                       <td>
                                          <input class="form-control" type="file" name="document_upload[]" style="height:35px;" placeholder="Document Upload" />
                                       </td>
                                       <td>
                                          <button class="btn btn-sm btn-primary"> + </button>
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </fieldset>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash'];?>" />
                              <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/client/page/pelni-form"><i class="fa fa-reply"></i> Back</a>
                              <button type="submit" class="btn btn-success btn-sm">Submit</button>
                           </div>
                        </div>
                     </div>
                     <!-- end wizard step-4 -->
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