<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin=new Admin();
        $admin->nom="Anthelme";
        $admin->email="anthelme@gmail.com";
        $admin->password="anth@&$7Aazer";
        $admin->save();

    }
}
