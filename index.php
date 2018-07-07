<?php
include'header.html';
require 'core.php';                                         //or include.php
require 'connect.php';
if(loggedin())                                               //i am right now at index, so $current_file in loginform will have value 
   //index.php
{

header('Location: loggedin.php');


}
else
{
include 'loginform.php';
echo'<h3 style="color:#f2f2f2;font-family: ;font-size:25px;margin-left:300px;margin-top:30px;">Not Registered in yet!!   Register here:</h3>';
echo '<a href="register.php" class="btn btn-primary" style="background-color: #4CAF50; border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    margin-left:300px;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;">
	<b>Register</b></a> ';
//echo'<br>';

echo'<h3 style="color:#f2f2f2;font-family: ;font-size:25px;margin-left:300px;margin-top:50px;">Login as a guest:</h3>';
echo '<a href="guest.php" class="btn btn-primary" style="background-color: #4CAF50; border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    margin-left:300px;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;">
	<b>Guest Login</b></a> ';

echo'<h3 style="color:#f2f2f2;font-family: ;font-size:25px;margin-left:300px;margin-top:70px;">Post your Blood Request:</h3>';
echo '<a href="request.php" class="btn btn-primary" style="background-color: #4CAF50; border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    margin-left:300px;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;"><b>Blood Request</b></a>';
}

?>
