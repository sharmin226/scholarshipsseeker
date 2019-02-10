<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function homePage()
    {
        return view ('welcome');
    }



    public function postScholarship(){
    	return view ('show-form');

    }



    public function storePostDB(Request $addPost){	
	
	//return $addPost->all();  

       	$title = $addPost->title;
    	$deadline = $addPost->deadline;
        $country = $addPost->country;
        $course = $addPost->course;
    	$subject = $addPost->subject;
    	$website = $addPost->website;
    	$nationality = $addPost->nationality; 	

    // validation check for all inputs

    	$validator = Validator::make($addPost->all(), [
            'title' => 'required',
            'deadline' => 'required',
            'country' => 'required',
            'course' => 'required',
            'subject' => 'required',
            'website' => 'required',
            'nationality' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect('post-scholarship')
                        ->withErrors($validator)
                        ->withInput();
        }

        // save the input data in database    	
    	$addnewPost = new \App\Post;

        $addnewPost->title = $title;
        $addnewPost->slug = str_slug($title , '-');
    	$addnewPost->slug = str_slug($title , '-');
        
        //if (Auth::check()?Auth::user()->id:null) {
        $addnewPost->user_id = Auth::user()->id;
         //             } 
    	
        $addnewPost->deadline = $deadline;
        $addnewPost->country = $country;
        $addnewPost->course = $course;
    	$addnewPost->subject = $subject;
    	$addnewPost->website = $website;
    	$addnewPost->nationality = $nationality;
    	$addnewPost->save();

        echo '<h1>'."You inserted post Successfully".'</h1>';
    	
        $post = \App\Post::orderBy('id','DESC')->first(); //return the last record
        return view('single-post', compact('post'));

    }



    public function showAllPost(){

    	$lists = \App\Post::get();	// get()  or all()
    	return view('post-list')->with('mylists', $lists);    	

    }



    public function searchbyCountry(){    
        $lists = \DB::table('posts')->select('country')->groupBy('country')->get();
        return view('country-list', compact('lists')); //passing two parameters
    }



    public function getScholarshipsByCountry($country)
    {
        $name = explode('-', $country);  //put'-' between two string ex.united-kingdom

        if ( is_array($name) ) {  //if the country is array then put '' between two string
            $name = implode(' ', $name);
        }

        $mylists = \App\Post::where('country', $name)->get();
        //return $post;
        return view('country-post-list', compact('mylists'));

    }

    public function getScholarshipsByCourse($course)
    {
        $name = explode('-', $course);  //put'-' between two string ex.united-kingdom

        if ( is_array($name) ) {  //if the country is array then put '' between two string
            $name = implode(' ', $name);
        }

        $mylists = \App\Post::where('course', $name)->get();
        //return $post;
        return view('course-post-list', compact('mylists'));

    }





     public function showCountryList($id){
            $post = \App\Post::where('id', $id)->first();

            return view('show-country-list', compact('post'));
            }




    public function countryPostList(){
         return view('country-post-list');
            }




    public function searchbyCourse(){
        /*$lists = \App\Post::get();  // get()  or all()        
        return view('course-list')->with('mylists', $lists);   */
        $lists = \DB::table('posts')->select('course')->groupBy('course')->get();
        return view('course-list', compact('lists')); //passing two parameters
    }



    public function searchbySubject()
    {
        $lists = \App\Post::get();  // get()  or all()

        return view('subject-list')->with('mylists', $lists);  
    }


    

    /*public function showSinglePost($slug){

    	$post = \App\Post::where('slug', $slug)->first();
    	//return $post->delete();
    	return view('single-post', compact('post'));

    }*/
    /*public function userProfile($id)
    {
        $profile = \App\User::where('id',$id)->first();
        return view('user-profile', compact('profile'));

    }*/



    public function registrationForm(){
        return view('join');
    }



    public function storeIntoDB(Request $sharmin){

        //$email = $sharmin->email; OR
        $username = $sharmin->input('username');
        $email = $sharmin->input('email');
        $password = $sharmin->input('password'); //abc
        
        // store into db via model
        $add = new User;
        $add->username = $username;
        $add->email = $email;
        $add->password = bcrypt($password);
        $add->save();
        //return "Registration completed successfully";     
        return view('registration-success');
        
    } //end of function storeIntoDB





    public function loginForm(){
        return view('login');
    }



    public function checkLogin(Request $login){

        //$password = bcrypt($login->password);
        //return $login->all();
        // $data = User::where('email', $login->email)->where('password', $login->password)->first();

        $email = $login->email;
        $password = $login->password;  
        //$id = $login->id; 

    // validation check for all inputs

        $validator = Validator::make($login->all(), [
            'email' => 'required|email',
            'password' => 'required|alphanum|min:3',
        ]);


        if ($validator->fails()) {
            return redirect('login-form')
                        ->withErrors($validator)
                        ->withInput();
        }


        if (Auth::attempt($login->only('email','password'))) {

            //dd($profile);
            return view('user-profile');
        }
        else
            return "wrong email or password";       
    }




     public function showMyPost()
        {
           // $allPosts = \App\Post::get()->where('id',$id)->first();
           
                $myposts = Auth::user()->id;
                $mylists = \App\Post::where('user_id',$myposts)->get();
                return view ('my-post', compact('mylists'));  
           

            //$mylists = $m->pluck('title');
            //dd($n);
            //$mylists = $m->title;
                /*foreach ($mylists as $mylist) {
                    echo $mylist;
                    echo "<br>";
                }*/

            //dd($mylist);
           
           // return view ('my-post', compact('mylists'));          
            
        }
    


    /*public function showMySinglePost($slug){

        $post = \App\Post::where('slug', $slug)->first();
        //return $post->delete();
        return view('my-single-post', compact('post'));
    }*/

    


    public function deletePost($id){
        $pro = \App\Post::where('id',$id)->first()->delete();
        return view('delete');

    /*$post = Post::find($id);
    $post->delete();
    return redirect::route('my-post');*/
    }


public function editPost($id){   
    $post = \App\Post::where('id',$id)->first();
    return view('edit-post', compact('post'));
}

public function updatePost(Request $updatePost, $id)
{
        $title = $updatePost->title;
        $deadline = $updatePost->deadline;
        $country = $updatePost->country;
        $course = $updatePost->course;
        $subject = $updatePost->subject;
        $website = $updatePost->website;
        $nationality = $updatePost->nationality;   

    // validation check for all inputs

        $validator = Validator::make($updatePost->all(), [
            'title' => 'required',
            'deadline' => 'required',
            'country' => 'required',
            'course' => 'required',
            'subject' => 'required',
            'website' => 'required',
            'nationality' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect('edit-post')
                        ->withErrors($validator)
                        ->withInput();
        }

        // save the input data in database      
        //$addnewPost = new \App\Post;
        $addupPost = \App\Post::find($id);

        $addupPost->title = $title;
        $addupPost->slug = str_slug($title , '-');
        $addupPost->slug = str_slug($title , '-');
        
        //if (Auth::check()?Auth::user()->id:null) {
        $addupPost->user_id = Auth::user()->id;
         //             } 
        
        $addupPost->deadline = $deadline;
        $addupPost->country = $country;
        $addupPost->course = $course;
        $addupPost->subject = $subject;
        $addupPost->website = $website;
        $addupPost->nationality = $nationality;
        $addupPost->save();

        echo '<h1>'."You updated post Successfully".'</h1>';
        
        //$post = \App\Post::orderBy('id','DESC')->first(); //return the last record
        $post = \App\Post::find($id); //return the last record
        return view('my-single-post', compact('post'));

}


    public function logout()
    {
        if ( Auth::check() ) {
            Auth::logout();
        }

        return redirect()->route('home');
    }


    public function showASinglePost($slug)
    {
        $post = \App\Post::where('slug', $slug)->first();
    
        return view('single-post', compact('post'));
    }
        
}
