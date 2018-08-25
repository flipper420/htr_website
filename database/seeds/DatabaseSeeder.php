<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(ThemesTableSeeder::class);
    	$this->call(categorytableseeder::class);
    	$this->call(createranksseeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(pointsseeder::class);
    	$this->call(missionsseeder::class);
        
        Model::reguard();
    }
}
