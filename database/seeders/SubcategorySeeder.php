<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'id'   => '1',
                'name' => 'Documentos X',
            ],
            [
                'id'   => '2',
                'name' => 'Documentos Y',
            ],
            [
                'id'   => '3',
                'name' => 'Documentos Z',
            ],
            [
                'id'   => '4',
                'name' => 'Documentos W',
            ],
            [
                'id'   => '5',
                'name' => 'Documentos K',
            ]
        ]);
    }
}
