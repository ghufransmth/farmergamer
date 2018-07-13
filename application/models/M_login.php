<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
    function __construct(){
        //session_start();
        parent::__construct();
    }
    function getDataLogin($username,$encript){
        $sql = "
            SELECT a.*, b.kabupaten, b.logo_kabupaten
            FROM user a,
                kabupaten b
            WHERE a.kode_kab = b.kode_kab
                AND a.userid = $username
                AND a.pass_encript = '$encript'
        ";
        $query=$this->db->query($sql);
        return $query->result();
    }

	function getPuskesmas($username){
        $sql = "
            SELECT *
            FROM puskesmas
            WHERE idpusk = $username
        ";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function getUserData($level) {
        $sql = "
            SELECT userid, level
            FROM(
                SELECT kode_kab as userid, kabupaten as level
                FROM kabupaten
                UNION ALL
                SELECT idpusk, concat(pusk,' - ',kabupaten)as pusk
                FROM puskesmas
				left join kabupaten on kabupaten.kode_kab=puskesmas.idkab
            ) A
            WHERE level LIKE '%$level%'
            ORDER BY level ASC
        ";
        //var_dump($sql); die;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) {
            return $query->result();
        }
    }
}
?>
