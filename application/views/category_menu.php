

<?php
  $this->load->view('templates/header');
  $this->load->view('templates/nav_cat');  ?>

  <script>
    var mouseclick = new Audio();
    mouseclick.src = "<?php echo site_url(); ?>assets/sound_effects/mouseclick.mp3";

    var videosmenu = new Audio();
    videosmenu.src = "<?php echo site_url(); ?>assets/Sound/videosmenu.mp3";

  </script>

    <body class=" category_menu_bg"  >


                <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; padding-top: 70px;" id="shad" >
                    <div class="card run-animation" style="background: skyblue; ">
                       <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>

                                <div class="containers ">
                                  <ul>
                                   <?php
                                    if ($this->ion_auth->is_admin()){
                                     ?>
                                    <?php
                                    if($categoryAll->num_rows() > 0){
                                      foreach ($categoryAll->result() as $key => $value) {
                                    ?>
                                        <li > <a  onmousedown="mouseclick.play()" href="<?php echo base_url(); ?>lessons/category/<?php echo $value->id?>"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/uploads/<?php echo $value->category_image?>" alt="<?php echo $value->category_name?>" style="width: 100%"></a></li>

                                      <?php
                                      }
                                    }else {
                                      ?>
                                        <h1>
                                      <?php
                                        // echo 'No LESSON CATEGORY found...';

                                      }?>


                                        <?php
                                      }else if(!$this->ion_auth->is_admin()){
                                       ?>


                                       <?php
                                       if($categoryAll->num_rows() > 0){
                                         foreach ($categoryAll->result() as $key => $value) {
                                       ?>
                                           <li > <a  onmousedown="mouseclick.play()" href="<?php echo base_url(); ?>lessons/category/<?php echo $value->id?>"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/uploads/<?php echo $value->category_image?>" alt="<?php echo $value->category_name?>" style="width: 100%"></a></li>

                                         <?php
                                         }
                                       }else {
                                         ?>
                                           <h1>
                                         <?php
                                           // echo 'No LESSON CATEGORY found...';

                                         }?>




                                       <?php
                                       if($category->num_rows() > 0){
                                         foreach ($category->result() as $key => $value) {
                                       ?>
                                           <li > <a  onmousedown="mouseclick.play()" href="<?php echo base_url(); ?>lessons/category/<?php echo $value->id?>"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/uploads/<?php echo $value->category_image?>" alt="<?php echo $value->category_name?>" style="width: 100%"></a></li>

                                         <?php
                                         }
                                       }else {
                                         ?>
                                           <h1>
                                         <?php


                                         }?>


                                         </h1>

                                         <?php
                                      }
                                      ?>
                                    </ul>
                                </div>
                        </div>

                </div>
                <!-- <div class="">

                <a href="<?php echo base_url(); ?>tally " class="fixed-bottom" > <img class="zoom  container float-left card-img-top img-fluid   " style=" width: 130px;
                margin-top: 0px;
                margin-left: 100px;

                margin-bottom: 20px;
                border: 0;
                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/result.png"   />
              </a>
            </div> -->

            <div class="">
                <a onmouseover="videosmenu.play()" href="<?php echo base_url(); ?>videos_menu " class="fixed-bottom " > <img class="zoom  container float-right card-img-top img-fluid    " style=" width: 150px;
                margin-top: 0px;
                margin-left: 20px;
                border: 0;
                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/video_button.png"   />
              </a>

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
