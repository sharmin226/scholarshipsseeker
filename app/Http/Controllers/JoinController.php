<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function showSignupForm(){
    	return view ('join');
    }
	public function storeIntoDB(Request $sharmin){

    	//$email = $sharmin->email; OR
    	$email = $sharmin->input('email');
    	$password = $sharmin->input('password');
    	
    	// store into db via model
    	$add = new User;
    	$add->email = $email;
    	$add->password = $password;
    	$add->save();
    	//return "Registration completed successfully";    	
    	return view('registration-success');

    	//echo "<a href="welcome">"."HOME"."</a>";

    	//return view ('welcome');
    	//return redirect('welcome');
    	/*public function store(){

    	$join = new join();
    	$join->username = request()->input('username');
    	$join->password = equest('password');
    	$join->save();
    	return redirect('/join');*/
    	
    } //end of function storeIntoDB

//post scholarship

    public function postScholarship(){
    	return view ('show-form');
    }

    public function storePostDB(Request $sharmin){
        

        //$email = $sharmin->email; OR
        /*$title = $sharmin->title;
        $deadline = $sharmin->deadline;
        $country = $sharmin->country;
        $website = $sharmin->website;
        $nationality = $sharmin->nationality;
        $is_publish = $sharmin->is_publish;*/

        /*\App\Todolist::create(array(
            'title' => $title,
            'deadline' => $deadline,
            'country' => $country,
            'website' => $website,
            'nationality' => $nationality
        ));

        return "You posted successfully";*/

        
        // store into db via model
        $add = new \App\Post;
        $add->title = $title;
        $add->deadline = $deadline;
        $add->country = $country;
        $add->website = $website;
        $add->nationality = $nationality;
        $add->save();
        return "Post submitted successfully";     
        //return view('registration-success');*/*/

                
    } //end of function storePostDB



}
