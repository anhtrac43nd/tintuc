<div class="col-md-10">				
	<div class="content">
		<div class="col-md-4 add-dm">
			<h4 class="text-center">Sửa bài viết<font color="green"><?php echo $this->session->flashdata('mess'); ?></font></h4>
		</div>
		<div class="clearfix"></div>
		<form method="post">
			<div class="form">							
				<table class="table">
			      <tbody><tr>
			        <td><p>Tiêu đề bài viết<?php form_error('title') ?></p></td>
			        <td><input type="text" name="title" class="form-control" value="<?php echo $baiviet->tieu_de ?>"></td>
			      </tr>
			      <tr>
			        <td><p>nội dung bài viết<?php form_error('content') ?></p></td>
			        <td><textarea name="content" class="form-control" id="" cols="30" rows="10" ><?php echo $baiviet->noi_dung ?></textarea></td>
			      </tr>
			      <tr>
			        <td><p>hình ảnh bài viết<?php form_error('img') ?></p></td>
			        <td><input type="file" name="img" class="form-control" value="<?php echo $baiviet->hinh_anh ?>"></td>
			      </tr>
			      <tr>
			        <td><p>Lựa chọn danh mục cha</p></td>
			        <td><select name="cat" class="form-control">
						<?php foreach ($listdm as $row){
							if($baiviet->id_dm == $row -> id){?> 
								<option selected='selected' value = "<?php echo $row->id ?>"><?php echo $row->ten_dm?>
									
								</option>

								<?php } else ?>
							?>
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