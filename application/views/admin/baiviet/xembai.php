<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Bài Viết <font color="green"><?php echo $this->session->flashdata('mess') ?></font></h4>
		</div>
		<div class="clearfix"></div>				
				<table class="table table-bordered" style="margin-top:20px;">
					<tbody><tr class="bg-info">
						<td>ID</td>
						<td>Tiêu đề</td>
						<td>Hình ảnh</td>
						<td>edit</td>
						<td>delete</td>
					</tr>
					<?php foreach ($list as $row){?>
					<tr>
						<td><?php echo $row->id;?></td>
						<td><?php echo $row->tieu_de;?></td>
					    <td><img width="100" src="<?php echo public_helper('admin/img/'.$row->hinh_anh)?>"</td> 
						<td><?php echo $row->id_dm;?></td>
						<td><a href="<?php echo admin_url('baiviet/suabai/'.$row->id);?>">edit</a></td>
						<td><a href="<?php echo admin_url('baiviet/xoabai/'.$row->id);?>">delete</a></td>
					</tr>
					<?php } ?>
				</tbody></table>							

	</div><!--end .content-->
</div>