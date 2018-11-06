<?php $this->load->view('templates/temp_alphabets');  ?>

<?php

  // $this->load->view('templates/header');
  $this->load->view('templates/nav_cat');  ?>

<body class="tally_bg" style="padding:0; margin-top:30px">

<style >
      /* .table-fixed thead {
        width: 97%;
      }
      .table-fixed tbody {
        height: 530px;
        overflow-y: auto;
        width: 100%;
      } */
      /* .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
        display: block;
      } */
      /* .table-fixed tbody td, .table-fixed thead > tr> th {
        float: left;
        border-bottom-width: 0;
      } */



      .table-fixed{
        width: 100%;
        background-color: #f3f3f3;
        tbody{
          height:200px;
          overflow-y:auto;
          width: 100%;
          }

        tbody{
          td{
            float:left;
          }
        }
        thead {
          tr{
            th{
              float:left;
             background-color: #f39c12;
             border-color:#e67e22;
            }
          }
        }
      }

</style>

<div class="container-fluid" >


  <div class="container " style="margin-top: 5px">
    <img src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board_results2.png" style="width: 100% ; margin-top: 40px ">
    <div  class="row">
      <div class="col ">
        <a   href="<?php echo base_url(); ?>category_menu">
            <img  class="zoom" src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/main.png" style="width: 20% ; margin-top: 1px ">
        </a>
      </div>
      <!-- <div class="col ">
        <a   href="<?php echo base_url(); ?>category_menu" >

        <img class="zoom" src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/play_again.png" style="width: 40% ; margin-top: 1px ">
      </a>

      </div> -->
  </div>



  <div class="container " >


    <div class=" ">
      <div class="panel-heading ">

      </div>
        <?php if($resultsALL->num_rows() > 0){ ?>

        <!-- <table class="table table-fixed table-light"  id="sample_1"> -->
          <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

          <!-- <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1"> -->

          <thead class="thead-dark">
            <tr class="text-center ">
                <th class="col-xs-1">#</th>
                <th class="col-xs-1">User</th>
                <th class="col-xs-2">Level</th>
                <th class="col-xs-2">Category</th>
                <th class="col-xs-1">Score</th>
                <th class="col-xs-2">Total Time Used</th>
                <th class="col-xs-1">Average Speed</th>
                <th class="col-xs-1">Accuracy</th>
                <th class="col-xs-1">Attempts</th>
                <th class="col-xs-1">Remarks</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($resultsALL->result() as $info):?>
            <tr class="odd gradeX delete-<?php echo $info->resultID?>">
                  <td class="col-xs-1"><?php echo $info->resultID?></td>
                  <td class="col-xs-1"><?php echo $info->first_name?></td>
                  <td class="col-xs-2"><?php echo $info->level_name?></td>
                  <td class="col-xs-2"><?php echo $info->category_name?></td>
                  <td class="col-xs-1"><?php echo $info->score?></td>
                  <td class="col-xs-2"><?php echo $info->total_time?></td>
                  <td class="col-xs-1"><?php echo $info->average_speed?></td>
                  <td class="col-xs-1"><?php echo $info->accuracy?></td>
                  <td class="col-xs-1"><?php echo $info->attempts?></td>
                  <td class="col-xs-1"><?php echo $info->remarks?></td>


            </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      <?php }else{
    echo 'No results found...';
    }?>
      </div>

    </div>










        <!-- <div class="form-group row">
          <div class="col">
            <input type="hidden" class="form-control-plaintext" name="category_id"  value="<?php echo $category_id?>"  >
          </div>
        </div> -->



  <!--score guide  -->
  <div class="container " style="">
    <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/results.png" style="width: 100% ; margin-top: 10px ">
  </div>

</div>







<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
 <script src="<?php echo base_url(); ?>assets/apps/scripts/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/script.js"></script>
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
