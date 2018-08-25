<?php

use Illuminate\Database\Seeder;
use App\Models\MCategory;
class categorytableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


  MCategory::create(['id' => '1',
	'name' => 'Noob',
	'description' => 'Challenges designed to teach you "The Basics".',
	'slug' => 'noob']);

  MCategory::create(['id' => '2',
	'name' => 'Basic',
	'description' => 'Challenges designed to teach you basic javascript,
	 cookies,
	 http headers,
	 etc...',
	'slug' => 'basic']);

  MCategory::create(['id' => '3',
	'name' => 'Realistic',
	'description' => 'Challenges designed to mimic "real-world" vulnerabilities. Each challenge is a "full" website with multiple links,
	 directories,
	 and servers.',
	'slug' => 'realistic']);

  MCategory::create(['id' => '4',
	'name' => 'Application',
	'description' => 'Challenges designed to teach you reverse engineering and program manipulation. Android & Iphone apps',
	'slug' => 'application']);

  MCategory::create(['id' => '5',
	'name' => 'Programming',
	'description' => 'Challenges designed to teach you "The Art of Programming".',
	'slug' => 'programming']);

  MCategory::create(['id' => '6',
	'name' => 'Javascript',
	'description' => 'Challenges designed to teach you advanced javascript and how to read,
	 write,
	 and manipulate it.',
	'slug' => 'javascript']);

  MCategory::create(['id' => '7',
	'name' => 'Crypto',
	'description' => 'Challenges designed to teach you "The Art of Cryptography"',
	'slug' => 'crypto']);

  MCategory::create(['id' => '8',
	'name' => 'Cracking',
	'description' => 'More reverse engineering and program manipulation. Windows/Linux/MacOSX.',
	'slug' => 'cracking']);

  MCategory::create(['id' => '9',
	'name' => 'Patching',
	'description' => 'Challenges designed to teach you how to spot vulnerable code and how to patch it.
	C/C++/PHP/Java/etc...',
	'slug' => 'patching']);

 //  Category::create(['id' => '10',
	// 'name' => 'Articles',
	// 'description' => 'Huge collection of articles related to hacking,
	//  cracking,
	//  etc...',
	// 'slug' => 'articles',
	// 'type' => 'library']);

 //  Category::create(['id' => '11',
	// 'name' => 'Tutorials',
	// 'description' => 'Huge collection of tutorials on many different topics related to programming,
	//  hacking,
	//  cracking,
	//  and many many more...',
	// 'slug' => 'tutorials',
	// 'type' => 'library']);

 //  Category::create(['id' => '12',
	// 'name' => 'Tools',
	// 'description' => 'Massive collection of old & new hacking,
	//  cracking,
	//  wifi hacking,
	//  password cracking,
	//  and a bunch of random tools free for you to download!',
	// 'slug' => 'tools',
	// 'type' => 'library']);

 //  Category::create(['id' => '13',
	// 'name' => 'Ebooks',
	// 'description' => 'A bunch of random ebooks. Programming,
	//  hacking,
	//  cracking,
	//  etc...',
	// 'slug' => 'ebooks',
	// 'type' => 'library']);  

}
}