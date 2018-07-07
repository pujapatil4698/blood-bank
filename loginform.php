<?php
error_reporting(0);

echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';

  if (isset($_POST['username'])&& isset($_POST['password']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(!empty($username)&&!empty($password))
    {
      $password_hash=md5($password);
      $query="select `id` from `donor` where `username`='".mysqli_real_escape_string($username)."' and `password`='".mysqli_real_escape_string($password_hash)."'";
      $query1="select `id` from `administrator` where `username`='".mysqli_real_escape_string($username)."' and `password`='".mysqli_real_escape_string($password_hash)."'";
      $query2="select `id` from `hospital` where `username`='".mysqli_real_escape_string($username)."' and `password`='".mysqli_real_escape_string($password_hash)."'";
      if($query_run=mysqli_query($query))
      {
        $query_num_rows=mysql_num_rows($query_run);
        if($query_num_rows==0)
        {
               if($query_run1=mysql_query($query1))
               {
                 $query_num_rows1=mysql_num_rows($query_run1);
                                                if($query_num_rows1==0)
                                                {
                                                  if($query_run2=mysql_query($query2))
                                                  {
                                                     $query_num_rows2=mysql_num_rows($query_run2);
                                                     if($query_num_rows2==0)
                                                     {echo '<strong>Warning! </strong>';
                                                     echo 'invalid username password combination';}
                                                     else if($query_num_rows2==1)
                                                     {
                                                      $user_id=mysql_result($query_run2,0,'id');
                                                      $_SESSION['user_id']=$user_id;
                                                      header('Location:hospital.php');
                                                     }
                                                  }



                                                }
                  else if($query_num_rows1==1)
                  {
                   $user_id=mysql_result($query_run1,0,'id');
                   $_SESSION['user_id']=$user_id;
                   header('Location:index_administrator.php');
                  }
               }
        }


        else if($query_num_rows==1)
        {
          $user_id=mysql_result($query_run,0,'id');
          $_SESSION['user_id']=$user_id;   //starting a session for respective user
          header('Location:index.php');    //go back to index after starting session
        }
      }
    }
    else
    {echo '<strong>Warning! </strong>';
    echo'please enter details';}
  }
  echo "</div>";                                                                      //$current file or index.php since loginform is included in index
?>
<body>
<div style="float:right;font-size:30px ;margin-right:50px;margin-top:100px;color:#f2f2f2;">
<form action="<?php echo $current_file;?>" method="POST">
Username:<input type="text" name="username" style="font-size:25px;background:#ffffff;border-radius:8px;color:brown;"></br></br>
Password:<input type="password" name="password" style="font-size:25px;background:#ffffff;border-radius:8px;color:brown;"></br></br>
<input type="submit" value="Log in" class="btn btn-success btn-lg" style="background-color: #4CAF50; border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;">
</form></div>
</body>