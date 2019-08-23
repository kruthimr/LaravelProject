<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userstabs;
class RegsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    

    public function index()
    {   //$pages= userstabs::all();
        return view('pages.signup');//->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //return('pages.signup');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
 
 // Define variables and initialize with empty values
 /* $username = $password = $confirm_password = "";
 $username_err = $password_err = $confirm_password_err = "";
  
 // Processing form data when form is submitted
 if($_SERVER["REQUEST_METHOD"] == "get"){
  
     // Validate username
     if(empty(trim($_GET["username"]))){
         $username_err = "Please enter a username.";
     } else{
         // Prepare a select statement
         $sql = "SELECT id FROM userstabs WHERE username = ?";
         
         if($stmt = mysqli_prepare($link, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "s", $param_username);
             
             // Set parameters
             $param_username = trim($_GET["username"]);
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                 
                 mysqli_stmt_store_result($stmt);
                 
                 if(mysqli_stmt_num_rows($stmt) == 1){
                     $username_err = "This username is already taken.";
                 } else{
                     $username = trim($_GET["username"]);
                 }
             } else{
                 echo "Oops! Something went wrong. Please try again later.";
             }
         }
          
         // Close statement
         mysqli_stmt_close($stmt);
     }
     
     // Validate password
     if(empty(trim($_GET["password"]))){
         $password_err = "Please enter a password.";     
     } elseif(strlen(trim($_GET["password"])) < 6){
         $password_err = "Password must have atleast 6 characters.";
     } else{
         $password = trim($_GET["password"]);
     }
     
     // Validate confirm password
     if(empty(trim($_GET["confirm_password"]))){
         $confirm_password_err = "Please confirm password.";     
     } else{
         $confirm_password = trim($_GET["confirm_password"]);
         if(empty($password_err) && ($password != $confirm_password)){
             $confirm_password_err = "Password did not match.";
         }
     }
     
     // Check input errors before inserting in database
     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
         
         // Prepare an insert statement
         $sql = "INSERT INTO userstabs (username, password) VALUES (?, ?)";
          
         if($stmt = mysqli_prepare($link, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
             
             // Set parameters
             $param_username = $username;
             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                 // Redirect to login page
                 header("location: login.php");
             } else{
                 echo "Something went wrong. Please try again later.";
             }
         }
          
         // Close statement
         mysqli_stmt_close($stmt);
     }
     
     // Close connection
     mysqli_close($link);
 }
 */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
