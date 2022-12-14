<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        
        $data_mahasiswa = [
            ['npm' => '2017051013',
            'nama'    => 'Nur Setiowati',
            'alamat'    => 'Tanggamus',
            'created_at'    => Time::now(),
        
        ],
            ['npm' => '2017051014',
                'nama'    => 'Saddam ',
                'alamat'    => ' lampung',
                'created_at'    => Time::now(),
            
            ],
            
            ['npm' => '2017051074',
            'nama'    => 'Dwi Kurniawan',
            'alamat'    => 'bandarlampung',
            'created_at'    => Time::now(),
        
        ],

            ['npm' => '2017051053',
            'nama'    => 'Rendi Luthfi',
            'alamat'    => 'lamteng',
            'created_at'    => Time::now(),
        
        ],

        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data)
        $this->db->table('mahasiswa')->insert($data);
    }
}
