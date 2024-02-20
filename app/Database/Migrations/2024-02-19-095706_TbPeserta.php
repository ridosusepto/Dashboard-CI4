<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPeserta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'peserta_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'peserta_nip' =>[
                'type' => 'INT',
                'constraint' => '11',
            ],
            'peserta_nama' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_email' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_ttl' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_telp' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_agama' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_gender' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_alamat' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_kota' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_kodepos' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_portofolio' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'peserta_payment' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_nama' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'course_nama' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelaskategori' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('peserta_id', true);
        $this->forge->createTable('tb_peserta');
    }

    public function down()
    {
        $this->forge->dropTable('tb_peserta');
    }
}
