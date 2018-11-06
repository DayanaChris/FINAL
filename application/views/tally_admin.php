<?php $this->load->view('admin/inc/top');?>


    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>
<?php if($resultsALL->num_rows() > 0){ ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
  <thead>
    <tr>
      <th>#</th>
      <th>User</th>
      <th>Level</th>
      <th>Category</th>
      <th>Score</th>
      <th>Total Time Used</th>
      <th>Average Speed</th>
      <th>Accuracy</th>
      <th>Attempts</th>
      <th>Remarks</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultsALL->result() as $info):?>
    <tr class="odd gradeX delete-<?php echo $info->resultID?>">
      <td  ><?php echo $info->resultID?></td>
      <td  ><?php echo $info->first_name?></td>
      <td  ><?php echo $info->level_name?></td>
      <td  ><?php echo $info->category_name?></td>
      <td  ><?php echo $info->score?></td>
      <td  ><?php echo $info->total_time?></td>
      <td  ><?php echo $info->average_speed?></td>
      <td  ><?php echo $info->accuracy?></td>
      <td  ><?php echo $info->attempts?></td>
      <td  ><?php echo $info->remarks?></td>

         </tr>
    <?php endforeach;?>
  </tbody>

</table>
<?php }else{
echo 'No question found...';
}?>

<?php $this->load->view('admin/inc/footer');?>
