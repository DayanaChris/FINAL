


  <?php
    $this->load->view('templates/temp_alphabets');
    // $this->load->view('templates/nav');  ?>


<style>
/* iframe {
width: 100%    !important;
height: auto   !important;
} */
</style>

    <script>

    var videosmenu = new Audio();
    videosmenu.src = "<?php echo site_url(); ?>assets/Sound/videosmenu.mp3";

    </script>
     <body class="run-animation category_menu_bg" >


     <div class="navbar-fixed-top ">
       <audio   id="my_audio" autoplay="autoplay" src="<?php echo site_url(); ?>assets/Sound/singvid.mp3"  ></audio>

              <nav class="navbar navbar-expand-md  navbar-laravel navbar-dark  " style=" background-color: #78569a;
              left: 0;
              top: 0;
              width: 100%;
              " >
               <div class="container " >
                     <a class="navbar-brand" href="<?php echo base_url(); ?>" style="padding: 4px;margin:auto" onmouseover="spedemy.play()">
                         <img onmousedown="mouseclick.play()" src="<?php echo site_url(); ?>assets/images/SPEDEMY/logo.png" style="height: 35px; padding: 0 auto;">SPEDEMY.com
                     </a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav mr-auto">
                       </ul>
                       <ul class="nav navbar-nav navbar-right">
                           <?php if (!$this->ion_auth->logged_in()) : ?>
                             <li class="nav-item" style="margin-left: 50px;" ><a onmousedown="mouseclick.play()" class="nav-link " href="<?php echo base_url(); ?>Auth/login" style="font-size: 20px;" onmouseover="login.play()">Login</a></li>
                           <li class="nav-item" style="margin-left: 50px;" ><a onmousedown="mouseclick.play()" class="nav-link " href="<?php echo base_url(); ?>Auth/register" style="font-size: 20px;" onmouseover="register.play()">Register</a></li>
                         <?php endif; ?>
                         <?php if ($this->ion_auth->logged_in()) : ?>
                           <?php
                           $user = $this->ion_auth->user()->row();
                           ?>
                           <li class="nav-item" style="margin-left: 50px;"  ><a onmousedown="mouseclick.play()" class="nav-link "  style="font-size: 20px;" >  <?php echo ucwords($user->first_name.' '.$user->last_name)?>!</a></li>
                           <li  class="nav-item" style="margin-left: 50px;" >
                             <a onmousedown="mouseclick.play()"  href="<?php echo base_url(); ?>Auth/logout"  class="nav-link "     onmouseover="logout.play()">
                               <img style="height: 30px; padding: 0 auto;"    src="<?php echo site_url(); ?>assets/images/logout.png" />
                             </a>
                           </li>
                         <?php endif; ?>

                       </ul>
                   </div>
               </div>
           </nav>
         </div>



         <div class="container " style=" margin-top: 10px;margin-bottom: 0%; padding-top: 70px;" id="shad" >
             <div class="card run-animation" style="background: #CBE1FB; ">
                <div class="card-header" style=" background:#FF1E9D"> <h2> <b> LESSON VIDEOS </b></h2></div>
                <a onmouseover="videosmenu.play()" href="<?php echo base_url(); ?>videos_menu "> <img class="btn zoom  container float-right card-img-top img-fluid   " style="width:100px; margin-bottom:0px" src="<?php echo site_url(); ?>assets/images/SPEDEMY/video_button.png"   /></a>
                     <div     >
                            <br>

                            <div>
                              <div class="container "   >
                                <div class="row">

                                <?php
                                if($vid_lesson->num_rows() > 0){
                                  foreach ($vid_lesson->result() as $key => $value) {
                                ?>
                                  <div class="col   " style="padding-top:50px;margin-right:50px" >
                                    <iframe width="300" height="200" src="<?php echo $value->video_link?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                  </div>
                                  <?php
                                  }
                                }else {
                                  ?>
                                    <h1>
                                  <?php
                                    echo 'No Videos found...';

                                  }?>
                                    </h1>
                              </div>
                              </div>
                            </div>
                            <br><br> <br>
                          </div>

                        </div>
                  </div>








                   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


                   <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                   <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
     </body>
</html>
