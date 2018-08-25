<?php

use Illuminate\Database\Seeder;
use App\Models\Mission;
use App\Models\Category;
use App\Models\Library;
class missionsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$mission = factory(App\Models\Mission::class, 150)->create();
    }
}
