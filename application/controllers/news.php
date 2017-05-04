<?php

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('news_model', 'news');
    }

    function index() {
        $query['menu'] = $this->news->menu();
        $query['tinmoi'] = $this->news->tinmoi();
        $query['loaitin'] = $this->news->loaitin();
        //           
        foreach ($query['loaitin'] as $lt) {
            $idloaitin = $lt['id'];
            $query['newsloaitin'][$idloaitin] = $this->news->newsloaitin($idloaitin);
        }

        $query['tincapnhat'] = $this->news->tincapnhat();
        $this->load->view('news/news_temp', $query);
    }

    function loaitin($id) {
        $query['menu'] = $this->news->menu();
        $query['loai'] = 'loaitin';
        $query['news'] = $this->news->getnewsfromloaitin($id);
        $query['tincapnhat'] = $this->news->tincapnhat();
        $this->load->view('news/news_temp', $query);
    }

    function detail($id) {
        $query['menu'] = $this->news->menu();
        $query['loai'] = 'chitiet';
        $query['news'] = $this->news->getnews($id);
        $query['tincapnhat'] = $this->news->tincapnhat();
        $query['lienquan'] = $this->news->lienquan($id);
        $this->load->view('news/news_temp', $query);
    }

}
