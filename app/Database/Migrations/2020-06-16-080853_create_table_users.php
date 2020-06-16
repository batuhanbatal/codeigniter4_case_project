<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsers extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => 
			[
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'name'        => 
			[
				'type'           => 'VARCHAR',
				'constraint'     => '40',
			],
			'email'       => 
			[
				'type'           => 'VARCHAR',
				'constraint'     => '40',
			],
			'password'    => 
			[
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'money_limit' => 
			[
				'type'           => 'FLOAT(10,2)',
			],
			'created_at'  => 
			[
				'type'           => 'DATETIME',
			],
			'updated_at'  => 
			[
				'type'           => 'DATETIME',
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
