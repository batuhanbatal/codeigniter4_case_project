<?php namespace App\Models;

use CodeIgniter\Model; 

class UserModel extends Model
{
	protected $table = 'users';
	protected $allowedFields = ['name','password','updated_at'];
}
