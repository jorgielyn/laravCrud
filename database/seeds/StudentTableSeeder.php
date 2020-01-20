<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            array(
                array('date' => '2020-01-14','amount' => 'five hundred', 'amountNum' => '500.00','reason' => 'limtanon' , 'month' => 'January' ,  'nameOfPayee' => 'Muang Ka'),
            )
        );
    }
}
