<div class="content_left" style="width:100%;">
    <div class="box2 widthloaitin">
        <ul  >
            <?php
            foreach ($news as $dong) 
            {
            ?>
            <div style="style=margin-top:5px;">
                <img  src="<?php echo base_url('public/admin/img') . '/' . $dong['hinh_anh']; ?>" width="80" height="80"  style="float:left;"/>
                <li style="list-style:none; font-size:16px;"><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>"><?php echo $dong['tieu_de']; ?></a></li>
             </div>   
                <div class="clear"></div>
            <?php
            }
            ?>
        </ul>
    </div>
</div>