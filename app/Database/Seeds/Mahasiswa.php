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
            'desripsi' => 'Anak Rumahan Pecinta Seblak',
            'created_at'    => Time::now(),
        
        ],
            [
                'npm' => '2017051014',
                'nama'    => 'Saddam ',
                'alamat'    => ' lampung',
                'desripsi' => 'Rajin',
                'created_at'    => Time::now(),
            
            ],
            
            [
                
            'npm' => '2017051074',
            'nama'    => 'Dwi Kurniawan',
            'alamat'    => 'bandarlampung',
            'desripsi' => 'Rajin',
            'created_at'    => Time::now(),
        
        ],

            [
            'npm' => '2017051053',
            'nama'    => 'Rendi Luthfi',
            'alamat'    => 'lamteng',
            'desripsi' => 'Rajin',
            'created_at'    => Time::now(),
        ],

        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data)
        $this->db->table('mahasiswa')->insert($data);
    }
}
