<?php
// Route::get('/join','JoinController@create');
// Route::post('/join','JoinController@store');
// show a sign up form
//Route::get('show-signup-form','JoinController@showSignupForm');
// take sign up form data and store into db
//Route::post('store-join-into-db','JoinController@storeIntoDB');
//Route::get('welcome','JoinController');
// or 
//Route::view('\','welcome');

//Post a scholarship
/*Route::get('post-scholarship','JoinController@postScholarship');
Route::post('store-post-into-db','JoinController@storePostDB');*/

/*Home page*/
Route::get('home-page','PostController@homePage')->name('home');
/*Search by category*/
Route::get('search-by-country','PostController@searchbyCountry');
Route::get('search-by-country/{country}','PostController@getScholarshipsByCountry');
Route::get('search-by-course/{course}','PostController@getScholarshipsByCourse');
Route::get('search-by-course','PostController@searchbyCourse');
Route::get('search-by-subject','PostController@searchbySubject');
/* Anyone can see single scholarship by country*/
//Route::get('single-post-by-country/{slug}','PostController@showSinglePost');

/*User profile*/
//Route::get('show-user-profile/{id}','PostController@userProfile');
Route::get('show-my-post','PostController@showMyPost');
//Route::get('show-my-single-post/{slug}','PostController@showMySinglePost');
Route::get('/delete-post/{id}','PostController@deletePost');
Route::get('/show-edit-form/{id}','PostController@editPost');
Route::post('/update-post-into-db/{id}','PostController@updatePost');

	
Route::post('show-user-profile', function(){

	if ( Auth::attempt(request()->only('email','password')) ) {
			return view('user-profile');
	}

	return view('welcome');
});

Route::get('logout', 'PostController@logout')->name('logout');

//Route::post('show-user-profile','PostController@checkLogin');
Route::get('show-single-post/{slug}', 'PostController@showASinglePost');

/*7. Logged in user can add new scholarship*/
Route::get('post-scholarship','PostController@postScholarship');
Route::post('store-post-into-db','PostController@storePostDB');
/*1. Anyone can see list of scholarships*/
Route::get('show-post-list','PostController@showAllPost');
/*2. Anyone can see single scholarship*/

//Route::get('show-single-post/{slug}','PostController@showSinglePost');
Route::get('show-country-list/{id}','PostController@showCountryList');
Route::get('show-country-post-list','PostController@countryPostList');

/*3. Visitor can sign up*/
Route::get('registration-form','PostController@registrationForm');
Route::post('store-join-into-db','PostController@storeIntoDB');
/*4. User can login*/
Route::get('login-form','PostController@loginForm');
//Route::post('check-login-db','PostController@checkLogin');
//Route::post('check-login-db','PostController@checkLogin');
//Route::post('show-user-profile','PostController@userProfile');
/*Route::get('show-single-post/{slug}', function getUrl(){
	return action('PostController@show', [$this->id, $this->slug()]);
}*/

Route::get('admin', 'AdminController@index');



