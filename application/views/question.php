<?php $this->load->view('templates/temp_alphabets');  ?>
<style>
    input.transparent-input{
       background-color:transparent !important;
       border:none !important;
    }


/* h3{
    font-size: 1.4em;
} */
/* h1 { font-size: 5.9vw; } */
</style>
      <div class="container float-right" id="clock" > </div>




      <?php
      if($question->num_rows() > 0){
       ?>
           <?php
           $count=0;
           foreach($question->result() as $q){

             // TEMPLATE 1

             $get_answer = $this->query->get_answer($q->quizID);
             $display="";


            if($q->template_num ==1){
             if($count!=0)
              $display="display:none;";
             else $display="display:block;"
             ?>
             <body class=" run-animation" style="background:#<?php echo $q->background?>">

             <div  class="" id="<?php echo $count; ?>"  style="width:90% ;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
               <div class="run-animation">
                 <div class="container ">
                 <img  src="<?php echo site_url(); ?>assets/images/head.png" style="width:80%; margin-top:2%">
                 <div class="centered_text">
                     <p  style="font-size:4vw;"> <?php echo $q->question?>  </p>
                 </div>
                 </div>
                 <div class="container run-animation ">
                   <div class="row">
                     <div class="col  " style="margin-top:0%">
                         <div class="col  " style="margin-top:0%">
                           <img class="choice" src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>">
                            <!-- style="width:200px" -->
                         </div>
                       </div>
                   </div>
                 </div>

                  <div class="container-fluid run-animation">
                    <div class="row">
                      <?php
                      if($get_answer->num_rows() > 0){
                        ?>
                      <?php
                      foreach ($get_answer->result() as $key => $value) {
                      ?>
                        <div class="col  " style="margin-top:5%">
                          <img data-toggle="modal" data-target="#exampleModal"
                          src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"
                           class="clickimage zoom choices"
                          data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                        </div>
                      <?php
                      }
                      ?>
                      <?php
                    }else {
                      echo "NO Choices found";
                    } ?>
                    </div>
                  </div>
               </div>
             </div>
             <?php
             $count++;
           }
           //TEMPLATE 2
           else if($q->template_num ==2){
             if($count!=0)
              $display="display:none;";
             else $display="display:block;"
            ?>
            <body class=" run-animation" style="background:#<?php echo $q->background?>">

            <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
              <div class="run-animation">
                <div class="container " style="margin-bottom: 20px">
                <div class=" "  style="margin-top: 40px" >
                    <p  style="font-size:5vw;"> <?php echo $q->question?>  </p>
                </div>
                </div>
                <div class="container-fluid run-animation">
                  <div class="row">
                    <?php
                    if($get_answer->num_rows() > 0){
                      ?>
                    <?php
                    foreach ($get_answer->result() as $key => $value) {
                    ?>
                      <div class="col  " style="margin-top:5%">
                        <img data-toggle="modal" data-target="#exampleModal"
                        src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"
                         class="clickimage zoom choices"
                        data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                      </div>
                    <?php
                    }
                    ?>
                    <?php
                  }else {
                    echo "NO Choices found";
                  } ?>
                  </div>
                </div>
              </div>
            </div>
            <?php
            $count++;
          }
          else if($q->template_num ==3){
            if($count!=0)
             $display="display:none;";
            else $display="display:block;"
           ?>
           <body class=" run-animation" style="background:#<?php echo $q->background?>">
             <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
               <div class="run-animation">
                 <!-- <div class="container" style="margin-top: 100px">
                         <div class="centered_text container-fluid">
                                 <h1 class="font-weight-bold smalltext"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                         </div>
                 </div> -->
                 <div class="container " style="margin-bottom: 0">
                 <div class=" "  style="margin-top: 20px" >
                     <p  style="font-size:6vw;"> <?php echo $q->question?>  </p>
                 </div>
                 </div>

                 <div class="container-fluid run-animation">
                   <div class="row">
                     <?php
                     if($get_answer->num_rows() > 0){
                       ?>
                     <?php
                     foreach ($get_answer->result() as $key => $value) {
                     ?>
                       <div class="col  " style="margin-top:5%">
                         <img data-toggle="modal" data-target="#exampleModal"
                         src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"
                          class="clickimage zoom choices"
                         data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                       </div>
                     <?php
                     }
                     ?>
                     <?php
                   }else {
                     echo "NO Choices found";
                   } ?>
                   </div>
                 </div>
               </div>
             </div>
             <?php
             $count++;
         }
         else if($q->template_num ==5){
           if($count!=0)
            $display="display:none;";
           else $display="display:block;"
          ?>
          <body class=" run-animation" style="background:#<?php echo $q->background?>">
            <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
              <div class="run-animation">
                <div class="container" style="margin-top: 100px">
                        <div class="centered_text container-fluid">
                                <h1 class="font-weight-bold smalltext"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                        </div>
                </div>

                <div class="container-fluid run-animation">
                  <div class="row">
                    <?php
                    if($get_answer->num_rows() > 0){
                      ?>
                    <?php
                    foreach ($get_answer->result() as $key => $value) {
                    ?>
                      <div class="col  " style="margin-top:5%">  <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:260px" class="clickimage zoom letterA"
                        data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                      </div>
                    <?php
                    }
                    ?>
                    <?php
                  }else {
                    echo "NO Choices found";
                  } ?>
                  </div>
                </div>
              </div>
            </div>
        <?php
        $count++;
      } else if($q->template_num ==4){
        if($count!=0)
         $display="display:none;";
        else $display="display:block;"
       ?>

       <body class=" run-animation" style="background:#<?php echo $q->background?>">
         <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
           <div class="run-animation">
             <div class="container" style="margin-top: 70px">
                     <div class="centered_text container-fluid">
                             <h1 class="font-weight-bold smalltext"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                     </div>
             </div>
             <div class="container run-animation">
               <div class="row">
                 <div class="col  " style="margin-top:40px">
                   <img class="mx-auto d-block" src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>" style="width:100%; margin-top:2%">
                   </div>
                   <div class="col   " style="margin-top:10%">
                     <?php
                     if($get_answer->num_rows() > 0){
                       ?>
                     <?php
                     foreach ($get_answer->result() as $key => $value) {
                     ?>
                         <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:30%" class="clickimage zoom letterA"
                         data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                     <?php
                     }
                     ?>
                     <?php
                   }else {
                     echo "NO Choices found";
                   } ?>
                   </div>
                  </div>
              </div>
         </div>
       </div>
     </div>

     <?php
     $count++;
   }
     else if($q->template_num ==6){
       if($count!=0)
        $display="display:none;";
       else $display="display:block;"
      ?>
        <body class=" run-animation" style="background:#<?php echo $q->background?>">
          <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
            <div class="run-animation">
              <div class="container" style="margin-top: 70px">
                      <div class="centered_text container-fluid">
                              <h1 class="font-weight-bold smalltext"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                      </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col  " style="margin-top:10px">
                    <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Easy/8.png" style="width:40%; margin-top:0px">

                      <div class="centered_text   container-fluid  " style="margin-top:1px">
                        <img src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>" style="width:20%">
                      </div>
                    </div>
                </div>
              </div>
              <div class="container-fluid run-animation">
                <div class="row">
                  <?php
                  if($get_answer->num_rows() > 0){
                    ?>
                  <?php
                  foreach ($get_answer->result() as $key => $value) {
                  ?>
                    <div class="col  " style="margin-top:5%">  <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:260px" class="clickimage zoom letterA"
                      data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                    </div>
                  <?php
                  }
                  ?>
                  <?php
                }else {
                  echo "NO Choices found";
                } ?>
                </div>
              </div>
          </div>
        </div>
      </div>

      <?php
      $count++;
    }
    else if($q->template_num ==7){
      if($count!=0)
       $display="display:none;";
      else $display="display:block;"
     ?>
       <body class=" run-animation" style="background:#<?php echo $q->background?>">
         <div  class="" id="<?php echo $count; ?>"  style="width:100% ; height: 100%;<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
           <div class="run-animation">
             <div class="container">
               <div class="row">
                 <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Easy/8.png" style="width: 70%; height: 450px;margin-top:0px">
                 <div class="col top-left " style="margin-top: 30px" >
                           <h1 class="font-weight-bold smalltext"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                   </div>
                   <div class="col centered_text"  style="margin-top: 5px">
                         <img src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>" style="width:20%">
                     </div>
               </div>

             </div>
             <div class="container-fluid run-animation">
               <div class="row">
                 <?php
                 if($get_answer->num_rows() > 0){
                   ?>
                 <?php
                 foreach ($get_answer->result() as $key => $value) {
                 ?>
                   <div class="col  " style="margin-top:5%">  <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:40%" class="clickimage zoom letterA"
                     data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>"  lesson="<?php echo $value->quiz_id;?>" >
                   </div>
                 <?php
                 }
                 ?>
                 <?php
               }else {
                 echo "NO Choices found";
               } ?>
               </div>
             </div>
         </div>
       </div>
     </div>
     <?php
     $count++;
   }else{
     echo "NO template found";

   }
     ?>










     <?php
}
     }else {

     ?>
     <body class="run-animation Alphabet_bg" >
       <a href="<?php echo base_url(); ?>lessons/category_menu "> <img class="zoom  container float-left card-img-top img-fluid   " style=" width: 15%;
           padding: 10px;
           margin-top: 0px;
           margin-bottom: 20px;
           border: 0;
           background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   /></a>

       <h1>
     <?php
       echo 'No QUIZ FOUND...';
     }?>
       </h1>

      <!--END OF TEMPLATE 1  -->
      <!--START OF TEMPLATE 2  -->

      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!-- <div class="modal-content"> -->
          <div class="modal-content modal-backdrop">

          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>

    <div class="result_div bg" style="display:none;  width: 100%; height: 100%;repeat fixed center; pading:0; "  >
        <div class="container" style="margin-top: 0">
          <!-- <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/try_again.png" style="width: 50% ; margin-top: 30px "> -->
        </div>
        <div class="container-fluid" style="margin-top: 10px">
          <!-- <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/platform.png" style="width: 70% ;"> -->
            <div class="container centered_text mx-auto d-block">
              <div class="container " style="margin-top: 5px">
                <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/congrats.png" style="width: 50% ; margin-top: 120px ">
              </div>
              <form class="text-center" role="form" method="post" action="<?php echo base_url()?>results/post"   style="font-size: 30px; color: white; font-weight: 1000;" >
                <div class="text-center">
                <div class="form-group row" style="display:none;">
                   <label for="staticEmail" class="col col-form-label"> <p  style="font-size:4vw;">SCORE</p></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="score" type="text" name="score" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"> <h3 class="h33" style="">FINAL SCORE</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="final_score" type="text" name="final_score" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col  col-form-label"><h3 class="h33" style="">ATTEMPTS</h3></label>
                  <div class="col ">
                    <input class="form-control-plaintext"  id="attempts" type="text" name="attempts" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"><h3 style="">TOTAL TIME</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="total_time" type="text" name="total_time" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"><h3 class="h33" style="">ACCURACY</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="accuracy" type="text" name="accuracy" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"><h3 style="">AVERAGE SPEED</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="average_speed" type="text" name="average_speed" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"><h3 style="">MISTAKES</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="total_wrong" type="text" name="total_wrong" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label"><h3 style="">REMARKS</h3></label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="remarks" type="text" name="remarks" value=""  >
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col">
                    <input type="hidden" class="form-control-plaintext" name="category_id"  value="<?php echo $category_id?>"  >
                  </div>
                </div>
                <div class="form-group row" >
                  <div class="col">
                    <input type="hidden" class="form-control-plaintext" name="level_id"  value="<?php echo $level_id?>"  >
                  </div>
                </div>


              </div>


              <div class="container ">

                <button type="submit" class="   " style="background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
                outline:none;
            }">
                  <img class="zoom" src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/view_tally_button.png" style="width: 200px ;">

                </button>

              </div>
              </form>



            </div>
        </div>




    </div>




<style>
  .modal-body img{
    width:100%;
  }
</style>

<div class="base_url" style="display:none"><?php echo base_url()?></div>


<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
 <script src="<?php echo base_url(); ?>assets/apps/scripts/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
</body>
</html>
