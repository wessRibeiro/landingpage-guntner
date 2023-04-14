<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => 'Flyer 2021',
                'size' => '180',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2020',
                'size' => '132',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2019',
                'size' => '194',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2018',
                'size' => '98',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2017',
                'size' => '72',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2016',
                'size' => '219',
                'url' => 'x',
            ],
            [
                'name' => 'Flyer 2015',
                'size' => '153',
                'url' => 'x',
            ]
        ]);
    }
}
