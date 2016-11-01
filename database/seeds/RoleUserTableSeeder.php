<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'role_id' => 1,
                'user_id' => 1
            ]
        ];
        foreach ($items as $item) {
            $user = User::find($item['user_id']);
            $user->attachRole($item['role_id']);
        }
    }
}
