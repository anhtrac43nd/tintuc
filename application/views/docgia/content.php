<div id="main-content" class="col-2-3">
	<div class="wrap-col">
	<?php foreach($sobaitren1trang->result() as $baiviet){?>
	<article>
		<div class="heading">
			<h2><a href="#"><?php echo $baiviet->tieu_de;?></a></h2>
			<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
		</div>
		<div class="content">
			<img  src="<?php public_helper('admin/img'.$baiviet->hinh_anh)?>">
			<p><?php echo $baiviet->noi_dung;?></p>
			<p class="more"><a class="button" href="#">Read more</a></p>
		</div>
	</article>
	<?php }?>
	<div style="clear:both"></div>
	<ul id='pagi'><?php echo $paginator; ?></ul>
 </div>
</div> 