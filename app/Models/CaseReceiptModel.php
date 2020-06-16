<?php namespace App\Models;

use CodeIgniter\Model; 

class CaseReceiptModel extends Model
{
	protected $table = 'case_receipt';
	protected $allowedFields = ['customer_id','action_type','debt','credit','created_at','updated_at'];
}
