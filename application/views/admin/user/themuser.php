<div class="col-md-10">       
  <div class="content">
    <div class="col-md-5 add-dm">
      <h4>Thêm Người dùng <font color='green'><?php echo $this->session->flashdata('mess')?></font></h4>
    </div>
    <div class="clearfix"></div>
    <form method="post">
      <div class="form">              
        <table class="table">
            <tbody>
            <tr>
              <td><p>Tài khoản</p><span><?php echo form_error('tk');?></span></td>
              <td>
                <input name="tk" class="form-control" type="text" value="<?php set_value('tk')?>">
              </td>
            </tr>          
            <tr>
              <td><p>Mật khẩu</p><span><?php echo form_error('mk');?></span></td>
              <td>
                <input name="mk" class="form-control" type="text" value="<?php set_value('mk')?>">
              </td>
            </tr> 
            <tr>
              <td><p>Tên Admin</p><span><?php echo form_error('name');?></span></td>
              <td>
                <input name="name" class="form-control" type="text" value="<?php set_value('name')?>">
              </td>
            </tr>    
        </tbody></table>              
      </div>
      <div class="col-md-3 form-group pull-right">
         <input name="ok" value="saves" class="btn btn-primary btn-block" type="submit">
      </div>
    </form>
  </div><!--end .content-->
</div>
