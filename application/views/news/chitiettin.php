<?php
$dong = $news;
?>
<div class="content_left row" style="width:100%; text-align:justify" >
    <?php echo $dong['tieu_de'] ?>
    <?php
    echo stripcslashes($dong['noi_dung'])
    ?>
    <?php
    $lienquan = array();
    $lienquan['idloaitin'] = $dong['id_dm'];
    $lienquan['cur_id'] = $dong['id'];
    $this->load->view('news/tinlienquan', $lienquan);
    ?>
<!--     <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
        <img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div> -->
</div>