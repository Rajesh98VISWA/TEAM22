<?php
error_reporting(E_ALL & ~ E_NOTICE);
session_start();
 $pagetitle="LogIn Page";
?>
<?php
       if ($_POST['submit']){
        include 'connection.php';
        $username=($_POST['username']);
        $password=($_POST['password']);

        $sql="SELECT id, username, password FROM users WHERE username='$username' AND password='$password' ;";
        $query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
          $userId= $row[0];
          $dbusername=$row[1];
          $dbpassword=$row[2];
        }
        echo $dbusername;
        echo $dbpassword;
           if($dbusername){
              $_SESSION['username']=$username;
              $_SESSION['id']=$userId;
              header('Location:home.php');
        }else{
            echo "<span style='color:red;'>User name or password is incorrect!</span>";
          }    
} 
?>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 20px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">VIT</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
 </div>
     <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In to view Home Page</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <div class="checkbox">
                                  <label> <input name="remember" type="checkbox" value="Remember Me">keep logged</label><br>
                                <button type="sumbit" name="submit" value="login" class="btn btn-lg btn-success btn-block">Login</button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
 <?php include "includes/footer.php"; ?>