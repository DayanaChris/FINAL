<?php $this->load->view('admin/inc/top');?>

<div class="col-md-6">
        <div class="btn-group">
            <a  onmousedown="mouseclick.play()" href="<?php echo base_url()?>add-video" class="btn sbold green"> Add New Video
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>
    <div class="note note-info">
        <p> Click <b>"ADD NEW Video's"</b> button to add new video. </p>
    </div>
<?php if($video->num_rows() > 0){ ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
  <thead>
    <tr>
      <th></th>
      <th>Video Name</th>
      <th>Video Link</th>
      <th>Video Category</th>

      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($video->result() as $video):?>
    <tr class="odd gradeX delete-<?php echo $video->vid_id?>">
      <td><?php echo $video->vid_id?></td>
      <td><?php echo $video->video_name?></td>
      <td><?php echo $video->video_link?></td>
      <td><?php echo $video->category_name?></td>



      <td>
      <a  onmousedown="mouseclick.play()"  href="<?php echo base_url()?>edit-video/<?php echo $video->vid_id?>"><span class="fa fa-edit"></span></a> |
      <a  onmousedown="mouseclick.play()" href="javascript:;" class="delete_video" id="<?php echo $video->vid_id?>"><span class="fa fa-trash"></span></a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php }else{
echo 'No Videos found...';
}?>

<?php $this->load->view('admin/inc/footer');?>
