<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Category;
use App\Models\User;
use App\Models\jadwal;
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
         
        User::create([
            'name' => 'Admin KISB',
            'username'=> 'admin.admin',
            'email' => 'komisiinformasi.sumbar@gmail.com',
            'password' => bcrypt('Diskominfo@2018')
        ]);       
        Category::create([
            'name' => 'Sengketa Informasi',
            'slug' => 'sengketa-informasi']);
        Category::create([
            'name' => 'Artikel',
            'slug' => 'artikel']);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita']);
        Category::create([
            'name' => 'Monev',
            'slug' => 'monev']);
            
    }
    
}