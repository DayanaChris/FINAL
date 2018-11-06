
<!-- 'mp4' => array('video/mp4', 'application/octet-stream'), -->

  <?php
    $this->load->view('templates/temp_alphabets');
    // $this->load->view('templates/nav_cat');  ?>

      <body class=" category_menu_bg"  >

          <script>
          var lesson = new Audio();
          lesson.src = "<?php echo site_url(); ?>assets/Sound/lesson.mp3";
          var mainmenu = new Audio();
          mainmenu.src = "<?php echo site_url(); ?>assets/Sound/mainmenu.mp3";
          var sing = new Audio();
          sing.src = "<?php echo site_url(); ?>assets/Sound/sing.mp3";
          var story = new Audio();
          story.src = "<?php echo site_url(); ?>assets/Sound/story.mp3";

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

                          </ul>
                      </div>
                  </div>
              </nav>
            </div>



                  <div class="container " style=" margin-top: 0%;margin-bottom: 0%; padding-top: 90px;" id="shad" >
                      <div class="card run-animation" style="background: skyblue; ">
                         <div class="card-header" style=" background:#FF1E9D"> <h2> <b> VIDEOS </b></h2></div>
                         <a onmouseover="mainmenu.play()" href="<?php echo base_url(); ?>category_menu "> <img class="btn zoom  container float-right card-img-top img-fluid   "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   /></a>

                                  <div class="container " style="padding: 40px" >
                                    <!-- style="padding-bottom: 150px" -->
                                    <div class="row">

                                    <div class="col   "  > <a  onmouseover="lesson.play()" href="<?php echo base_url(); ?>videos/Lesson"> <img class="zoom   card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/Lesson.png" alt="Card image cap"></a> </div>
                                    <div class="col   "  > <a  onmouseover="story.play()" href="<?php echo base_url(); ?>videos/StorySeries"> <img class="zoom   card-img-top img-fluid box"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/StorySeries.png" alt="Card image cap"></a> </div>
                                    <div class="col   "  > <a  onmouseover="sing.play()" href="<?php echo base_url(); ?>videos/SingALong"> <img class=" zoom  card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/SingALong.png" alt="Card image cap"></a> </div>
                                  </div>





                                  </div>

                          </div>
                  </div>






                                <!-- START OF JS -->
                                          <!-- <script>
                        CKEDITOR.replace( 'editor1' );
                    </script> -->
                    <script src="<?php echo base_url(); ?>assets/nav.js"></script>

                    <script src="<?php echo base_url(); ?>assets/script.js"></script>

                    <script src="<?php echo base_url(); ?>assets/jscolor.js"></script>

                    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                    <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>










                    <!-- BEGIN CORE PLUGINS -->
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                    <!-- END CORE PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="<?php echo base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>
                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN THEME LAYOUT SCRIPTS -->
                    <script src="<?php echo base_url()?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
                            <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="<?php echo base_url()?>assets/global/scripts/datatable.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/apps/scripts/sweetalert.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/script.js" type="text/javascript"></script>


                    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

                    <script type="text/javascript" src="<?php echo base_url()?>assets/uploader/js/plupload.full.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url()?>assets/uploader/js/jquery.ui.plupload/jquery.ui.plupload.js"></script>

                    <link href="<?php echo base_url()?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
                    <link href="<?php echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

                    <link rel="stylesheet" href="<?php echo base_url()?>assets/uploader/js/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />
                    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
                    <!-- END THEME LAYOUT SCRIPTS -->

                    </body>
                    </html>

                    <script>
                        $(document).ready(function()
                        {
                            $('#clickmewow').click(function()
                            {
                                $('#radio1003').attr('checked', 'checked');
                            });
                        })
                        var home = new Audio();
                        home.src = "<?php echo site_url(); ?>assets/Sound/home.mp3";
                        var about = new Audio();
                        about.src = "<?php echo site_url(); ?>assets/Sound/about.mp3";

                    </script>

                    <script type="text/javascript">
                      function Confirm(form){
                      alert("Record insert successfully!");
                      form.submit();
                      }
                      </script>
                </body>

            </html>
