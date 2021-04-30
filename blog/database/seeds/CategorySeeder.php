<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = array(
        	'Web',
        	'Backend',
        	'Frontend',
        	'Mobil'
        );

        foreach ($categories as $key => $value) {
        	DB::table('category')->insert([
        		'name' => $value,
        		'is_active' => 1,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        	]);
        }
    }
}
