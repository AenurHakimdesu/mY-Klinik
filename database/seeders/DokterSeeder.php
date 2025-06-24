<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            [
                'nama' => 'Dr. Umam',
                'alamat' => 'Jl. Pretty Derby No. 23',
                'no_hp' => '081234567890',
                'email' => 'umamusume@gmail.com',
                'id_poli' => 1, // Asumsi Poli Umum memiliki ID 1
                'password' => Hash::make('umamusume@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Kandungsari',
                'alamat' => 'Jl. Aja dulu No. 69',
                'no_hp' => '081234567891',
                'id_poli' => 2, // Asumsi Poli Anak memiliki ID 2
                'email' => 'kandungsari@gmail.com',
                'password' => Hash::make('kandungsari@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Anakonda',
                'alamat' => 'Jl. Mulu Deh No. 17',
                'no_hp' => '081234567892',
                'id_poli' => 3, // Asumsi Poli Gigi memiliki ID 3
                'email' => 'anakonda@gmail.com',
                'password' => Hash::make('anakonda@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Syarofah',
                'alamat' => 'Jl. Kebenaran No. 35',
                'no_hp' => '081234567893',
                'id_poli' => 4, // Asumsi Poli Kandungan memiliki ID 4
                'email' => 'syarofah@gmail.com',
                'password' => Hash::make('syarofah@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Jajang',
                'alamat' => 'Jl. Kehidupan No. 102',
                'no_hp' => '081234567894',
                'id_poli' => 5, // Asumsi Poli THT memiliki ID 5
                'email' => 'jajang@gmail.com',
                'password' => Hash::make('jajang@gmail.com'),
                'role' => 'dokter',
            ],
        ];

        foreach ($dokters as $dokter) {
            $existingDokter = User::where('email', $dokter['email'])->first();

            if (!$existingDokter) {
                User::create($dokter);
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' sudah ada.');
            }
        }
    }
}
