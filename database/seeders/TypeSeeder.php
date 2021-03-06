<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['title' => 'أخبار'],
            ['title' => 'إقتصاد'],
            ['title' => 'رأي'],
            ['title' => 'رياضة'],
            ['title' => 'حوادث ومنوعات'],
            ['title' => 'تويتبوك']
        ];
        
        DB::table('types')->insert($types);
    }
}
