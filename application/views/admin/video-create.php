<?php $this->load->view('admin/inc/top');?>
<style>
.num{
display:none;
}
</style>
 <form role="form" method="post" action="<?php echo base_url()?>videos/post">
<div class="portlet light bordered ">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> Add Video</span>
        </div>
    </div>
    <div class="portlet-body form">
            <div class="form-body">
             <!-- category dropdown -->
             <div class="col-md-4">
                <div class="form-group form-md-line-input">
                  <label for="form_control_1"><b>Video Category</b></label>
                    <select name="video_category_id" class="form-control">
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
                    <!-- <span class="help-block">Some help goes here...</span> -->
                </div>
             </div>
             <div class="col-md-4">

             </div>
             <div class="col-md-4">
               <label for="form_control_1 ">EXAMPLE TEMPLATE for VIDEOS MENU</label> <br>
               <img  class="image-fluid float-right" style="width:100%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/images/lesson_example/videos_menu.PNG"   />
             </div>
             <div class="col-md-4">
                 <div class="form-group form-md-line-input">

                   <label for="form_control_1"><b>Video Name</b></label> <br>
                     <input type="text" class="form-control" id="form_control_1" name="video_name" value="<?php //echo $value?>" required>
                     <!-- <span class="help-block">Some help goes here...</span> -->

                 </div>
                 <!-- <label for="form_control_1">! Add Video Link from youtube or any video online.</label> <br> -->
                 <!-- <label for="form_control_1"><b>NOTE!</b> Please input LESSON NAME separated by underscore " _ " instead of spaces. <br>Example: Letter_A </label> <br> -->
              </div>

             <div class="col-md-4">
                 <div class="form-group form-md-line-input">

                   <label for="form_control_1"><b>Video Link</b></label> <br>
                     <input type="text" class="form-control" id="form_control_1" name="video_link" value="<?php //echo $value?>" required>
                     <!-- <span class="help-block">Some help goes here...</span> -->

                 </div>

                 <label for="form_control_1">! Add Video Link from youtube or any video online.</label> <br>
                 <label for="form_control_1">Example video link:<b> https://www.youtube.com/embed/aMFVmqWV1sY. </b></label> <br>

                 <!-- <label for="form_control_1"><b>NOTE!</b> Please input LESSON NAME separated by underscore " _ " instead of spaces. <br>Example: Letter_A </label> <br> -->
              </div>



             <!-- end category dropdown -->




            <div style="clear:both"></div>
		        </div>
       </div>
</div>



<div class="form-actions noborder">
    <button type="submit" class=" success_video_add btn blue">Submit</button>
    <a href="<?php echo base_url()?>lesson" class="btn default">Cancel</a>
</div>

 </form>


<?php $this->load->view('admin/inc/footer');?>
