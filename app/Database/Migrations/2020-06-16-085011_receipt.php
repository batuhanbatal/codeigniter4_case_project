<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Receipt extends Migration
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
			'customer_id'        => 
			[
				'type'           => 'INT',
				'unsigned'       => TRUE,
			],
			'action_type'        => 
			[
				'type'           => 'VARCHAR',
				'constraint'     => '40',
			],
			'debt'    => 
			[
				'type'           => 'FLOAT(10,2)',
			],
			'credit' => 
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

		$this->forge->addForeignKey('customer_id','users','id');
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('receipt');
	}

	public function down()
	{
		$this->forge->dropTable('receipt');
	}
}
