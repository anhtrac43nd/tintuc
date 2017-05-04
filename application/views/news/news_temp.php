<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('news/css.css'); ?>" />
        <script type="text/javascript" src="<?php echo base_url('news/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('news/jquery/scripts.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('news/jquery/scroll-to-top.js'); ?>"></script>
        <title>Tin tức </title>
    </head>

    <body>
        <div class="status"></div>
        <div class="wrapper">
            <?php
            //include('news/config.php');
            $this->load->view('news/header.php');
            $this->load->view('news/menu.php');
            $this->load->view('news/content.php');
            $this->load->view('news/footer.php');
            ?>

        </div>
    </body>
</html>