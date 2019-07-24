<?php

use Illuminate\Database\Seeder;

class InitProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Áo vàng',
            'price' => '350000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name' => 'Áo đỏ '.$i,
                'price' => '350000' + $i*10000, // 360000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
