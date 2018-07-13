<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    
    function getConsId(){
    	$consId = "12236";
    	return $consId;
    }

    function getSecretKey(){
    	$secret = "4sT132B0E2";
    	return $secret;
    }

    function bpjsApi($key){
    	$data = "";
    	switch ($key) {
			case "consId":
				$data = "12236";
				break;

			case "secretKey":
				$data = "4sT132B0E2";
				break;

			case "userPcare":
				$data = "0158b052";
				break;

			case "passPcare":
				$data = "Tamara12/";
				break;

			case "baseUrl":
				$data = "http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/";
				break;

			case "kodeApp":
				$data = "095";
				break;
		}

		return $data;
    }


    function getBackDir($parentId, $db_table='root'){
        // Get a reference to the controller object
        $CI = get_instance();
        // You may need to load the model if it hasn't been pre-loaded
        $CI->load->model('m_view');
        
            if($parentId==0){
                $backDir="";
            }
            else{
                $nowId=$parentId;
                $x=0;
                $deepLvl=0; //menghitung tingkatan Level
                $dir="";
                while($nowId!=0){ //Jika parent_id != 0 , lanjutkan perulangan
                    $parent=$CI->m_view->getTabelDef($db_table,'id',$nowId); //get parent id name
                    foreach($parent as $prt){
                        $result[$x]['id']=$prt->id;
                        $result[$x]['parent_id']=$prt->parent_id;
                        $result[$x]['description']=$prt->description;
                    }

                    $nowId=$result[$x]['parent_id']; //parent_id berikutnya adalah id pada hasil query sekarang
                    //$dir=$result[$x]['description']."/".$dir;
                    $deepLvl++;
                    $x++;
                }
                //echo "<pre>"; var_dump($result); die;
                
                if($deepLvl==1){$backDir="";} //untuk menanggulangi offset array jika hanya 1 result
                else {$backDir=$result[1]['id'];}
            }
            return $backDir;
    }
    function getDirektori($parentId, $db_table='root'){
        // Get a reference to the controller object
        $CI = get_instance();
        // You may need to load the model if it hasn't been pre-loaded
        $CI->load->model('m_view');
            if($parentId==0){
                $dir="";
            }
            else{
                $nowId=$parentId;
                $x=0;
                $deepLvl=0; //menghitung tingkatan Level
                $dir="";
                while($nowId!=0){ //Jika parent_id != 0 , lanjutkan perulangan
                    $parent=$CI->m_view->getTabelDef($db_table,'id',$nowId); //get parent id name
                    foreach($parent as $prt){
                        $result[$x]['id']=$prt->id;
                        $result[$x]['parent_id']=$prt->parent_id;
                        $result[$x]['description']=$prt->description;
                    }

                    $nowId=$result[$x]['parent_id']; //parent_id berikutnya adalah id pada hasil query sekarang
                    $dir=$result[$x]['description']."/".$dir;
                    $deepLvl++;
                    $x++;
                }
            }
            return $dir;
    }
    function romawi($number){ 
        $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1); 
        $return = ''; 
        while($number > 0){ 
            foreach($table as $rom=>$arb){ 
                if($number >= $arb){ 
                    $number -= $arb; 
                    $return .= $rom; 
                    break; 
                } 
            } 
        } 
     
        return $return; 
    }
    function putDetailPlot($id)
	{
		$CI =& get_instance();
		$CI->load->model('globals_model');
		$data = $CI->globals_model->getDetailPlot($id);
		return $data;
	}
    
    
    function getNextId4Sub($lastId){ //for produk
    	$front=substr($lastId,0,3);
    	$behind=substr($lastId,3);
    	$next=$behind+1;
    	if(empty($next)){$nextBehind="0000";}
    	else if($next<10){$nextBehind="000".$next;}
    	else if($next<100){$nextBehind="00".$next;}
        else if($next<1000){$nextBehind="0".$next;}
    	else{$nextBehind=$next;}
					
	   return($nextBehind);
    }
    function getNextId4($lastId){ //for produk
    	//$front=substr($lastId,0,7);
    	$behind=substr($lastId,0,4);
    	$next=$behind+1;
    	if(empty($next)){$nextBehind="0000";}
    	else if($next<10){$nextBehind="000".$next;}
    	else if($next<100){$nextBehind="00".$next;}
        else if($next<1000){$nextBehind="0".$next;}
    	else{$nextBehind=$next;}
					
	   return($nextBehind);
    }
    function getNextId3($lastId){ //for produk
    	//$front=substr($lastId,0,7);
    	$behind=substr($lastId,0,3);
    	$next=$behind+1;
    	if(empty($next)){$nextBehind="000";}
    	else if($next<10){$nextBehind="00".$next;}
    	else if($next<100){$nextBehind="0".$next;}
    	else{$nextBehind=$next;}
					
	   return($nextBehind);
    }
    function getNextId2($lastId){ //for produk
    	//$front=substr($lastId,0,7);
    	$behind=substr($lastId,0,2);
    	$next=$behind+1;
    	if(empty($next)){$nextBehind="00";}
    	else if($next<10){$nextBehind="0".$next;}
    	else{$nextBehind=$next;}
					
	   return($nextBehind);
    }
    function getNextId1($lastId){ //for produk
    	//$front=substr($lastId,0,7);
    	$behind=substr($lastId,0,1);
    	$next=$behind+1;
    	if(empty($next)){$nextBehind="0";}
    	else{$nextBehind=$next;}
					
	   return($nextBehind);
    }
    
    //--------------------------FUNGSI PENTING BY ANDI====================================================================================
    //Fungsi untuk membuat rupiah
		function rupiah($angka){
			$angka = number_format($angka,2);
			$angka1 = str_replace('.', '-', $angka); 
            $angka2 = str_replace(',', '.', $angka1);
            $angka = str_replace('-', ',', $angka2);
			//$angka = "Rp. "."$angka";
			$angka = $angka;
			return $angka;
		}
    //Fungsi untuk membuat terbilang
		function terbilang($satuan){ 
			$huruf = array ("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh","Sebelas"); 
			if ($satuan < 12) return " ".$huruf[$satuan]; 
			elseif ($satuan < 20) return terbilang($satuan - 10)." Belas"; 
			elseif ($satuan < 100) return terbilang($satuan / 10)." Puluh".terbilang($satuan % 10); 
			elseif ($satuan < 200) return "Seratus".terbilang($satuan - 100); 
			elseif ($satuan < 1000) return terbilang($satuan / 100)." Ratus".terbilang($satuan % 100); 
			elseif ($satuan < 2000) return "seribu".terbilang($satuan - 1000); 
			elseif ($satuan < 1000000) return terbilang($satuan / 1000)." Ribu".terbilang($satuan % 1000); 
			elseif ($satuan < 1000000000) return terbilang($satuan / 1000000)." Juta".terbilang($satuan % 1000000); 
			elseif ($satuan >= 1000000000) echo "Angka yang Anda masukkan terlalu besar"; 
		}
    //Fungsi untuk membuat nomer urut
		function getNumber($getCount){
			if($getCount<10){$getCountShow="000".$getCount;}
			else if($getCount<100){$getCountShow="00".$getCount;}
			else if($getCount<1000){$getCountShow="0".$getCount;}
			else{$getCountShow=$getCount;}
			return $getCountShow;	
		}

		function sex($lp){
			switch ($lp){
                case 'L':return "Laki-laki";break;
				case 'l':return "Laki-laki";break;
				case 'M':return "Laki-laki";break;
				case 'm':return "Laki-laki";break;
				case 'P':return "Perempuan";break;
				case 'p':return "Perempuan";break;
				case 'F':return "Perempuan";break;
				case 'f':return "Perempuan";break;
			}
		}

		function tgl_ddmmyyyy($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = substr($tgl,5,2);
			$tahun = substr($tgl,0,4);
			return $tanggal.'/'.$bulan.'/'.$tahun;
		}
		function tgl_mysql($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tahun.'/'.$bulan.'/'.$tanggal;
		}


		function tgl_ddmmyyyy_dash($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tanggal.'-'.$bulan.'-'.$tahun;
		}
		//Fungsi untuk mengubah format tanggal ke indonesia 21/09/2014 misal
		function tgl_indo ($tgl) {
			$tanggal = substr($tgl,0,2);
			$bulan = getBulan(substr($tgl,3,2));
			$tahun = substr($tgl,6,4);
			return $tanggal.' '.$bulan.' '.$tahun;
		}
        function tgl_indoYF ($tgl) { //Year Front
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;
		}
		function getBulan($bln){
			switch ($bln){
                case 1:return "Januari";break;
				case 2:return "Februari";break;
				case 3:return "Maret";break;
				case 4:return "April";break;
				case 5:return "Mei";break;
				case 6:return "Juni";break;
				case 7:return "Juli";break;
				case 8:return "Agustus";break;
				case 9:return "September";break;
				case 10:return "Oktober";break;
				case 11:return "November";break;
				case 12:return "Desember";break;
			}
		}
		function getBulanC($bln){
			switch ($bln){
				case 1:return "Jan";break;
				case 2:return "Feb";break;
				case 3:return "Mar";break;
				case 4:return "Apr";break;
				case 5:return "Mei";break;
				case 6:return "Jun";break;
				case 7:return "Jul";break;
				case 8:return "Agu";break;
				case 9:return "Sep";break;
				case 10:return "Okt";break;
				case 11:return "Nov";break;
				case 12:return "Des";break;
			}
		}
		
		//Fungsi untuk menghitung selisih format 2014/09/21
		function dateDiff($tanggalA,$tanggalB){	
			$tahunA=substr($tanggalA,0,4);
			$bulanA=substr($tanggalA,5,2);
			$hariA=substr($tanggalA,8,2);
			
			$tahunB=substr($tanggalB,0,4);
			$bulanB=substr($tanggalB,5,2);
			$hariB=substr($tanggalB,8,2);
			
			if($bulanB==01){ 
				$dayOfMonth=cal_days_in_month(CAL_GREGORIAN,12,$tahunB); //jumlah hari dalam bulan tertentu
			}
			else{
				$dayOfMonth=cal_days_in_month(CAL_GREGORIAN,$bulanB-1,$tahunB);
			}
			//echo $day; exit;
			if($tahunA<=$tahunB && $bulanA<=$bulanB && $hariA<=$hariB){
					$tahunS=$tahunB-$tahunA;
					$bulanS=$bulanB-$bulanA;
					$hariS=$hariB-$hariA;
			}
			else{
				if($bulanB<=$bulanA){		//jika bulan B lebih kecil dari bulan A
					if($hariB<$hariA){
						$tahunS=$tahunB-($tahunA+1);
						$bulanS=($bulanB+11)-$bulanA;
						$hariS=$hariB+($dayOfMonth-$hariA);		
					}
					else{
						$tahunS=$tahunB-($tahunA+1);
						$bulanS=($bulanB+12)-$bulanA;
						$hariS=$hariB-$hariA;
					}
				}
				else{
					if($hariB<=$hariA){
						$tahunS=$tahunB-$tahunA;
						$bulanS=($bulanB-1)-$bulanA;
						$hariS=$hariB+($dayOfMonth-$hariA);
					}
					else{
						$tahunS=$tahunB-$tahunA;
						$bulanS=$bulanB-$bulanA;
						$hariS=$hariB-$hariA;
					}
				}
			}
		
			return $tahunS." thn / ".$bulanS." bln / ".$hariS." hr";
		}
        
        //Fungsi untuk menghitung selisih format tanggal 21/09/2014
		function dateDiffIndo($tanggalA,$tanggalB){	
			$tahunA=substr($tanggalA,0,2);
			$bulanA=substr($tanggalA,3,2);
			$hariA=substr($tanggalA,6,4);
			
			$tahunB=substr($tanggalB,0,2);
			$bulanB=substr($tanggalB,3,2);
			$hariB=substr($tanggalB,6,4);
			
			if($bulanB==01){ 
				$dayOfMonth=cal_days_in_month(CAL_GREGORIAN,12,$tahunB); //jumlah hari dalam bulan tertentu
			}
			else{
				$dayOfMonth=cal_days_in_month(CAL_GREGORIAN,$bulanB-1,$tahunB);
			}
			//echo $day; exit;
			if($tahunA<=$tahunB && $bulanA<=$bulanB && $hariA<=$hariB){
					$tahunS=$tahunB-$tahunA;
					$bulanS=$bulanB-$bulanA;
					$hariS=$hariB-$hariA;
			}
			else{
				if($bulanB<=$bulanA){		//jika bulan B lebih kecil dari bulan A
					if($hariB<$hariA){
						$tahunS=$tahunB-($tahunA+1);
						$bulanS=($bulanB+11)-$bulanA;
						$hariS=$hariB+($dayOfMonth-$hariA);		
					}
					else{
						$tahunS=$tahunB-($tahunA+1);
						$bulanS=($bulanB+12)-$bulanA;
						$hariS=$hariB-$hariA;
					}
				}
				else{
					if($hariB<=$hariA){
						$tahunS=$tahunB-$tahunA;
						$bulanS=($bulanB-1)-$bulanA;
						$hariS=$hariB+($dayOfMonth-$hariA);
					}
					else{
						$tahunS=$tahunB-$tahunA;
						$bulanS=$bulanB-$bulanA;
						$hariS=$hariB-$hariA;
					}
				}
			}
		
			return $tahunS." thn / ".$bulanS." bln / ".$hariS." hr";
		}
    //====================================================================================================================================
?>