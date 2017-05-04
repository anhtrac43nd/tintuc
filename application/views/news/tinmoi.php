<?php
$dong = $tinmoi[0];
?>
<div class="box1">
    <img src="<?php echo base_url('public/admin/img') . '/' . $dong['hinh_anh'] ?>" width="350" height="250" />
    <p class="tieude"><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>"><?php echo $dong['tieu_de'] ?></a></p>
    
</div>
<div class="box2">
    <ul>
        <?php
        $count = count($tinmoi);
        for ($i = 1; $i < $count; $i++) {
            $dong = $tinmoi[$i];
            ?>
            <li><a href="<?php echo site_url('news/detail') . '/' . $dong['id']; ?>">
                    <?php echo $dong['tieu_de'] ?>
                </a></li>
            <?php
        }
        ?>
    </ul>
</div>
<div class="clear"></div>