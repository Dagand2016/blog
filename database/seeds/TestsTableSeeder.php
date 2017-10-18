<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert(
            array([
                'name' => 'murad',
                'surname'  => 'magomedov',
                'email'  => 'dagand2016@mail.ru',
                'years' =>  '24'
                ],
                [
                'name' => 'ahmed',
                'surname'  => 'magomedov',
                'email'  => 'dagand2015@mail.ru',
                'years' =>  '27'
                ],
                [
                'name' => 'maksim',
                'surname'  => 'ivanov',
                'email'  => 'dagand2017@mail.ru',
                'years' =>  '30'
                ],
                [
                'name' => 'maksim',
                'surname'  => 'agutin',
                'email'  => 'dagand2018@mail.ru',
                'years' =>  '35'
                ],
                [
                'name' => 'andrey',
                'surname'  => 'ivanov',
                'email'  => 'dagand232@mail.ru',
                'years' =>  '30'
                ],
                [
                'name' => 'vasiliy',
                'surname'  => 'galkin',
                'email'  => 'sdsdsdsa@mail.ru',
                'years' =>  '37'
                ]
                )
            );
    }
}
