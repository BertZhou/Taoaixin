<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;

class RolesTableSeeder extends Seeder
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
                'name'          =>  '管理',
                'slug'          =>  'admin',
                'description'   =>  null,
                'level'         =>  3
            ],
            [
                'name'          =>  '商家',
                'slug'          =>  'business',
                'description'   =>  null,
                'level'         =>  2
            ],
            [
                'name'          =>  '用户',
                'slug'          =>  'user',
                'description'   =>  null,
                'level'         =>  1
            ]
        ];
        foreach ($items as $item) {
            Role::create($item);
        }
    }
}
