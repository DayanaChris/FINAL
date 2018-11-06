
<?php if($id==1){
  $background= "learn_alphabets";
}
else if ($id==2){
  // code...
  $background= "learn_numbers";

}else if ($id==3){
  // code...
  $background= "learn_colors";

}else if ($id==4){
  $background= "learn_facial_expressions";

  // code...
}else if ($id==5){
  $background= "learn_action_words";

  // code...
}else if ($id==6){
  $background= "learn_shapes";

  // code...
}
else{
  $background= "else";

}

?>

<script>



var mainmenu = new Audio();
mainmenu.src = "<?php echo site_url(); ?>assets/Sound/mainmenu.mp3";
var TakeLessons = new Audio();
TakeLessons.src = "<?php echo site_url(); ?>assets/Sound/TakeLessons.mp3";
var TakeQuiz = new Audio();
TakeQuiz.src = "<?php echo site_url(); ?>assets/Sound/TakeQuiz.mp3";

</script>
<body class=" <?php echo $background; ?> run-animation">

  <?php
     $user = $this->ion_auth->user()->row();
  ?>
  <audio autoplay  loop>
      <source src ="<?php echo site_url(); ?>assets/sound_effects/Funny.flac">
  </audio>
  <!-- <button class="float-right"  id="mutebtn"></button> -->

        <a onmouseover="mainmenu.play()" href="<?php echo base_url(); ?>category_menu "> <img class="zoom  container float-left card-img-top img-fluid   " style=" width: 15%;
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            border: 0;
            background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   /></a>

                <div  id="logo" class=" container " style=" margin-top: 0%;margin-bottom: 0%; " >

                  <?php
                  if($cat->num_rows() > 0){
                    $cats = $cat->row();

                    ?>
                    <div class="container">
                        <br>

                    <img class="container logoanimation  pad log" src="<?php echo base_url()?>assets/uploads/<?php echo $cats->category_image_title?>"  >
                    </div>


                    <div class="row ">
                      <!-- <div class="col-sm-6   "  ><a href="<?php echo base_url(); ?>lessons/lesson_numbers"> <img class="card-img-top img-fluid zoom btn center"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_lesson.png" alt="Card image cap"></a> </div> -->

                           <div class="col-sm-6   "  ><a onmouseover="TakeLessons.play()" href="<?php echo base_url(); ?>lesson/<?php echo $id;?> "> <img class="card-img-top img-fluid zoom btn center"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_lesson.png" alt="Card image cap"></a> </div>
                           <div class="col-sm-6  " ><a onmouseover="TakeQuiz.play()" href="<?php echo base_url(); ?>levels/<?php echo $id?> "><img class="card-img-top img-fluid zoom btn center"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_quiz.png" alt="Card image cap"></a> </div>
                   </div>
                   <div class="">





                   <?php

                   $admin_id = $this->session->userdata('admin_id');
                   echo $admin_id;
                   echo "$admin_id";
                    ?>
                    <!-- AFIJBKZNAMSD -->
                    <?php // echo $user->admin_id; ?>
                  </div>

                   <?php
                   }else {
                   ?>
                     <h1 class="text-center">
                   <?php
                     echo 'No LESSON found...';
                   }?>
                     </h1>



                        </div>
                </div>

 <?php  $this->load->view('templates/plain_footer'); ?>
