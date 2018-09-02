<?php

use App\Models\LCategory;
use App\Models\MCategory;
use Illuminate\Database\Seeder;

class categorytableseeder extends Seeder

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
{
	public function run()
	{

		// ----------------- MISSION CATEGORIES ----------------- //

		MCategory::create(['id'          => '1',
		                   'name'        => 'Noob',
		                   'description' => 'Challenges designed to teach you "The Basics".',
		                   'slug'        => 'noob']);

		MCategory::create(['id'          => '2',
		                   'name'        => 'Basic',
		                   'description' => 'Challenges designed to teach you basic javascript, cookies, http headers, etc...',
		                   'slug'        => 'basic']);

		MCategory::create(['id'          => '3',
		                   'name'        => 'Realistic',
		                   'description' => 'Challenges designed to mimic "real-world" vulnerabilities. Each challenge is a "full" website with multiple links,
			 directories,
			 and servers.',
		                   'slug'        => 'realistic']);

		MCategory::create(['id'          => '4',
		                   'name'        => 'Application',
		                   'description' => 'Challenges designed to teach you reverse engineering and program manipulation. Android & Iphone apps',
		                   'slug'        => 'application']);

		MCategory::create(['id'          => '5',
		                   'name'        => 'Programming',
		                   'description' => 'Challenges designed to teach you "The Art of Programming".',
		                   'slug'        => 'programming']);

		MCategory::create(['id'          => '6',
		                   'name'        => 'Javascript',
		                   'description' => 'Challenges designed to teach you advanced javascript and how to read,
			 write,
			 and manipulate it.',
		                   'slug'        => 'javascript']);

		MCategory::create(['id'          => '7',
		                   'name'        => 'Crypto',
		                   'description' => 'Challenges designed to teach you "The Art of Cryptography"',
		                   'slug'        => 'crypto']);

		MCategory::create(['id'          => '8',
		                   'name'        => 'Cracking',
		                   'description' => 'More reverse engineering and program manipulation. Windows/Linux/MacOSX.',
		                   'slug'        => 'cracking']);

		MCategory::create(['id'          => '9',
		                   'name'        => 'Patching',
		                   'description' => 'Challenges designed to teach you how to spot vulnerable code and how to patch it.
			C/C++/PHP/Java/etc...',
		                   'slug'        => 'patching']);


		// ----------------- LIBRARY CATEGORIES ----------------- //

		LCategory::create(['id'          => '1',
		                   'name'        => 'Articles',
		                   'description' => 'Nice collection of computer security, hacking, programming, etc...',
		                   'slug'        => 'articles',]);

		LCategory::create(['id'          => '2',
		                   'name'        => 'Tutorials',
		                   'description' => 'Tutorials ranging from teaching sql injection to virtual machine setup all the way to firmware modding and many many more in PDF file format.',
		                   'slug'        => 'tutorials',]);

		LCategory::create(['id'          => '3',
		                   'name'        => 'Papers',
		                   'description' => 'Great collection of Whitepapers. PDF File Format',
		                   'slug'        => 'papers',]);

		LCategory::create(['id'          => '4',
		                   'name'        => 'Tools',
		                   'description' => 'Bundles of tools, software, build-tool, compilers, debuggers, scripts, and plugins in either RAR or ZIP file format. ',
		                   'slug'        => 'tools',]);

		LCategory::create(['id'          => '5',
		                   'name'        => 'Code',
		                   'description' => 'User-submitted code, scripts, projects, etc... in RAR or ZIP file format.',
		                   'slug'        => 'code',]);

		LCategory::create(['id'          => '6',
		                   'name'        => 'Snippets',
		                   'description' => 'An assortment of usefult snippetts for HTML, CSS, PHP, SQL, etc...',
		                   'slug'        => 'snippetts',]);

		LCategory::create(['id'          => '7',
		                   'name'        => 'Ebooks',
		                   'description' => 'Very, very BIG selection of E-Books.',
		                   'slug'        => 'e-books',]);

		LCategory::create(['id'          => '8',
		                   'name'        => 'Wordlists',
		                   'description' => 'Wordlists ranging in sizes from ITTY BITY to INSANELY MASSIVE.',
		                   'slug'        => 'cracking',]);

		LCategory::create(['id'          => '9',
		                   'name'        => 'Patching',
		                   'description' => 'Challenges designed to teach you how to spot vulnerable code and how to patch it.
	C/C++/PHP/Java/etc...',
		                   'slug'        => 'patching',]);
	}
}