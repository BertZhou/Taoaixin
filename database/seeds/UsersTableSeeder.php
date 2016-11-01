<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
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
                'name'           => 'Vincent',
                'email'          => 'test@test.com',
                'password'       => '$2y$10$JM8vj4NcVj2ZwhxBSHfp6O5JKcBOSC.VPhZD.zsbUJm1qry1BZ97G',
                'remember_token' => 'LkKzdCOWVDMJCmits8vXMcIhdpOEQezEL3bAfvN8UVCsoDqe4WxeZ8ndJy3I',
            ]
        ];
        foreach ($items as $item) {
            User::create($item);
        }
    }
}
