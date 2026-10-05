<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departemen::create(['nama' => 'Keuangan']);
        Departemen::create(['nama' => 'IT']);
        Departemen::create(['nama' => 'HRD']);

    }
}
