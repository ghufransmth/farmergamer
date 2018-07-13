<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class M_crud extends CI_Model{
		function __construct(){
			//session_start();
			parent::__construct();
		}

        function allInsertSave($data,$getDbName){
                $this->db->insert($getDbName, $data);
                $last_id = $this->db->insert_id();
                if($this->db->affected_rows() > 0){
                    $return = array(
                        'code' => 0,
                        'message' => "Berhasil disimpan",
                        'last_id' => $last_id
                    );
                }
                else{
                    $return = array(
                        'code' => 1,
                        'message' => "Gagal disimpan"
                    );
                }
                return $return;
        }

		function allEditSave($data,$id,$getDbName,$getPrimColumnName){
			$this->db->where($getPrimColumnName, $id);
			$this->db->update($getDbName, $data);

                        if($this->db->affected_rows() > 0){
                            $return = array(
                                'code' => 0,
                                // 'message' => "update successful"
                                'message' => "Update Sukses"
                            );
                        }
                        else{
                            $return = array(
                                'code' => 1,
                                // 'message' => "update failed"
                                'message' => "Update Gagal"
                            );
                        }
                        return $return;
		}

        function allEditSave2($data,$getDbName,$con1,$val1,$con2,$val2){
			$this->db->where($con2,$val2);
            $this->db->where($con1,$val1);
			$this->db->update($getDbName,$data);

                        if($this->db->affected_rows() > 0){
                            $return = array(
                                'code' => 0,
                                // 'message' => "update successful"
                                'message' => "Update Sukses"
                            );
                        }
                        else{
                            $return = array(
                                'code' => 1,
                                // 'message' => "update failed"
                                'message' => "Update Gagal"
                            );
                        }
                        return $return;
		}

		function allValidate($data,$tableName,$columnName,$count){
			$this->db->select($count.' as jumlah');
			$this->db->from($tableName);
			$this->db->where($columnName,$data);
            $this->db->where('STATHAPUS','0');
			return $this->db->get()->result();
		}

        function allValidate2($data,$tableName,$columnName,$count,$data2,$columnParent){
            $this->db->select($count.'as jumlah');
            $this->db->from($tableName);
            $this->db->where('status', 0);
            $this->db->where($columnName,$data);
            $this->db->where($columnParent,$data2);
            //echo $this->db; exit;
            return $this->db->get()->result()[0]->jumlah;
        }

        function allValidate3($data,$tableName,$columnName,$count,$data2,$column2,$data3,$column3){
			$this->db->select($count.'as jumlah');
			$this->db->from($tableName);
            $this->db->where('STATHAPUS','0');
			$this->db->where($columnName,$data);
			$this->db->where($column2,$data2);
            $this->db->where($column3,$data3);
            //echo $this->db; exit;
			return $this->db->get()->result();
		}

		function get_allDetail($getId,$getTableName,$getprimColumnName){
			$this->db->select('*');
			$this->db->from($getTableName);
			$this->db->where($getprimColumnName,$getId);
			return $this->db->get()->result();
		}

        function allEditSaveArray($data,$id,$getDbName,$getPrimColumnName, $position){
			$this->db->where($getPrimColumnName,$id);
			$this->db->update($getDbName,$data);

                        if($this->db->affected_rows() > 0){
                            $return = array(
                                'code' => 0,
                                'message' => "update successful"
                            );
                        }
                        else{
                            $return = array(
                                'code' => 1,
                                'message' => "update failed on position " . $position
                            );
                        }
                        return $return;
		}

		function insertTrashAll($data,$table){
            $this->db->insert($table, $data); return;
        }

		function deleteAll($id,$table,$primColumn){
                    $this->db->where($primColumn,$id);
                    $this->db->delete($table);

                    if($this->db->affected_rows() > 0){
                        $return = array(
                            'code' => 0,
                            'message' => "Hapus Data Berhasil"
                        );
                    }
                    else{
                        $return = array(
                            'code' => 1,
                            'message' => "Hapus Data Gagal"
                        );
                    }
                    return $return;
		}

        function login($username, $password){
            $this -> db -> select('id_user, username, password, level');
            $this -> db -> from('users');
            $this -> db -> where('username', $username);
            $this -> db -> where('password', $password);
            $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1){
                return 1;
            }
            else{
                return 0;
            }
        }

        function getiduser($username){
            $this -> db -> select('id_user');
            $this -> db -> from('users');
            $this -> db -> where('username', $username);
            $this -> db -> limit(1);
            return $this -> db -> get() -> row()->id_user;
        }

        function getlvuser($username){
            $this -> db -> select('level');
            $this -> db -> from('users');
            $this -> db -> where('username', $username);
            $this -> db -> limit(1);
            return $this -> db -> get() -> row()->level;
        }

        function getalldatatable($table){
            $this -> db -> select('*');
            $this -> db -> from($table);
            return $this -> db -> get() -> result();
        }

        function getalldatatablewhere($table,$colname,$val){
            $this -> db -> select('*');
            $this -> db -> from($table);
            $this -> db -> where($colname, $val);
            return $this -> db -> get() -> result();
        }

        function getalldatatablewhere_orderdesc($table,$colname,$val,$orderby){
            $this -> db -> select('*');
            $this -> db -> from($table);
            $this -> db -> where($colname, $val);
            $this -> db -> order_by($orderby,"DESC");
            return $this -> db -> get() -> result();
        }

        function getsingledatatable($table){
            $this -> db -> select('*');
            $this -> db -> from($table);
            return $this -> db -> get() -> row_array();
        }

        function getsingledatatablewhere($table,$colname,$val){
            $this -> db -> select('*');
            $this -> db -> from($table);
            $this -> db -> where($colname, $val);
            return $this -> db -> get() -> row_array();
        }

        function getalljoin($table,$primary1,$jointable,$primary2){
            $this -> db -> select('*');
            $this -> db -> from($table);
            $this -> db -> join($jointable, $jointable.'.'.$primary2.'='.$table.'.'.$primary1);
            return $this -> db -> get() -> result();
        }

        function getalljoinwhere($table,$primary1,$jointable,$primary2,$colname,$val){
            $this -> db -> select('*');
            $this -> db -> from($table);
            $this -> db -> join($jointable, $jointable.'.'.$primary2.'='.$table.'.'.$primary1);
            $this -> db -> where($colname, $val);
            return $this -> db -> get() -> result();
        }

        function lastid($kolom,$tabel){
            $sql = "
                SELECT IFNULL(MAX($kolom),0)
                AS max
                FROM $tabel
            ";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function cekNamaUser($username)
        {
            $this->db->select("*");
            $this->db->from("users");
            $this->db->where("username",$username);
            return $this->db->get();
        }

        function cariKDjual($j_dijual, $tgl)
        {
            $this->db->select("*");
            $this->db->from("dijual");
            $this->db->where("jenis_dijual", $j_dijual);
            $this->db->where("kd_dijual !=", "");
            $this->db->where("tgl_input", $tgl);
            $this->db->order_by("id_dijual","DESC");
            $this->db->limit(1);
            return $this->db->get();
        }

        function cariKDdicari($j_dicari, $tgl)
        {
            $this->db->select("*");
            $this->db->from("dicari");
            $this->db->where("jenis_dicari", $j_dicari);
            $this->db->where("kd_dicari !=", "");
            $this->db->where("tgl_input", $tgl);
            $this->db->order_by("id_dicari","DESC");
            $this->db->limit(1);
            return $this->db->get();
        }

        function kdotomatis_awal()
        {
            $kd="A1";
            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Y-m-d");
            $tglnya = date("dmy");

            $query = $this->db->select("*")->from("dijual")->where("jenis_dijual", "produk")->where("kd_dijual !=", "")->where("tgl_input",$tanggal)->order_by("id_dijual", "DESC")->limit(1)->get();

            if($query->num_rows()>0)
            {
                $ambil = $query->row_array();
                $ambil_nmr = substr($ambil['kd_dijual'],8,4);
                $angkanya = $ambil_nmr + 1;

                $hsl = $kd. $tglnya.sprintf('%04s',$angkanya);
            }
            else
            {
                $hsl = "A1". $tglnya. "0001";
            }

            return $hsl;
            
        }

        function kdotomatis_awal2()
        {
            $kd="A2";
            date_default_timezone_set("Asia/Jakarta");
            $tanggal = date("Y-m-d");
            $tglnya = date("dmy");

            $query = $this->db->select("*")->from("dicari")->where("jenis_dicari", "produk")->where("kd_dicari !=", "")->where("tgl_input",$tanggal)->order_by("id_dicari", "DESC")->limit(1)->get();

            if($query->num_rows()>0)
            {
                $ambil = $query->row_array();
                $ambil_nmr = substr($ambil['kd_dicari'],8,4);
                $angkanya = $ambil_nmr + 1;

                $hsl = $kd. $tglnya.sprintf('%04s',$angkanya);
            }
            else
            {
                $hsl = "A2". $tglnya. "0001";
            }

            return $hsl;
            
        }

        function getDijualWhere($iduser){
            $this->db->select('*');
            $this->db->from("dijual");
            $this->db->join("list_game", "list_game.id_game = dijual.id_game");
            $this->db->where("dijual.id_user", $iduser);
            $this->db->order_by("id_dijual", "ASC");
            return $this->db->get()->result();
        }

        function getDicariWhere($iduser){
            $this->db->select('*');
            $this->db->from("dicari");
            $this->db->join("list_game", "list_game.id_game = dicari.id_game");
            $this->db->where("dicari.id_user", $iduser);
            $this->db->order_by("id_dicari", "ASC");
            return $this->db->get()->result();
        }

        function cariDetailDijualBy($id)
        {
            $this->db->select("*");
            $this->db->from("dijual");
            $this->db->join("list_game", "list_game.id_game = dijual.id_game");
            $this->db->join("users", "users.id_user = dijual.id_user");
            $this->db->where("dijual.id_dijual",$id);
            return $this->db->get()->row_array();
        }

        function cariDetailDicariBy($id)
        {
            $this->db->select("*");
            $this->db->from("dicari");
            $this->db->join("list_game", "list_game.id_game = dicari.id_game");
            $this->db->join("users", "users.id_user = dicari.id_user");
            $this->db->where("dicari.id_dicari",$id);
            return $this->db->get()->row_array();
        }

        function cek_idUserDijual($id_user,$id_dijual)
        {
            $this->db->select("*");
            $this->db->from("dijual");
            $this->db->where("id_user",$id_user);
            $this->db->where("id_dijual", $id_dijual);
            return $this->db->get();
        }

        function cek_idUserDicari($id_user,$id_dicari)
        {
            $this->db->select("*");
            $this->db->from("dicari");
            $this->db->where("id_user",$id_user);
            $this->db->where("id_dicari", $id_dicari);
            return $this->db->get();
        }

        function cari_dijualJoin($id_dijual)
        {
            $this->db->select("*");
            $this->db->from("dijual");
            $this->db->join("list_game", "list_game.id_game = dijual.id_game");
            $this->db->join("users","users.id_user = dijual.id_user");
            $this->db->where("dijual.id_dijual", $id_dijual);
            return $this->db->get()->row_array();
        }

        function cari_dicariJoin($id_dicari)
        {
            $this->db->select("*");
            $this->db->from("dicari");
            $this->db->join("list_game", "list_game.id_game = dicari.id_game");
            $this->db->join("users","users.id_user = dicari.id_user");
            $this->db->where("dicari.id_dicari", $id_dicari);
            return $this->db->get()->row_array();
        }

        function getAllWithJoinWhere($primary,$val,$col,$table1,$table2,$key)
        {
            $this->db->select("*");
            $this->db->from($table1);
            $this->db->join($table2, $table2.'.'.$key.'='.$table1.'.'.$key);
            $this->db->where($col, $val);
            $this->db->order_by($table1.'.'.$primary,"DESC");
            return $this->db->get()->result();
        }

        function cekFav($id_jual,$id_user)
        {
            $this->db->select("*");
            $this->db->from("favorit_dijual");
            $this->db->where("id_dijual", $id_jual);
            $this->db->where("id_user", $id_user);
            return $this->db->get();
        }

        function cekFavJoin($id_user)
        {
            $this->db->select("*");
            $this->db->from("favorit_dijual");
            $this->db->join("dijual","dijual.id_dijual = favorit_dijual.id_dijual");
            $this->db->join("users","users.id_user = favorit_dijual.id_user");
            $this->db->where("favorit_dijual.id_user", $id_user);
            return $this->db->get();
        }

        // function cek_transaksi_iduser($val)
        // {
        //     $this -> db -> select('*');
        //     $this -> db -> from("transaksi");
        //     $this -> db -> where("id_pembeli", $val);
        //     $this -> db -> order_by("id_transaksi","DESC");
        //     $this -> db -> limit(1);
        //     return $this -> db -> get();
        // }

        // function cari_notransaksi($val)
        // {
        //     $this -> db -> select('*');
        //     $this -> db -> from("transaksi");
        //     $this -> db -> where("id_pembeli", $val);
        //     $this -> db -> order_by("id_transaksi","DESC");
        //     $this -> db -> limit(1);
        //     return $this -> db -> get();
        // }

        function cek_PembayaranJoinTransaksi($val)
        {
            $this -> db -> select('*');
            $this -> db -> from("pembayaran");
            $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
            $this -> db -> where("transaksi.id_pembeli", $val);
            $this -> db -> order_by("pembayaran.id_pembayaran","DESC");
            $this -> db -> limit(1);
            return $this -> db -> get();
        }

        // function cek_daftarBelanja($table,$colname,$val,$orderby)
        // {
        //     $this -> db -> select('*');
        //     $this -> db -> from($table);
        //     $this -> db -> where($colname, $val);
        //     $this -> db -> order_by($orderby,"DESC");
        //     return $this -> db -> get();
        // }

        function cek_daftarBelanjaBelumBayar($val)
        {
            $this -> db -> select('*');
            $this -> db -> from("pembayaran");
            $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
            // $this -> db -> from("transaksi");
            // $this -> db -> join("pembayaran","pembayaran.id_pembayaran=transaksi.id_pembayaran");
            // $this -> db -> join("transaksi_dijual","transaksi_dijual.id_transaksi=transaksi.id_transaksi");
            $this -> db -> where("transaksi.id_pembeli", $val);
            $this -> db -> where("transaksi.pembayaran", 0);
            $this -> db -> where("transaksi.selesai", 0);
            $this -> db -> where("transaksi.pengembalian", 0);
            $this -> db -> order_by("pembayaran.id_pembayaran","DESC");
            $this -> db -> group_by("transaksi.id_pembayaran");
            return $this -> db -> get();
        }

        function cek_daftarBelanjaPengiriman($val)
        {
            $this -> db -> select('*');
            $this -> db -> from("pembayaran");
            $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
            $this -> db -> where("transaksi.id_pembeli", $val);
            $this -> db -> where("transaksi.pembayaran", 1);
            $this -> db -> where("transaksi.selesai", 0);
            $this -> db -> order_by("pembayaran.id_pembayaran","DESC");
            $this -> db -> group_by("transaksi.id_pembayaran");
            return $this -> db -> get();
        }

        // function cek_daftarBelanjaSelesai($val)
        // {
        //     $this -> db -> select('*');
        //     $this -> db -> from("pembayaran");
        //     $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
        //     $this -> db -> where("transaksi.id_pembeli", $val);
        //     $this -> db -> where("transaksi.pembayaran", 1);
        //     $this -> db -> where("transaksi.selesai", 1);
        //     $this -> db -> order_by("pembayaran.id_pembayaran","DESC");
        //     return $this -> db -> get();
        // }

        function cek_daftarBelanjaSelesai($val)
        {
            $this -> db -> select('*');
            $this -> db -> from("transaksi");
            $this -> db -> join("transaksi_dijual","transaksi_dijual.id_transaksi=transaksi.id_transaksi");
            $this -> db -> where("transaksi.id_pembeli", $val);
            $this -> db -> where("transaksi.pembayaran", 1);
            $this -> db -> where("transaksi.selesai", 1);
            $this -> db -> order_by("transaksi.id_transaksi","DESC");
            $this -> db -> group_by("transaksi.id_transaksi");
            return $this -> db -> get();
        }

        function cek_daftarBelanjaPengembalian($val)
        {
            $this -> db -> select('*');
            $this -> db -> from("pembayaran");
            $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
            $this -> db -> where("transaksi.id_pembeli", $val);
            $this -> db -> where("transaksi.pengembalian", 1);
            $this -> db -> order_by("pembayaran.id_pembayaran","DESC");
            $this -> db -> group_by("transaksi.id_pembayaran");
            return $this -> db -> get();
        }

        function cek_infoPembayaran($id_pembeli,$kd_pembayaran)
        {
            $this -> db -> select('*');
            $this -> db -> from("pembayaran");
            $this -> db -> join("transaksi","transaksi.id_pembayaran=pembayaran.id_pembayaran");
            $this -> db -> where("transaksi.id_pembeli", $id_pembeli);
            $this -> db -> where("pembayaran.kode_pembayaran", $kd_pembayaran);
            return $this -> db -> get();
        }

        function getallitemtransaksi($id_transaksi,$id_penjual)
        {
            $this->db->select("*");
            $this->db->from("transaksi_dijual");
            $this->db->join("transaksi","transaksi.id_transaksi=transaksi_dijual.id_transaksi");
            $this->db->join("dijual","dijual.id_dijual=transaksi_dijual.id_dijual");
            $this->db->where("transaksi.id_transaksi",$id_transaksi);
            $this->db->where("transaksi.id_penjual",$id_penjual);
            return $this->db->get();
        }

        // function get_DijualJoinRating($id_dijual)
        // {
        //     $this->db->select("*");
        //     $this->db->from("dijual");
        //     $this->db->join("rating_dijual","rating_dijual.id_dijual=dijual.id_dijual");
        //     $this->db->where("dijual.id_dijual",$id_dijual);
        //     return $this->db->get();
        // }

        function cari_idRatingDijual($id_transaksi,$id_dijual,$id_pembeli)
        {
            $this->db->select("*");
            $this->db->from("rating_dijual");
            $this->db->where("id_transaksi",$id_transaksi);
            $this->db->where("id_dijual",$id_dijual);
            $this->db->where("id_pembeli",$id_pembeli);
            return $this->db->get();
        }

        function getRatingItemBy($id_penjual)
        {
            $this->db->select("*");
            $this->db->from("rating_dijual");
            $this->db->join("dijual","dijual.id_dijual=rating_dijual.id_dijual");
            $this->db->join("transaksi","transaksi.id_transaksi=rating_dijual.id_transaksi");
            $this->db->where("rating_dijual.id_penjual",$id_penjual);
            return $this->db->get();
        }

        function lihatPenilaianProduk($id_dijual)
        {
            $this->db->select("*");
            $this->db->from("rating_dijual");
            $this->db->join("dijual","dijual.id_dijual=rating_dijual.id_dijual");
            $this->db->join("transaksi","transaksi.id_transaksi=rating_dijual.id_transaksi");
            $this->db->where("rating_dijual.id_dijual",$id_dijual);
            return $this->db->get();
        }


	}
?>
