<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKelas extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'kelas_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kelas_name' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas_kategori' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
       ]) ;
       $this->forge->addKey('kelas_id', true);
       $this->forge->createTable('tb_kelas');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kelas');
    }
}
