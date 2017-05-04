<div class="content">
    <div class="content_left">
        <?php
        if (isset($loai)) {
            $tam = $loai;
            if ($tam == 'chitiet') {
                $this->load->view('news/chitiettin', $news);
            } elseif ($tam == 'loaitin') {
                $this->load->view('news/chitietloaitin', $news);
            }
        } else {
            $this->load->view('news/tinmoi', $tinmoi);           
            foreach ($loaitin as $lt) {
                $idloaitin = $lt['id'];
                $data['newsloaitin'] = $newsloaitin[$idloaitin];
                $this->load->view('news/boxtina', $data);
            }
        }
        ?>
    </div>

    <!-- Ket thuc content_left -->
    <div class="content_right">
        <?php
        $this->load->view('news/right');
        ?>
        <!-- Ket thuc content_right -->
    </div>
    <div class="clear"></div>
    <!-- ket thuc content 1 -->
