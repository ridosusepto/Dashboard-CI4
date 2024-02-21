<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKategori extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'kategori_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kelas_kategori' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas_ket' =>[
                'type' => 'VARCHAR',
                'constraint' => '255',
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
       $this->forge->addKey('kategori_id', true);
       $this->forge->createTable('tb_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kategori');
    }
}
