<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbCourse extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'course_nama' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'course_kuota' =>[
                'type' => 'INT',
                'constraint' => '11',
            ],
            'course_mentor' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'course_desk' =>[
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'course_harga' =>[
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

        ]);
        $this->forge->addKey('course_id', true);
        $this->forge->createTable('tb_course');
    }

    public function down()
    {
        $this->forge->dropTable('tb_course');
    }
}
