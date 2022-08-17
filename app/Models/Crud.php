<?php
namespace App\Models;
use CodeIgniter\Model;
	
class Crud extends Model{

 	public function getCoinList(){
 		$query = $this->db->table('coin_banner');
	    $res = $query->get();
	    if($res->getNumRows()>0){
	        return $res;
	    }

	    return FALSE;
 	}

 	public function collecDataCoin($slug)
 	{
 		$query = $this->db->table('coin_banner');
 		$query->where('slug_id',$slug);
	    $res = $query->get();
	    if($res->getNumRows()>0){
	        return $res->getRow();
	    }

	    return FALSE;
 	}

 	public function saveDatas($data)
 	{
 		$query = $this->db->table('collection_data')->insert($data);
 		if($this->db->affectedRows())
 			return TRUE;
 		else
 			return FALSE;
 	}
	
}