 <?php
$dong = $newsloaitin[0];
?>  
<div class="content">
    <div class="boxtin">
        <p style="margin-left:5px;"><a href="<?php echo site_url('news/loaitin') . '/' . $dong['id_dm']; ?>"><?php //echo $dong['tieu_de']  ?></a></p>
    </div>
    <div class="content_left " style="width:100%;margin-top:10px;">
        <div class="box1">
            <img src="<?php echo base_url('public/admin/img') . '/' . $dong['hinh_anh'] ?>" width="auto" height="250" />
            <p class="tieude"><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>"><?php echo $dong['tieu_de'] ?></a></p>
            
        </div>
        <div class="box2 margin">
            <ul>
            <?php
                $count = count($newsloaitin);
                for ($i = 1; $i < $count; $i++) {
                    $dong = $newsloaitin[$i];
                    ?>
                    <img src="<?php echo base_url('public/admin/img') . '/' . $dong['hinh_anh'] ?>" width="50" height="50"  style="float:left;"/>
                    <li style="list-style:none;"><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>"><?php echo $dong['tieu_de'] ?></a></li>
                    <div class="clear"></div>
                    <?php
                }
                ?>
            </ul> 
        </div>
    </div>
    <!-- Ket thuc content_left -->
    <div class="clear"></div>
</div>

<!-- ket thuc content 2 -->