<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$users = [
			[
				'name'        => 'Batuhan',
				'email'       => 'batuhanbatal@gmail.com',
				'password'    => password_hash(1234567, PASSWORD_DEFAULT),
				'money_limit' => '20000.00',
				'created_at'  => date("Y-m-d H:i:s"),
				'updated_at'  => date("Y-m-d H:i:s"),
            ],
            [
				'name'        => 'Ahmet',
				'email'       => 'ahmet@gmail.com',
				'password'    => password_hash(1234567, PASSWORD_DEFAULT),
				'money_limit' => '10000.00',
				'created_at'  => date("Y-m-d H:i:s"),
				'updated_at'  => date("Y-m-d H:i:s"),
            ],
            [
				'name'        => 'Mehmet',
				'email'       => 'mehmet@gmail.com',
				'password'    => password_hash(1234567, PASSWORD_DEFAULT),
				'money_limit' => '5000.00',
				'created_at'  => date("Y-m-d H:i:s"),
				'updated_at'  => date("Y-m-d H:i:s"),
			],
		];

		$builder = $this->db->table('users');

		foreach ($users as $user)
		{
			$builder->insert($user);
		}
	}
}
