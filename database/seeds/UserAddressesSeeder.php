<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserAddress;

class UserAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = factory(UserAddress::class)->times(3)->make()->each(function($address, $index){
            $address->user_id = 1;
        })->toArray();
        
        UserAddress::insert($addresses);
    }
}
