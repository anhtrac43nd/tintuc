<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Thêm bài viết<font color="green"><?php echo $this->session->flashdata('mess'); ?></font></h4>
		</div>
		<div class="clearfix"></div>
		<form method="post">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>Tiêu đề bài viết<font color="red"><?php echo form_error('title'); ?></font></p></td>
			        <td><input type="text" name="title" class="form-control"></td>
			      </tr>
			      <tr>
			        <td><p>nội dung bài viết<font color="red"><?php echo form_error('content'); ?></font></p></td>
			        <td><textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea></td>
			      </tr>
			      <tr>
			        <td><p>hình ảnh bài viết<font color="red"><?php echo form_error('img'); ?></font></p></td>
			        <td><input type="file" name="img" class="form-control"></td>
			      </tr>
			      <tr>
			        <td><p>Lựa chọn danh mục cha<font color="red"><?php echo form_error('cat'); ?></font></p></td>
			        <td><select name="cat" class="form-control">
						<?php foreach ($listdm as $row){?>
						<option value="<?php echo $row->id ?>"><?php echo $row->ten_dm ?></option>

						<?php } ?>
					</select>
					</td>
			      </tr>							      
			  </tbody></table>							
			</div>
			<div class="col-md-3 form-group pull-right">
				 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
			</div>
		</form>
	</div><!--end .content-->
</div>
<script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['content']) {						
			CKEDITOR.remove(CKEDITOR.instances['content']);
		}
		CKEDITOR.config.width = 600;
	    CKEDITOR.config.height = 150;
		CKEDITOR.replace('content',{});
	})
</script>