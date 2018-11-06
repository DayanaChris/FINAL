<?php $this->load->view('admin/inc/top');?>
 <form role="form" method="post" action="<?php echo base_url()?>quiz/post">
   <div class="portlet light bordered">


             <div class="portlet-title">
                 <div class="caption font-red-sunglo">
                     <i class="icon-settings font-red-sunglo"></i>
                     <span class="caption-subject bold uppercase">Add New Question</span>
                   </div>
             </div>

             <div class="col-md-4 row">
                 <div class="form-group form-md-line-input">
                   <!-- category dropdown -->
                   <!-- <div class="col-md-4"> -->
                      <div class="form-group form-md-line-input">
                          <select name="category_id" class="form-control">
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
                          <label for="form_control_1">Category</label>
                          <span class="help-block">Some help goes here...</span>
                      </div>


                      <div class="form-group form-md-line-input">
                        <select name="level_id" class="form-control">
                         <?php
                           if($level->num_rows() > 0){
                             foreach($level->result() as $lev){
                           ?>
                                         <option value="<?php echo $lev->id?>"><?php echo $lev->level_name?></option>
                                        <?php
                             }
                           }
                           ?>
                        </select>
                        <label for="form_control_1">LEVEL</label>
                          <span class="help-block">Some help goes here...</span>





                      </div>





                   <!-- </div> -->
                 </div>
              </div>
              <div class="row">
                <div class="form-group form-md-line-input">
                  <!-- category dropdown -->
                  <!-- <div class="col-md-4"> -->
                  <div class="form-group">



                  <div class="col-md-4">
                  Background Color:
                    <input type="text" class="form-control jscolor" id="form_control_1" name="background" value="A56EAB" required>
                    <span class="help-block">Some help goes here...</span>
                  </div>



                  <div class="col-md-4">
                      <div class="form-group form-md-line-input">
                          <input type="text" class="form-control" id="form_control_1" name="template_num" value="<?php //echo $value?>" required>
                          <label for="form_control_1">TEMPLATE #</label>
                          <span class="help-block">Some help goes here...</span>
                      </div>
                      <label for="form_control_1">EXAMPLE TEMPLATES</label>
                      <br>
                      <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">open to view templates <img class="  "  style="width:10%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Action Words/__Lesson/lesson_sleeping.png"  alt="sleeping"  ></button> -->
                       <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/images/lesson_example/temp1.PNG"  alt="sleeping"  >
                       Template #1
                       <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/images/lesson_example/temp2.PNG"  alt="sleeping"  >
                       Template #2
                       <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/images/lesson_example/temp3.PNG"  alt="sleeping"  >
                       Template #3
                       <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/images/lesson_example/temp5.PNG"  alt="sleeping"  >
                       Template #4

                   </div>
                </div>
                  <!-- </div> -->
                </div>
              </div>






   </div>



   <div class="portlet light bordered ">
       <div class="portlet-title">
           <div class="caption font-red-sunglo">
               <i class="icon-settings font-red-sunglo"></i>
               <span class="caption-subject bold uppercase"> New Question</span>
           </div>
       </div>
       <div class="portlet-body form">
               <div class="form-body">
                 <div class="col-md-4">
                     <div class="form-group form-md-line-input">
                         <input type="text" class="form-control" id="form_control_1" name="question" value="<?php //echo $value?>" required>
                         <label for="form_control_1">Question</label>
                         <span class="help-block">Some help goes here...</span>
                     </div>
                  </div>



                <!-- Question title input-->
                <div class="form-group">
                  <div class="col-md-4">

                  <div class="form-group form-md-line-input">
                   <?php
                   $count = 0;
                   ?>
                     <input type="text" class="form-control input-inline input-medium img10 " name="question_image" />
                     <label for="form_control_1">Question Title Image</label>
                     <span class="help-inline"><a  class="btn btn-primary btn-lg active select_img" role="button" aria-pressed="true" id="10"  data-toggle="modal" href="#static">Upload or select image.</a></span>

                     <?php
                   $count++;
                   ?>
                 </div>
               </div>
               <!-- <div class="col-md-3">
                 <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/uploads/<?php echo  $les_data->question_image; ?>"  alt="sleeping"  >
               </div> -->

               </div>


<!--
               <div class="col-md-4" >
                 <label for="form_control_1 ">EXAMPLE TEMPLATE FOR QUESTION TITLE IMAGE</label> <br>
                 <img  class="image-fluid float-right" style="width:100%;  "  src="<?php echo site_url(); ?>assets/images/lesson_example/lesson_menu.PNG"   />
               </div> -->




                <!-- end category dropdown -->




               <div style="clear:both"></div>
   		        </div>
          </div>
   </div>











    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="icon-settings font-red-sunglo"></i>
                <span class="caption-subject bold uppercase"> Choices</span>
            </div>
    <!-- REMOVED ADD MORE -->
        </div>




      <div class="row">

        <div class="col-md-4">
        </div>

         <div class="portlet-body form" style="margin-left: 50px">
             <div class="col-xs-12">
                 <!-- <div class="col-md-12 caption font-red-sunglo" > -->

                     <div  class="form-horizontal" id="field">
                         <div id="field0" class="form-body">
                           <label for="form_control_1">The first input is for the correct answer.</label> <br>

                             <!-- Text input-->
                             <?php
                   						$count = 0;
                   						for ($char = 'A'; $char <= 'D'; $char++) {
                   						?>

                               <?php
                   						$count++;
                   							}
                   						?>


                           <?php
                             $count = 0;
                             for ($char = 'A'; $char <= 'D'; $char++) {
                             ?>
                             <div class="form-group">
                                 <div class="mt-radio-list col-md-1">
                                     <label class="mt-radio"> <?php echo $char?>
                                         <input <?php if($char == 'A'){?>checked<?php }?> type="radio" value="<?php echo $count?>" name="answer[]" />
                                         <span></span>
                                     </label>
                                 </div>
                                 <div class="col-md-6 form-group form-md-line-input" style="margin-left: 5px">
                                   <!-- <label for="form_control_1">Choice Image # <?php echo $count; ?></label> <br> -->
                                     <input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="img[]">
                                     <input type="hidden" class="imgId<?php echo $count?>" name="imgid[]" />

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
    </div>



    <div class="form-actions noborder">
        <button type="submit" class="success_quiz_add btn blue">Submit</button>
        <a href="<?php echo base_url()?>" class="btn default">Cancel</a>
    </div>
</form>

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
    <script src="<?php echo base_url(); ?>assets/jscolor.js"></script>

<?php $this->load->view('admin/inc/footer');?>
