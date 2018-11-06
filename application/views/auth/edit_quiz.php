<?php $this->load->view('admin/inc/top');?>
 <form role="form" method="post" action="<?php echo base_url()?>quiz/update">
   <input type="hidden" name="id" value="<?php echo $id; ?>">

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
                       <?php
                         // var_dump($categ_id_val->result());
                         $cat_id_val = $categ_id_val->result();
                        ?>
                       <select name="category_id" class="form-control">
                         <?php

                         if($category->num_rows() > 0){
                           foreach($category->result() as $cat){
                         ?>
                               <option value="<?php echo $cat->id?>"
                                 <?php
                                   if($cat->id == $cat_id_val[0]->category_id)
                                     echo "selected";
                                   else {
                                     echo "";
                                   } ?>>
                                   <?php echo $cat->category_name?>
                               </option>
                         <?php
                           }
                         }
                         ?>
                       </select>
                         <label for="form_control_1">Category</label>
                         <span class="help-block">Some help goes here...</span>
                     </div>


                     <div class="form-group form-md-line-input">
                       <?php
                         // var_dump($categ_id_val->result());
                         $lev_id_val = $level_id_val->result();
                        ?>
                       <select name="level_id" class="form-control">
                         <?php

                         if($level->num_rows() > 0){
                           foreach($level->result() as $lev){
                         ?>
                               <option value="<?php echo $lev->id?>"
                                 <?php
                                   if($lev->id == $lev_id_val[0]->level_id)
                                     echo "selected";
                                   else {
                                     echo "";
                                   } ?>>
                                   <?php echo $lev->level_name?>
                               </option>
                         <?php
                           }
                         }
                         ?>
                       </select>
                         <label for="form_control_1">Category</label>
                         <span class="help-block">Some help goes here...</span>
                     </div>








                   <!-- </div> -->
                 </div>
              </div>







   </div>

   <div class="form-group">


     <?php
    // var_dump($categ_id_val->result());
       // var_dump($lesson_examples->result());
       $quiz_choices->result();
       // $lesson_examples->result();
       $quiz_choices->num_rows();
       // var_dump($lesson_examples->num_rows());
     ?>
      <?php
      $les_data = $quiz->result();

      $les_data = $quiz->row();
       ?>

         <div class="col-md-4">
         Background Color:
           <input type="text" class="form-control jscolor" id="form_control_1" name="background" value="<?php echo $les_data->background; ?>" required>
           <span class="help-block">Some help goes here...</span>
         </div>



         <div class="col-md-4">
             <div class="form-group form-md-line-input">
                 <input type="text" class="form-control" id="form_control_1" name="template_num" value="<?php echo $les_data->template_num?>" required>
                 <label for="form_control_1">TEMPLATE #</label>
                 <span class="help-block">Some help goes here...</span>
             </div>
             <label for="form_control_1">EXAMPLE TEMPLATES</label>
             <br>

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



   <div class="portlet light bordered ">
     <?php
       if($quiz->result() > 0){
       $les_data = $quiz->row();
     ?>


       <div class="portlet-body form">
               <div class="form-body">
                 <div class="col-md-4">
                     <div class="form-group form-md-line-input">
                         <input type="text" class="form-control" id="form_control_1" name="question" value="<?php echo $les_data->question;?>" required>
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
                     <input type="text" class="form-control input-inline input-medium img10 " name="question_image" value="<?php echo $les_data->question_image; ?>" required/>
                     <label for="form_control_1">Question Title Image</label>
                     <span class="help-inline"><a  class="btn btn-primary btn-lg active select_img_edit" role="button" aria-pressed="true" id="10"  data-toggle="modal" href="#static" >Upload or select image.</a></span>

                     <?php
                   $count++;
                   ?>
                 </div>
               </div>
               <div class="col-md-3">
                 <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/uploads/<?php echo  $les_data->question_image; ?>"  alt="sleeping"  >
               </div>
             </div>
             <?php
             }
             ?>
               </div>
               <div style="clear:both"></div>
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
                     <div  class="form-horizontal" id="field">
                         <div id="field0" class="form-body">

                           <label for="form_control_1">Correct Answer here at the first choice!</label> <br>

                           <?php
                           // var_dump($quiz_choices->result()); ?>
                           <?php
                              if($quiz_choices->num_rows > 0)
                              {
                                // $row = $lesson_examples->count();
                                $count = 1;
                                foreach ($quiz_choices->result() as $key => $value) {
                           // for ($char = 'A'; $char <= 'D'; $char++) {
                           ?>

                           <?php
                           $char =2;
                           // for ($char = '1'; $char <= '1'; $char++) {
                             ?>

                             <div class="form-group">
                               <input type="hidden" name="quiz_image_id[]" value="<?php echo $value->id; ?>">

                                 <div class="col-md-6  " style="margin-left: 5px">
                                     <input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="img[]" value="<?php echo $value->img_name; ?>">
                                     <input type="hidden" class="imgId<?php echo $count?>" name="imgid[]" value="<?php echo $value->img_id; ?>"/>
                                     <span class="help-inline"><a  class="btn btn-primary btn-lg active select_img_edit" role="button" aria-pressed="true" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image.</a></span>
                                 </div>
                                 <div class="col-md-4">
                                   <img class="  "  style="width:40%" src="<?php echo site_url(); ?>assets/uploads/<?php echo  $value->img_name; ?>"  alt="sleeping"  >
                                 </div>
                             </div>
                             <?php
                             $count++;
                               }
                             }
                           // }
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
