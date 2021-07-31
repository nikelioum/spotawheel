<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Clients array for mass import
        Client::truncate();

        $clients =  [
            [
              'name' => 'Taylor',
              'surname' => 'Otwell',
              'created_at' => '2020-01-01 00:00:01',
              'updated_at' => '2020-01-01 00:00:01'
            ],
            [
              'name' => 'Mohamed ',
              'surname' => 'Said',
              'created_at' => '2020-01-01 00:00:01',
              'updated_at' => '2020-01-01 00:00:01'
            ],
            [
              'name' => 'Jeffrey',
              'surname' => 'Way',
              'created_at' => '2020-01-01 00:00:01',
              'updated_at' => '2020-01-01 00:00:01'
            ],
            [
              'name' => 'Phill',
              'surname' => 'Sparks',
              'created_at' => '2020-01-01 00:00:01',
              'updated_at' => '2020-01-01 00:00:01'
            ],
          ];

          Client::insert($clients);

    }
}
