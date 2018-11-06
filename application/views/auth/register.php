<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>SPEDEMY|Register</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url()?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url()?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url()?>assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/images/SPEDEMY/logo.png')?>">


        <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


        <style>
        .login{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/login.png");
        background-repeat: repeat;
      }



        </style>
        <script>
          var mouseclick = new Audio();
          mouseclick.src = "<?php echo site_url(); ?>assets/sound_effects/mouseclick.mp3";

        </script>


       </head>
    <!-- END HEAD -->

    <body class=" login">



<div class="container-fluid">
  <a href="<?php echo base_url(); ?> "> <img onmousedown="mouseclick.play()" class="image-fluid float-right" style="width:5%; margin-bottom: 0px;margin-right: 2%;margin-top: 3%;"  src="<?php echo site_url(); ?>assets/pages/img/X.png"   /></a>
 </div>
      <div class="container-fluid" >
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header form-title text-center" style="color:black"><b> REGISTER AS ADMIN!</b></div>
                      <!-- <a href="index.html">
                        <img class="mx-auto d-block" src="<?php echo base_url()?>assets/pages/img/logo.png"  style="height: 200px;" alt="" /> </a> -->


                      <div class="card-body">

                        <?php //echo validation_errors(); ?>

                        <?php echo form_open("auth/register");?>
                            <div class="form-group">
                              <div class="col-md-6">

                                <label for="form_control_1"  style="font-size: 1.5rem"><b>First Name</b></label>
                                <?php echo lang('first_name', 'first_name');?> <br />
                                <?php echo form_input($first_name );?>
                              <!-- <input  name="first_name" value="" id="first_name" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"    /> -->
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6">
                              <label for="form_control_1" style="font-size: 1.5rem"><b>Last Name</b></label>
                              <?php echo lang('last_name', 'last_name');?> <br />
                              <?php echo form_input($last_name );?>
                            <!-- <input  name="last_name" value="" id="last_name" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"    /> -->
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="form_control_1" style="font-size: 1.5rem"><b>Email</b></label>
                            <?php echo lang('email', 'email');?> <br />
                            <?php echo form_input($email );?>
                            <!-- <input  name="email" value="" id="email" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"    /> -->
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="form_control_1" style="font-size: 1.5rem"><b>School Name</b></label>
                            <?php echo lang('company', 'company');?> <br />
                            <?php echo form_input($company );?>

                          <!-- <input  name="company" value="" id="company" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"    /> -->
                        </div>
                      </div>
                      <?php
                      if($identity_column!=='email') {
                          echo '<p>';
                          echo lang('create_user_identity_label', 'identity');
                          echo '<br />';
                          echo form_error('identity');
                          echo form_input($identity);
                          echo '</p>';
                      }
                      ?>

                      <div class="form-group">
                        <div class="col-md-6">
                          <label for="form_control_1" style="font-size: 1.5rem"><b>Phone Number</b></label>
                          <?php echo lang('phone', 'phone');?> <br />
                          <?php echo form_input($phone );?>

                        <!-- <input  name="phone" value=""  id="phone" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"  /> -->
                      </div>
                    </div>


                       <div class="form-group form-md-line-input">
                         <div class="col-md-6">

                         <label for="form_control_1" style="font-size: 1.5rem"><b>Users Group</b></label>

                           <select name="group" class="form-control ">
                             <option value="1" selected>admin</option>

                         <?php
                         // if ($_POST['group'] === '---Select group---'){
                         //   echo "PLEASE select group";
                         //
                         // }
                          ?>

                           </select>
                         </div>
                       </div>
                       <div class="container " style="margin-left:20px; margin-top: 10%">
                       <div class="form-group">
                         <div class="col-md-8">

                         <label for="form_control_1" style="font-size: 1.5rem"><b>Password</b></label>
                         <input  name="password" required value="" id="password" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"  />
                       </div>
                     </div>
                     <div class="form-group " style="margin-bottom: 10px">
                       <div class="col-md-8">

                         <label for="form_control_1" style="font-size: 1.5rem"><b>Confirm password</b></label>
                         <input  name="password_confirm" required value="" id="password_confirm" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"  />
                       </div>
                     </div>
                   </div>


                 <div id="infoMessage" style="color:red ;font-size: 1.5rem"><?php echo $message;?></div>

                 <div class="form-actions " style="margin-top: 10px">
                   <button type="submit" class="btn   " onmousedown="mouseclick.play()" style="font-size: 1.5rem">
                     <img class="mx-auto d-block" src="<?php echo base_url()?>assets/images/SPEDEMY/Sign In _ Up/btn_sign.png"  style="width: 50%;" alt="" />
                   </button>
                 </div>


                        <?php echo form_close();?>

                      </div>
                  </div>
              </div>
          </div>
      </div>







</div>

















        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script>
        <script src="../assets/global/plugins/ie8.fix.min.js"></script>
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url()?>assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>
