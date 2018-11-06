<?php $this->load->view('admin/inc/top');?>

<div class="col-md-6">
        <!-- <div class="btn-group">
            <a href="<?php echo base_url()?>add-lesson" class="btn sbold green"> Add New Lesson
                <i class="fa fa-plus"></i>
            </a>
        </div> -->
        <div class="btn-group">
            <a  onmousedown="mouseclick.play()" href="<?php echo base_url()?>auth/create_group" class="btn sbold green"> Create New GROUP
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>

    <?php if($group->num_rows() > 0){ ?>
    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
      <thead>
        <tr>
          <th></th>
          <th>Group Name</th>
          <th>Description</th>

          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($group->result() as $info):?>
        <tr class="odd gradeX delete-<?php echo $info->id?>">
          <td><?php echo $info->id?></td>

          <td><?php echo $info->name?></td>
          <td><?php echo $info->description?></td>



          <td>
          <!-- <a href=""><span class="fa fa-edit"></span></a> | -->
          <a  onmousedown="mouseclick.play()" href="<?php echo base_url()?>edit_group/<?php echo $info->id?>"><span class="fa fa-edit"></span></a> |
          <a  onmousedown="mouseclick.play()" href="javascript:;" class="delete_group" id="<?php echo $info->id?>"><span class="fa fa-trash"></span></a></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <?php }else{
    echo 'No Groups found...';
    }?>

<?php $this->load->view('admin/inc/footer');?>
