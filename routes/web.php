<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/


// Authentication Routes
Auth::routes();


// Public Routes
Route::group(['middleware' => ['web', 'activity']], function () {

	// Activation Routes
	Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

	Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
	Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
	Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

//    // Socialite Register Routes
//    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
//    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

	// Route to for user to reactivate their user deleted account.
	Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity']], function () {

	// Activation Routes
	Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
	Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep']], function () {

	//  Homepage Route - Redirect based on user role is in controller.
	Route::get('/home', ['as' => 'public.home', 'uses' => 'UserController@index']);

	// Show users profile - viewable by other users.
	Route::get('profile/{username}', [
		'as'   => '{username}',
		'uses' => 'ProfilesController@show',
	]);


});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep']], function () {

	// User Profile and Account Routes
	Route::resource(
		'profile',
		'ProfilesController', [
			'only' => [
				'show',
				'edit',
				'update',
				'create',
			],
		]
	);
	Route::put('profile/{username}/updateUserAccount', [
		'as'   => '{username}',
		'uses' => 'ProfilesController@updateUserAccount',
	]);
	Route::put('profile/{username}/updateUserPassword', [
		'as'   => '{username}',
		'uses' => 'ProfilesController@updateUserPassword',
	]);
	Route::delete('profile/{username}/deleteUserAccount', [
		'as'   => '{username}',
		'uses' => 'ProfilesController@deleteUserAccount',
	]);

	// Route to show user avatar
	Route::get('images/profile/{id}/avatar/{image}', [
		'uses' => 'ProfilesController@userProfileAvatar',
	]);

	// Route to upload user avatar.
	Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep']], function () {
	Route::resource('/users/deleted', 'SoftDeletesController', [
		'only' => [
			'index',
			'show',
			'update',
			'destroy',
		],
	]);

	Route::resource('users', 'UsersManagementController', [
		'names'  => [
			'index'   => 'users',
			'destroy' => 'user.destroy',
		],
		'except' => [
			'deleted',
		],
	]);
	Route::post('search-users', 'UsersManagementController@search')->name('search-users');

	Route::resource('themes', 'ThemesManagementController', [
		'names' => [
			'index'   => 'themes',
			'destroy' => 'themes.destroy',
		],
	]);

	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
	Route::get('routes', 'AdminDetailsController@listRoutes');
	Route::get('active-users', 'AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);


/*************** HACKTHERAT MAIN ROUTES *************/

// Homepage Route
Route::get('/', 'WelcomeController@welcome')->name('welcome');

// Public Routes
Route::group(['middleware' => ['web', 'activity']], function () {

	// Main Site Routes (public routes)
	Route::get('/contact-us', ['as' => 'contactus', 'uses' => 'MCategoryController@index']);
	Route::get('/about', ['as' => 'about', 'uses' => 'MCategoryController@index']);
	Route::get('/faq', ['as' => 'faq', 'uses' => 'MCategoryController@index']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep']], function () {

	// TODO: Main site Routes (logged in)
	Route::get('/leaderboards', ['as' => 'leaderboards', 'uses' => 'MCategoryController@index']);
	Route::get('/hall-of-fame', ['as' => 'hall.of.fame', 'uses' => 'MCategoryController@index']);
	Route::get('/hall-of-shame', ['as' => 'hall.of.shame', 'uses' => 'MCategoryController@index']);

	// Mission Routes
	Route::get('/missions', ['as' => 'missions', 'uses' => 'MCategoryController@index']);
	Route::get('/missions/{slug}', ['as' => '{slug}', 'uses' => 'MCategoryController@show']);
	Route::get('/missions/submit/password', ['as'   => 'mission.password',
	                                         'uses' => 'MissionController@showpasswordform']);
	Route::post('/missions/submit/password', ['as'   => 'mission.password',
	                                          'uses' => 'MissionController@submitpassword']);

	// TODO: Library Routes
	Route::get('/library', ['as' => 'library', 'uses' => 'LCategoryController@index']);
	Route::get('/library/{slug}', ['as' => '{slug}', 'uses' => 'LCategoryController@show']);
	Route::post('/library/store/', ['as' => 'library.store', 'uses' => 'LCategoryController@store']);
	Route::get('upload', 'UploadController@index');
	Route::post('upload/uploadFiles', 'UploadController@multiple_upload');

});