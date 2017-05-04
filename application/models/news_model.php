<?php

class News_model extends CI_Model {

    function getnews($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('baiviet');
        return $query->row_array();
    }

    function getnewsfromloaitin($id) {
        $this->db->where('id_dm', $id);
        $query = $this->db->get('baiviet');
        return $query->result_array();
    }

    function lienquan($id) {
        //  $sql="select * from news_baiviet where idloaitin='$idloaitin' and idbaiviet!='$id')";

        $idloaitin = $this->getloaitin($id);
        $sql = "select * from baiviet where id_dm='$id' and id!='$id'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function getloaitin($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('baiviet')->row_array();
        return $query['id_dm'];
    }

    function tincapnhat() {
        $sql = "select * from baiviet order by id desc limit 10";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function tinmoi() {
        $sql = "select * from baiviet order by id desc limit 9";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function menu() {
        $sql = "select * from dmbaiviet order by id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function loaitin() {       
        $query = $this->db->get('dmbaiviet');
        return $query->result_array();
    }

    function newsloaitin($id_dm) {
        $sql = "select * from baiviet 
	      where id_dm=$id_dm order by id desc limit 5 ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    //admin
    function lietkeloaitin() {
        $sql = "select * from dmbaiviet order by thutu desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getloaitinfromid($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('dmbaiviet');
        return $query->row_array();
    }

    function lietkebaiviet() {
        $sql = "select baiviet.id,tieude,hinh_anh,noi_dung,dmbaiviet.ten_dm
	 from baiviet,dmbaiviet where dmbaiviet.id=baiviet.id_dm  order by id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

  //   function themloaitin($tenloaitin, $trangthai, $thutu) {
  //       $sql = "insert into news_loaitin(tenloaitin,trangthai,thutu) values('$tenloaitin','$trangthai','$thutu')";
  //       $query = $this->db->query($sql);
  //   }

  //   function sualoaitin($tenloaitin, $trangthai, $thutu, $id) {
  //       $sql = "update news_loaitin set tenloaitin='$tenloaitin',trangthai='$trangthai',thutu='$thutu' 
		// where idloaitin=$id";
  //       $query = $this->db->query($sql);
  //   }

  //   function xoaloaitin($id) {
  //       $sql = "delete from news_loaitin where idloaitin='$id'";
  //       $query = $this->db->query($sql);
  //   }

  //   function thembaiviet($tenbaiviet, $dich, $tomtat, $noidung, $loaitin, $trangthai, $thutu) {
  //       $sql = "insert into news_baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		// values('$tenbaiviet','$dich','$tomtat','$noidung','$loaitin','$trangthai','$thutu')";
  //       $query = $this->db->query($sql);
  //   }

  //   function suabaiviet($tenbaiviet, $dich, $tomtat, $noidung, $loaitin, $trangthai, $thutu, $id) {

  //       $sql = "update news_baiviet set tenbaiviet='$tenbaiviet',anhminhhoa='$dich',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu'
		// where idbaiviet='$id'";
  //       $query = $this->db->query($sql);
  //   }

  //   function xoabaiviet($id) {
  //       $sql = "delete from news_baiviet where idbaiviet='$id'";
  //       $query = $this->db->query($sql);
  //   }

}
