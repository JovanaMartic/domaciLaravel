<?php

namespace Database\Seeders;

use App\Models\Automobil;
use App\Models\Iznajmljivanje;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        

        $automobil1 = Automobil::factory()->create();
        $automobil2 = Automobil::factory()->create();


        Iznajmljivanje::factory(2)->create([
            'user_id'=>$user1->id,
            'automobil_id'=>$automobil1->id,
        ]);

        Iznajmljivanje::factory(1)->create([
            'user_id'=>$user2->id,
            'automobil_id'=>$automobil2->id,
        ]);


    
    }
}

