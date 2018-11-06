
  <script>
  // var audio;
  // function initAudioPlayer(){
  // audio = new Audio();
  // audio.src = "<?php echo site_url(); ?>assets/sound_effects/Funny.flac";
  // audio.loop = true;
  // audio.play();
  // }
  // window.addEventListener("load", initAudioPlayer);

  var login = new Audio();
  login.src = "<?php echo site_url(); ?>assets/Sound/login.mp3";
  var register = new Audio();
  register.src = "<?php echo site_url(); ?>assets/Sound/register.mp3";
  var audiosettings = new Audio();
  audiosettings.src = "<?php echo site_url(); ?>assets/Sound/audiosettings.mp3";

  var spedemy = new Audio();
  spedemy.src = "<?php echo site_url(); ?>assets/Sound/spedemy.mp3";
  var logout = new Audio();
  logout.src = "<?php echo site_url(); ?>assets/Sound/logout.mp3";
  var Startthelesson = new Audio();
  Startthelesson.src = "<?php echo site_url(); ?>assets/Sound/Startthelesson.mp3";

  </script>

<style  >
.modal-backdrop {
   background-color: rgba(0,0,0,.0001) !important;
}
</style>
<div class="navbar-fixed-top ">

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
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>


                  <ul class="nav navbar-nav navbar-right">




                      <!-- Authentication Links -->
                      <!-- if not logged in this will show the login/register -->
                      <?php if (!$this->ion_auth->logged_in()) : ?>
                        <li class="nav-item" style="margin-left: 50px;" ><a onmousedown="mouseclick.play()" class="nav-link " href="<?php echo base_url(); ?>Auth/login" style="font-size: 20px;" onmouseover="login.play()">Login</a></li>

                      <li class="nav-item" style="margin-left: 50px;" ><a onmousedown="mouseclick.play()" class="nav-link " href="<?php echo base_url(); ?>Auth/register" style="font-size: 20px;" onmouseover="register.play()">Register</a></li>
                    <?php endif; ?>
                    <!--if logged in, this menus nav bar will show  -->
                    <?php if ($this->ion_auth->logged_in()) : ?>
                      <!-- ADD MODAL TO JOIN GROUP -->



                      <?php
                      $user = $this->ion_auth->user()->row();
                      ?>
                      <li class="nav-item" style="margin-left: 50px;"  ><a onmousedown="mouseclick.play()" class="nav-link "  style="font-size: 20px;" > Welcome  <?php echo ucwords($user->first_name.' '.$user->last_name)?>!</a></li>
                      <li class="nav-item" style="margin-left: 50px;" > <a onmousedown="mouseclick.play()" class="nav-link " href="<?php echo base_url(); ?>category_menu"  style="font-size: 20px; font-weight: 1000;" onmouseover="Startthelesson.play()" >  START THE LESSON </a></li>

                      <li  class="nav-item" style="margin-left: 50px;" >
                        <a onmousedown="mouseclick.play()"  href="<?php echo base_url(); ?>Auth/logout"  class="nav-link "     onmouseover="logout.play()">
                          <img style="height: 30px; padding: 0 auto;"    src="<?php echo site_url(); ?>assets/images/logout.png" />
                        </a>
                      </li>


                    <?php endif; ?>
                    <li   style="margin-left: 50px;" >
                      <a onmousedown="mouseclick.play()" class="nav-link "  data-toggle="modal" href="#static"  onmouseover="audiosettings.play()">
                        <img style="height: 30px; padding: 0 auto;"    src="<?php echo site_url(); ?>assets/images/icon_set.png" />
                      </a>
                    </li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>


    <div id="static" class=" modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
           <div class="modal-dialog" style="width:80%">
               <div class="modal-content ">
                   <div class="modal-header">
                     <h1 class="modal-title" style="color:black">Audio Settings</h1>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                   </div>

                   <div class="modal-body ">
                    <!-- <h1> <label for="" style="color:black">ENTER CODE TO JOIN A CLASS</label></h1> -->
                     <!-- <input type="text" name="" value="" style="color:black"> -->

                     <!-- <a onmousedown="mouseclick.play()" >  <img   class="zoom  container   card-img-top img-fluid    "
                     id="mutebtn"  style=" width: 80px;
                     margin-top: 0px;
                     border: 0;
                     margin-bottom: 0px;
                     background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/<?php echo $controls; ?>.png"   />
                   </a> -->

                   <audio controls volume="0.1" id="my_audio" autoplay="autoplay" src="<?php echo site_url(); ?>assets/sound_effects/Funny.mp3" loop="loop"></audio>

                    <!-- <audio controls  autoplay="autoplay" loop="loop">
                     <source src="<?php echo site_url(); ?>assets/sound_effects/Funny.flac" type="audio/mp3" />
                   </audio> -->
                   </div>
                   <div class="modal-footer">
                       <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                       <!-- <button type="button" data-dismiss="modal" class="btn green">Continue Task</button> -->
                   </div>
               </div>
           </div>
       </div>
