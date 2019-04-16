<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        while ($i < 10) {
            DB::table('articles')->insert([
                'title' => 'Заголовок для статьи ' . $i,
                'text' => str_random(100),
            ]);
            $i++;
        }
    }
}
