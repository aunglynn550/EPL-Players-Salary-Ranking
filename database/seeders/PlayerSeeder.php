<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('players')->insert([
            'name' => 'Cristiano Ronaldo',
            'age' => '35',
            'weekly_salary'=>'515385',
            'annual_salary'=>515385 * 12,
            'contract_value'=>'53600000',
            'transfer_fee'=>'16500000',
            'position'=>'Forward',
            'team'=>'MUFC'
        ]);
        \DB::table('players')->insert([
            'name' => 'Marcus Rashford',
            'age' => '24',
            'weekly_salary'=>'215385',
            'annual_salary'=>215385 * 12,
            'contract_value'=>'23600000',
            'transfer_fee'=>'12500000',
            'position'=>'Forward',
            'team'=>'MUFC'
        ]);
        \DB::table('players')->insert([
            'name' => 'Mohamat Salah',
            'age' => '30',
            'weekly_salary'=>'415385',
            'annual_salary'=>415385 * 12,
            'contract_value'=>'43600000',
            'transfer_fee'=>'14500000',
            'position'=>'Forward',
            'team'=>'LFC'
        ]);
        \DB::table('players')->insert([
            'name' => 'Diogo Jota',
            'age' => '30',
            'weekly_salary'=>'315385',
            'annual_salary'=>315385 * 12,
            'contract_value'=>'33600000',
            'transfer_fee'=>'13500000',
            'position'=>'Forward',
            'team'=>'LFC'
        ]);
        \DB::table('players')->insert([
            'name' => 'David DeGea',
            'age' => '34',
            'weekly_salary'=>'375000',
            'annual_salary'=>   375000 * 12,
            'contract_value'=>'42600000',
            'transfer_fee'=>'12500000',
            'position'=>'Goal',
            'team'=>'MUFC'
        ]);
        \DB::table('players')->insert([
            'name' => 'Kevin De Bruyne',
            'age' => '32',
            'weekly_salary'=>'215385',
            'annual_salary'=>215385 * 12,
            'contract_value'=>'13600000',
            'transfer_fee'=>'11500000',
            'position'=>'Midfield',
            'team'=>'MCFC'
        ]);
    }
}
