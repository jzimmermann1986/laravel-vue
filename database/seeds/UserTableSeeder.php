<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            User::create(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ));
        }
    }

}
