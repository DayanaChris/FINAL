<style >
.labels{
  font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
   font-weight: 1000;
   /* font-size: 10px; */
   font-size:1.5vw;
   line-height: 15.9px;
}
</style>

<div  name="" class=" modal-body carousel slide  " data-interval="false" style="margin-bottom:30px; background-color: #91FF97">
     <div class="carousel-inner  " role="listbox">
         <?php

         $num_pages= count($ids->result()); //count the numbers of lesson image

         if($num_pages==2){
           $lesson= "PART 1";
         }  if($num_pages==4){
            $lesson= "PART 2";
         }
         if($num_pages==6){
            $lesson= "PART 2";
         }
         for ($i=0; $i < $num_pages ; $i++) {
         // foreach ($example->result() as $key => $values) {
            if ($i==0) {
              $is_active ='active';
         ?>
         <!-- START MODAL ITEM  -->
          <div class="item   <?php echo $is_active ?>"  >
            <div>
              <?php
               $les_data = $ids->result();
               $les_data = $ids->row();
               $les_datas = $idss->result();
               $les_datas = $idss->row();
                ?>
                <div class="text-center">
                  <img class=" mx-auto d-block" style="width:10%" src="<?php echo base_url()?>assets/uploads/<?php echo $les_datas->img?>"  alt="Letter A"  >

                        <h1 class="font-weight-bold"> <big>  <h1><?php echo $les_data->lesson_name?></h1> </big> </h1>
                </div>
                <!-- <?php echo $lesson; ?> -->
                <?php if($ids->num_rows() > 0){ ?>
                  <div class="row">
                    <?php foreach ($ids->result() as $key => $values) { ?>
                      <?php
                        // var_dump(($ids));
                      //
                      // $num_pages= count($ids->result());
                      // if($num_pages=2){
                      //   $lesson= "PART 1";
                      // }  if($num_pages=4){
                      //    $lessonss= "PART 2";
                      // }


                       ?>

                      <div class="col-sm-6  " style="margin-top:0%">
                        <ul class="list-group"  >
                          <li class="list-group-item let" >
                            <img class=" mx-auto d-block" style="width:60%" src="<?php echo base_url()?>assets/uploads/<?php echo $values->img_name?>"  alt="Letter A"  >
                          </li>
                          <li class="list-group-item let  "  >
                            <h3 class=" text-center ">

                            <?php echo $values->lesson_example_name?>

                          </h3>
                          </li>
                        </ul>
                      </div>

                    <?php
                    }
                    ?>
                  </div>
                <?php }else{
                echo 'No category found...';
                }?>
                <?php //echo $lessonss; ?>

              </div>
            </div>
          <!--END MODAL ITEM  -->
          <?php
          $i++;
              }   //end if
          } // end for
          ?>
      </div>

  </div>
