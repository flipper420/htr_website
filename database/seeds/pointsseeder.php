<?php

use Illuminate\Database\Seeder;
use App\Models\Point;
class pointsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Point::create(['id' => 1,
        	'user_id' => 1,
        	'points' => 100,
        	'reason' => 'testing',
        	'dir' => 'add',
    	]);
    	
    	Point::create(['id' => 2,
        	'user_id' => 1,
        	'points' => 1000,
        	'reason' => 'testing',
        	'dir' => 'add',
    	]);

    	Point::create(['id' => 3,
        	'user_id' => 1,
        	'points' => 100,
        	'reason' => 'testing',
        	'dir' => 'sub',
    	]);

        $points = factory(App\Models\Point::class, 150)->create();

    }
}
