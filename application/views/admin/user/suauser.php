<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Sửa User<font color="green"><?php echo $this->session->flashdata('mess'); ?></font></h4>
		</div>
		<div class="clearfix"></div>
		<form method="post">
			<div class="form">							
				<table class="table">
			      <tbody>
			      <tr>
			        <td><p>Tài khoản<?php form_error('tk'); ?></p></td>
			        <td><input type="text" name="tk" class="form-control" value="<?php echo $user->id ?>"></td>
			      </tr>
			      <tr>
			        <td><p>Mật khẩu<?php form_error('mk'); ?></p></td>
			        <td><input type="text" name="mk" class="form-control" value="<?php echo $user->password ?>"></td>
			      </tr>
			      <tr>
			        <td><p>Tên Admin<?php form_error('name'); ?></p></td>
			        <td><input type="text" name="name" class="form-control" value="<?php echo $user->ten_admin ?>"></td>
			      </tr>
							      
			  </tbody>
			  </table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
			</div>
		</form>
	</div><!--end .content-->
</div>
