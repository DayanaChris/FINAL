<style>
.labels{
  font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
   font-weight: 1000;
   font-size:2vw;

}
</style>
<body class="run-animation Alphabet_bg" >
    <a href="<?php echo base_url(); ?>lessons/category/<?php echo $id?> "> <img class="btn zoom  container float-left  card-img-top img-fluid    "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/left button.png"    /></a>
    <a href="<?php echo base_url(); ?>lessons/category/<?php echo $id?> "> <img class="btn zoom  container float-right  card-img-top img-fluid    "   src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   style="visibility: hidden;" /></a>

    <?php
    $user = $this->ion_auth->user()->row();
// echo $user->admin_id;
// exit();
     if ($id== 1 || $id== 2 ||$id== 3 || $id== 4 || $id== 5 || $id== 6){
      ?>
       <div class="container-fluid " >
       <?php
       if($lesimgS->num_rows() > 0){
         $que = $lesimgS->row();
         ?>
            <!--START OF TEMPLATE 1  -->
           <?php
           if($que->template_num ==1){
             ?>
               <?php
               if($imagesS->num_rows() > 0){
               $value = $lesimgS->row();
               $count=0  ?>

               <!-- LESSON IMAGES  -->
              <div class="d-inline">
                     <?php
                     foreach ($imagesS->result() as $key => $value) {
                     ?>
                       <a  href="#carousel-example-generic"   data-slide-to="<?php echo $count?>"  >
                         <img onclick="get_image_id(<?php echo $value->lesson_id;?>,'<?php echo $value->lesson_name;?>')"  data-toggle="modal" data-target="#exampleModal" class=" Contact clickLessonImage  letter   center zoom card-img-top img-fluid marg0"
                         src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"  value= "<?php echo $value->lesson_id; ?>" lesson="<?php echo $value->lesson_id;?>"   name="<?php echo $value->lesson_id;?>">
                        </a>
                      <!-- <a class="labels" >  <?php echo $value->lesson_name?></a> -->
                     <?php
                     $count++;
                     }
                     ?>
              </div>
              <!-- Modal -->
              <div class="container-fluid">
                <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-full" role="document">
                    <div class="modal-content"  style=" background: transparent;" >
                      <div class="modal-header" style="margin-top: 20px" >
                            <a href="<?php echo base_url(); ?>lesson/<?php echo $id?>" class="fixed-top" style="margin-right: 10px">
                              <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 90px;
                                margin-right: 0px;
                                border: 0;
                                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/close_button.png"   /></a>

                      </div>
                      <div class="modal-body actionwords_bg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <!-- END OF LESSON IMAGES  -->

                <?php
                }else {
                ?>
                  <h1>
                <?php
                  echo 'No LESSON found...';

                }?>
                  </h1>
             <!--END OF TEMPLATE 9  -->
              <?php
            }
               ?>
          <!--END OF IF TEMPLATE 1    -->
       <?php
       // END OF 1ST IF
       }else {
       ?>

       <h1>
         <?php
       echo 'No LESSON found...';
       $this->admin_id = $this->session->userdata('admin_id');
       }
       ?>
       </h1>
       </div>





<?php } else{
  ?>

      <div class="container-fluid " >
      <?php
      if($lesimg->num_rows() > 0){
        $que = $lesimg->row();
        ?>
           <!--START OF TEMPLATE 1  -->
          <?php
          if($que->template_num ==1){
            ?>
              <?php
              if($images->num_rows() > 0){
              $value = $lesimg->row();
              $count=0  ?>

              <!-- LESSON IMAGES  -->
             <div class="d-inline">
                    <?php
                    foreach ($images->result() as $key => $value) {
                    ?>
                      <a  href="#carousel-example-generic"   data-slide-to="<?php echo $count?>"  >
                        <img onclick="get_image_id(<?php echo $value->lesson_id;?>,'<?php echo $value->lesson_name;?>')"  data-toggle="modal" data-target="#exampleModal" class=" Contact clickLessonImage  letter   center zoom card-img-top img-fluid marg0"
                        src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"  value= "<?php echo $value->lesson_id; ?>" lesson="<?php echo $value->lesson_id;?>"   name="<?php echo $value->lesson_id;?>">
                       </a>
                     <!-- <a class="labels" >  <?php echo $value->lesson_name?></a> -->
                    <?php
                    $count++;
                    }
                    ?>
             </div>
             <!-- Modal -->
             <div class="container-fluid">
               <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                 <div class="modal-dialog modal-full" role="document">
                   <div class="modal-content"  style=" background: transparent;" >
                     <div class="modal-header" style="margin-top: 20px" >
                           <a href="<?php echo base_url(); ?>lesson/<?php echo $id?>" class="fixed-top" style="margin-right: 10px">
                             <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 90px;
                               margin-right: 0px;
                               border: 0;
                               background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/close_button.png"   /></a>

                     </div>
                     <div class="modal-body actionwords_bg">
                     </div>
                   </div>
                 </div>
               </div>
             </div>
                 <!-- END OF LESSON IMAGES  -->

               <?php
               }else {
               ?>
                 <h1>
               <?php
                 echo 'No LESSON found...';

               }?>
                 </h1>
            <!--END OF TEMPLATE 9  -->
             <?php
           }
              ?>
         <!--END OF IF TEMPLATE 1    -->
    <?php
    // END OF 1ST IF
    }else {
    ?>

    <h1>
        <?php
      echo 'No LESSON found...';
      $this->admin_id = $this->session->userdata('admin_id');
    }
    ?>
    </h1>
    </div>
  <?php
}?>
    <!--  if ($this->ion_auth->is_admin()) -->








      <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
      <script src="<?php echo base_url(); ?>assets/script.js"></script>


  </body>
</html>
