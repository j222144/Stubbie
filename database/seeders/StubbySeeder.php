<?php

namespace Database\Seeders;

use App\Models\Stubby;
use Illuminate\Database\Seeder;

class StubbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stubbies = [
            [
                'user_id'=>1,
                'stubby_name'=>'FirstStubby',
                'is_active'=>true,
                'short_url' =>'https://stubbie.app/arEtsvNX',
                'long_url' =>'https://laravel.com/docs/8.x/eloquent-relationships#many-to-many',
            ],
        ];

        foreach($stubbies as $stubby){
            Stubby::create($stubby);
        }
    }
}
