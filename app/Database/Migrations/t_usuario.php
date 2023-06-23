<?php namespace App\Database\Migrations;

use CodeIgneiter\Database\Migrations;

class TUsuarios extends  Migrations 
{
    public function up()
    {
        $this->forge->addField([
            'id_usuaio' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuario');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuario');
    }
}