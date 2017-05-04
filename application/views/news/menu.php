<div class="menu">
    <ul>      
        <li><a href="<?php echo site_url('news/index'); ?>">Trang chủ</a></li>
        <?php
        foreach ($menu as $dong) {
            ?>
            <li><a href="<?php echo site_url('news/loaitin') . '/' . $dong['id']; ?>">
                    <?php
                    echo $dong['ten_dm'];
                    ?></a></li>
            <?php
        }
        ?>
    </ul>
</div>

<!-- ket thuc menu -->