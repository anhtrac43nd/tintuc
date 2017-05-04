<div class="boxtin " style="margin:0 0 2px 0">
    <p>Tin cập nhập</p>
</div>
<ul>
    <?php
    foreach ($tincapnhat as $dong) {
        ?>
        <img src="<?php echo base_url('public/admin/img') . '/' . $dong['hinh_anh'] ?>" width="50" height="50"  style="float:left;"/>
        <li style="list-style:none;margin-left:55px;"><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>">
                <?php
                echo $dong['tieu_de'];
                ?>
            </a></li>
        <div class="clear"></div>
        <?php
    }
    ?>
</ul>
</div>

<div class="clear"></div>
<!-- <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
    <img src="<?php echo base_url('news/imgs/Scroll to top.gif'); ?>" width="40" height="40" />
</div> -->