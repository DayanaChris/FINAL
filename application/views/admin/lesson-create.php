<?php $this->load->view('admin/inc/top');?>
<style>
.num{
display:none;
}
</style>
 <form role="form" method="post" action="<?php echo base_url()?>lessons/post">
<div class="portlet light bordered ">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> Add Lessons</span>
        </div>
    </div>
    <div class="portlet-body form">
            <div class="form-body">
             <!-- category dropdown -->
             <div class="col-md-4">
                <div class="form-group form-md-line-input">
                  <label for="form_control_1">Category</label>
                    <select name="cat_id" class="form-control">
                    	<?php
          						if($category->num_rows() > 0){
          							foreach($category->result() as $cat){
          						?>
                            <option value="<?php echo $cat->id?>"><?php echo $cat->category_name?></option>
                                  <?php
          							}
          						}
          						?>
                    </select>
                    <span class="help-block">Some help goes here...</span>
                </div>
             </div>
             <div class="col-md-4">

             </div>
             <div class="col-md-4">
               <label for="form_control_1 ">EXAMPLE TEMPLATE for CATEGORY MENU</label> <br>
               <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/category_menu.PNG"   />
             </div>



             <!-- end category dropdown -->




            <div style="clear:both"></div>
		        </div>
       </div>
</div>

<div class="portlet light bordered">


          <div class="portlet-title">
              <div class="caption font-red-sunglo">
                  <i class="icon-settings font-red-sunglo"></i>
                  <span class="caption-subject bold uppercase">Add Lesson Image</span>
                </div>
          </div>

          <div class="col-md-4">
              <div class="form-group form-md-line-input">

                <label for="form_control_1">Lesson Name</label> <br>
                  <input type="text" class="form-control" id="form_control_1" name="lesson_name" value="<?php //echo $value?>" required>
                  <span class="help-block">Some help goes here...</span>
              </div>
              <!-- <label for="form_control_1"><b>NOTE!</b> Please input LESSON NAME separated by underscore " _ " instead of spaces. <br>Example: Letter_A </label> <br> -->
           </div>
            <div class="col-md-4 form-group form-md-line-input" style="margin-top: 0px">
                <label for="form_control_1">Lesson  Image</label> <br>

              <label for="form_control_1"></label>
              <?php
              $count = 0;
              ?>
                <input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="img[]" required>
                <input type="hidden" class="imgId<?php echo $count?>" name="imgid[]" />
                <span class="help-inline"><a  class="btn btn-primary btn-lg active select_img" role="button" aria-pressed="true" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image/gif.</a></span>

                <!-- <span class="help-inline"><a class="select_img" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image.</a></span> -->
                <?php
              $count++;
              ?>
            </div>

              <div class="col-md-4">
                <label for="form_control_1 ">EXAMPLE TEMPLATE for LESSON MENU</label> <br>
                <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/lesson_menu.PNG"   />
              </div>

              <div class="portlet-title">
                  <div class="caption font-red-sunglo">
                      <i class="icon-settings font-red-sunglo"></i>
                      <span class="caption-subject bold uppercase">Add Lesson EXAMPLE IMAGES</span>
                    </div>
              </div>




              <div class="row">




                 <!-- START LESSON EXAMPLE -->
                 <div class="col-md-4">
                   <label for="form_control_1 ">EXAMPLE TEMPLATE</label> <br>
                   <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/lesson_example.PNG"   />
                 </div>
                 <div class="col-md-4">
                 </div>
                 <div class="portlet-body form" style="margin-left: 50px">
                     <div class="col-xs-12">
                         <!-- <div class="col-md-12 caption font-red-sunglo" > -->

                             <div  class="form-horizontal" id="field">
                                 <div id="field0" class="form-body">
                                     <!-- Text input-->
                                     <?php

                                     $count = 1;

                                     for ($char = '1'; $char <= '6'; $char++) {
                                     ?>
                                     <div class="form-group">
                                         <div class="col-md-3">
                                             <div class="form-group form-md-line-input">
                                               <label for="form_control_1">Example Name # <?php echo $count; ?></label> <br>
                                                 <input type="text" class="form-control " id="form_control_1" name="lessonEx[]" value="<?php //echo $value?>">
                                                 <!-- <span class="help-block">Some help goes here...</span> -->
                                             </div>
                                          </div>

                                         <div class="col-md-3 form-group form-md-line-input" style="margin-left: 5px">
                                           <label for="form_control_1">Example Image # <?php echo $count; ?></label> <br>
                                             <input type="text" class="form-control input-inline input-medium imgEx<?php echo $count?>" name="imgEx[]">
                                             <input type="hidden" class="imgIdEx<?php echo $count?>" name="imgidEx[]" />

                                             <span class="help-inline"><a  class="btn btn-primary btn-lg active select_img" role="button" aria-pressed="true" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image/gif.</a></span>

                                             <!-- <span class="help-inline"><a class="select_img" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image.</a></span> -->
                                         </div>

                                     </div>
                                     <?php
                                   $count++;
                                     }
                                   ?>

                                 </div>
                             <!-- </div> -->
                             <div style="clear:both"></div>
                             <!-- Button -->
                         </div>
                     </div>
                       <div style="clear:both"></div>
                 </div>

                 </div>
         <!-- END LESSON EXAMPLE -->


</div>


<!-- <div class="container">
	<div class="row">
        <div class="col-md-6">
    		<h2>Custom search field</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div> -->


<div class="form-actions noborder">
    <button type="submit" class=" success_quiz_add btn blue">Submit</button>
    <a href="<?php echo base_url()?>lesson" class="btn default">Cancel</a>
</div>

 </form>

 <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" style="width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"></h4>

                    <!-- <h2>search field</h2>
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="search" />

                            </div>
                        </div> -->
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
