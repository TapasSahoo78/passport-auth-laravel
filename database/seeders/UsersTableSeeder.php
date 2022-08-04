<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(1)->create()->each(function ($user) {
            // $user->role()->save(User::factory());
           // $user->role()->save(factory(Role::class)->make());
           $user->role()->save(Role::factory()->create());
        });;
        // factory(App\User::class, 3)->create()
        //     ->each(function ($user) {
        //         $user->role()->save(factory(App\Role::class)->make());
        //     });
    }
}
