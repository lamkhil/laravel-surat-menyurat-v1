<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Oktariansyah, S.T.',
            'email' => 'lurah@admin.com',
            'nip'=>'19851009 201101 1 007',
            'posisi'=>'Lurah Nambangan Lor',
            'pangkat'=>'Penata Tk.I',
            'password' => Hash::make('lurah'),
            'role' => Role::ADMIN->status(),
        ]);
        User::factory()->create([
            'name' => 'Hadi Suseno, S.Sos.',
            'email' => 'sekel@admin.com',
            'nip'=>'19660907 199003 1 017',
            'posisi'=>'Sekretaris Kel. Nambangan Lor',
            'pangkat'=>'Penata Tk.I',
            'password' => Hash::make('sekel'),
            'role' => Role::ADMIN->status(),
        ]);
        User::factory()->create([
            'name' => 'Bambang Murtiono',
            'email' => 'bambang@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Sri Kencanawati',
            'email' => 'sri@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Hartati',
            'email' => 'hartati@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Ninik Sulistyaningsih',
            'email' => 'ninik@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Adi Nugroho',
            'email' => 'adi@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Heriyanto',
            'email' => 'heriyanto@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Satya Magala',
            'email' => 'satya@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Winara',
            'email' => 'winara@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Silvi',
            'email' => 'silvi@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Imam Gusyanto',
            'email' => 'imam@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Herman',
            'email' => 'herman@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Sidarni',
            'email' => 'sidarni@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Viky',
            'email' => 'viky@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        User::factory()->create([
            'name' => 'Surip',
            'email' => 'surip@staff.com',
            'posisi'=>'Staff',
            'password' => Hash::make('staff'),
            'role' => Role::STAFF->status(),
        ]);
        
    }
}
