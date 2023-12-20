<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn' => "909090",
            'nama' => 'Zulkifli',
            'alamat' => 'Padang',
            'no_hp' => '083183410994',            
        ]);
    }
}
