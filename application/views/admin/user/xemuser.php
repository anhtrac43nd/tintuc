<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Tài khoản<font color="Green"><?php echo $this->session->flashdata('mess'); ?></font></h4>
		</div>
		<div class="clearfix"></div>				
				<table class="table table-bordered" style="margin-top:20px;">
					<tbody><tr class="bg-info">
						<td>id</td>
						<td>Password</td>
						<td>Ten Admin</td>
					</tr>
					<?php foreach($list as $row) {  ?>
					<tr>
						<td><?php echo $row->id ?></td>
						<td><?php echo $row->password ?></td>
						<td><?php echo $row->ten_admin ?></td>
						<td><a href="<?php echo admin_url('user/suauser/'.$row->id);?>">edit</a></td>
						<td><a href="<?php echo admin_url('user/xoauser/'.$row->id);?>">delete</a></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>							

	</div><!--end .content-->
</div>