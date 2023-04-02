<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\NewsCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12332100')
        ]);
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12332100')
        ]);
        NewsCategory::create([
            'name' => 'حصري'
        ]);
        NewsCategory::create([
            'name' => 'منوعات'
        ]);
        NewsCategory::create([
            'name' => 'اقتصاد'
        ]);
        NewsCategory::create([
            'name' => 'اسهم'
        ]);
        NewsCategory::create([
            'name' => 'رياضة'
        ]);
        NewsCategory::create([
            'name' => 'حوادث وجرائم'
        ]);
    }
}
