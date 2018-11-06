
    <div class="footer">
              <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #78569a;
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              margin-bottom: 0;
              text-align: center;
              margin-top: 100%;
              " >

              <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentfooter" aria-controls="navbarSupportedContentfooter" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContentfooter">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <script>
                        	var mouseclick = new Audio();
                        	mouseclick.src = "<?php echo site_url(); ?>assets/sound_effects/mouseclick.mp3";

                        </script>

                        <ul class="navbar-nav mr-auto" style="font-size: 20px;">
                          <li class="nav-item active"><a class="nav-link" onclick="display_home()" onmousedown="mouseclick.play()"  onmouseover="home.play()"> <b>Home</b> <span class="sr-only">(current)</span></a> </li>
                          <li class="nav-item"> <a class="nav-link" onclick="display_about()" onmousedown="mouseclick.play()"  onmouseover="about.play()"><b>About</b></a> </li>
                          <!-- <li class="nav-item"> <a class="nav-link" onclick="display_contact()" onmousedown="mouseclick.play()"><b>Contact</b></a> </li> -->

                        </ul>
                    </div>
            </nav>
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
