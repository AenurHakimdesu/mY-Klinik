<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasiens = [
            [
                'nama' => 'Wahid Arafuru',
                'alamat' => 'Jl. Sembuh No. 21',
                'no_ktp' => '1234567890123456',
                'no_hp' => '081234567890',
                'no_rm' => '2025-06-001',
                'email' => 'wahidarafuru@gmail.com',
                'password' => Hash::make('wahidarafuru@gmail.com'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'Isnaeni Wakayama',
                'alamat' => 'Jl. Kesehatan No. 42',
                'no_ktp' => '1234567890123457',
                'no_hp' => '081234567891',
                'no_rm' => '2025-06-002',
                'email' => 'isnaenigotoh@gmail.com',
                'password' => Hash::make('isnaenigotoh@gmail.com'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'Salsa Itou',
                'alamat' => 'Jl. Kebenaran No. 15',
                'no_ktp' => '1234567890123458',
                'no_hp' => '081234567892',
                'no_rm' => '2025-06-003',
                'email' => 'salsaitou@gmail.com',
                'password' => Hash::make('salsaitou@gmail.com'),
                'role' => 'pasien',
            ],
        ];

        foreach ($pasiens as $pasien) {
            $existingPasien = User::where('email', $pasien['email'])->first();

            if (!$existingPasien) {
                User::create($pasien);
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' sudah ada.');
            }
        }
    }
}
