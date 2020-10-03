<?php namespace App\Models;

use CodeIgniter\Model;

class memberModel extends Model
{
	protected $table = 'member';
	protected $primaryKey = 'id';

	protected $returnType = 'array';

	public function test(){
		
		return $query = $this->db->listTables();

	}
}

?>