<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $client=new Client();
        $client->nom='kodjo';
        $client->email='kodjo@gmail.com';
        $client->password='kkdjo1452';
        $client->phone='+22896455809';
        $client->admin_id=1;
        $client->save();

    }
}
