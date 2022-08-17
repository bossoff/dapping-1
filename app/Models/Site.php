<?php

namespace App\Models;

use CodeIgniter\Model;

class Site extends Model
{
	public $db;
	public function __construct(){$this->db = db_connect();helper("email");}	
	protected $DBGroup              = 'default';
	protected $table                = 'sites';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function smtps($type){		
	    $query = $this->db->table('smtp_init')->where('type',$type)->get();
	    if($query->getNumRows()>0){
	        return $query->getRow();
	    }
	    
	    return FALSE;
 	}


	public function pusher($msg=NULL, $sub=NULL, $to=NULL, $from=NULL, $name = null) {
		//Load email library
		if($from == NULL)$from = $this->db->table('settings')->where('type','system_email1')->get()->getRow()->description;
		$company = $this->db->table('settings')->where('type','system_email1')->get()->getRow()->description;
		//SMTP & mail configuration
		$get = $this->smtps('general');
		$config['protocol'] 	= 	$get->protocol;
		$config['SMTPHost'] 	= 	$get->host;
		$config['SMTPPort'] 	= 	$get->port;
		$config['SMTPUser'] 	= 	$get->username;
		$config['SMTPPass'] 	= 	$get->password;
		$config['mailPath'] = '/usr/sbin/sendmail';
		$config['charset']  = 'iso-8859-1';
		$config['wordWrap'] = true;
		$config['mailtype'] = 'html';
		$config['newline'] 		= 	"\r\n";
		$email = \Config\Services::email();
		$email->setMailType("html");
		$email->SetNewline("\r\n");
		$email->initialize($config);
		$htmlContent = $msg; 
		$email->setTo($to);
		$email->setFrom($company, $from);
		$email->setSubject($sub);
		$email->setMessage($htmlContent);		
		//Send email		
		$email->send(false); //Please do not remove the false
	}
}
