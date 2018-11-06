<?php
if($img_list_search->num_rows() > 0){
  foreach($img_list_search->result() as $img){
?>
<div class="plupload_dropbox plupload_view_thumbs" id="uploader_dropbox" style="width: 121px;float: left;">
<ul class="plupload_filelist_content ui-sortable" id="uploader_filelist" unselectable="on">
  <li class="plupload_done ui-state-default plupload_file" style="height: 110px;">
    <div class="plupload_file_thumb plupload_thumb_embedded" style="width: 100px; height: 96px;">
      <img src="<?php echo base_url()?>assets/uploads/<?php echo $img->img_name?>" style="width:100%; cursor:pointer;" class="thsimsge" data-id="<?php echo $img->id?>" data-name="<?php echo $img->img_name?>" />
    </div>
  </li>
</ul>
<div class="plupload_clearer">&nbsp;</div>
</div>
<?php
  }
  echo '<div style="clear:both"></div>';
}else{
  echo 'No images found...';
}

?>
