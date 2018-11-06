
  <script>
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
    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
           <div class="modal-dialog" style="width:80%">
               <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title" style="color:black">Audio Settings</h1>
                       <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                   </div>

                   <div class="modal-body">
                   <audio controls volume="0.1" id="my_audio" autoplay="autoplay" src="<?php echo site_url(); ?>assets/sound_effects/Funny.flac" loop="loop"></audio>
                   </div>
                   <div class="modal-footer">
                    <button class="btn btn-secondary" style="background:violet"  data-dismiss="modal">
                      close
                    </button>

                  </div>
               </div>
           </div>
       </div>
