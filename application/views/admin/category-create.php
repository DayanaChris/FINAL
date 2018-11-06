<?php $this->load->view('admin/inc/top');?>
<?php
$name = 'categoryadd';
$value = '';
$name_img = 'category_image';
$image = '';
$category_image_title = 'category_image_title';
$cat_image = '';
$template_num = 'template_num';
$template = '';
$select_img = 'select_img';


if($is_edit == true){
	if($category_details->num_rows() > 0){
		$cat = $category_details->row();
		$name = 'categoryedit';
		$value = $cat->category_name;

		$name_img = 'category_image_edit';
		$image = $cat->category_image;

		$category_image_title = 'category_image_title';
		$cat_image = $cat->category_image_title;

		$template_num = 'template_num';
		$template = $cat->$template_num;

		$select_img = 'select_img_edit';
	}
}
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> New Category</span>
        </div>

    </div>
    <div class="portlet-body form">
        <form role="form" method="post" action="<?php echo base_url()?>category/post">
            <div class="form-body">
                <div class="form-group form-md-line-input">
                    <input onmousedown="mouseclick.play()" type="text" class="form-control" id="form_control_1" name="<?php echo $name?>" value="<?php echo $value?>" required>
                    <label for="form_control_1" class="col-sm-2 col-form-label">Category name</label>

                </div>
            </div>

						<!--CATEGORY IMAGE  -->
						  <div class="form-group form-md-line-input row">
								<label for="form_control_1" class="col-sm-2 col-form-label">Category  Image</label>

								<div class="col-md-4  ">
									<input onmousedown="mouseclick.play()" type="text" class="form-control input-inline input-medium img1" name="<?php echo $name_img?>" value="<?php echo $image?>" required />
									<span class="help-inline"><a  class="btn btn-primary btn-lg active <?php echo $select_img ?>" role="button" aria-pressed="true" id="1"  data-toggle="modal" onmousedown="mouseclick.play()" href="#static">Upload or select image.</a></span>
									<!-- <span class="help-inline"><a class="select_img" id="1"  data-toggle="modal" href="#static">Upload or select image.</a></span> -->
						    </div>

								<div class="col-md-4">
	                <label for="form_control_1 ">EXAMPLE TEMPLATE for CATEGORY MENU</label> <br>
									 <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/category_menu.PNG"   />
	                <!-- <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/category_title.PNG"   /> -->
	              </div>

						  </div>

							<!--CATEGORY TITLE  -->
							<div class="form-group row form-md-line-input row">
								<label for="form_control_1" class="col-sm-2 col-form-label">Category Title Image</label>

								<div class="col-md-4  ">

								 <input onmousedown="mouseclick.play()" type="text" class="form-control input-inline input-medium img2 "  name="<?php echo $category_image_title?>" value="<?php echo $cat_image?>" required>
								 <span class="help-inline"><a  class="btn btn-primary btn-lg active <?php echo $select_img ?>" role="button" aria-pressed="true" id="2"  data-toggle="modal" onmousedown="mouseclick.play()" href="#static">Upload or select image.</a></span>

								 <!-- <span class="help-inline"><a class="select_img" id="2"  data-toggle="modal" href="#static">Upload or select image.</a></span> -->
																 <!-- <span class="help-block">Some help goes here...</span> -->

						    </div>
								<div class="col-md-4">
	                <label for="form_control_1 ">EXAMPLE TEMPLATE for SUBCATEGORY MENU</label> <br>
	                <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/category_title.PNG"   />

								</div>
						  </div>

							<!--TEMPLATE NUMBER  -->
							<div class="form-group row form-md-line-input hidden">
								<label for="form_control_1" class="col-sm-2 col-form-label">TEMPLATE #</label>

								<div class="col-md-1  ">
									<input onmousedown="mouseclick.play()" type="text" class="form-control" id="form_control_1" name="<?php echo $template_num?>" value="1" required>
									<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">open to view templates </button>

								</div>
							</div>


							<!-- <div id="myModal" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <div class="modal-content">
							      <div class="modal-header">
							        <button onmousedown="mouseclick.play()" type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Quiz Templates Example</h4>
							      </div>
							      <div class="modal-body">
							        <p>Some Template Examples.</p>
							        Template #1
							        <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp1.PNG" width="80%"   alt="welcome"  >
							Template #2
							        <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp2.PNG" width="80%"   alt="welcome"  >
							Template #3
							        <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp3.PNG" width="80%"   alt="welcome"  >
							        Template #4
							                <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp4.PNG" width="80%"   alt="welcome"  >
							                Template #5
							                        <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp5.PNG" width="80%"   alt="welcome"  >
							                        Template #6
							                                <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp6.PNG" width="80%"   alt="welcome"  >
							                                Template #7
							                                        <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/lesson_example/temp7.PNG" width="80%"   alt="welcome"  >


							      </div>
							      <div class="modal-footer">
							        <button onmousedown="mouseclick.play()" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

							  </div>
							</div> -->










            <div class="form-actions noborder">

                <button onmousedown="mouseclick.play()" type="submit" class="success_category_add btn blue">Submit</button>
                <a  onmousedown="mouseclick.play()" href="<?php echo base_url()?>category" class=" btn default">Cancel</a>
            </div>
            <?php if($is_edit == true){?>
            	<input onmousedown="mouseclick.play()" type="hidden" name="catid" value="<?php echo $cat->id?>" />
            <?php }?>
        </form>
    </div>
</div>




<!-- <div class="form-actions noborder">
    <button type="submit" class="btn blue">Submit</button>
    <a href="<?php echo base_url()?>quiz" class="btn default">Cancel</a>
</div> -->


 <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" style="width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="button" data-dismiss="modal" class="btn green">Continue Task</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('admin/inc/footer');?>
