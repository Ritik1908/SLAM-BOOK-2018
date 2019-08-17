<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
    <title>Sign Up</title>  
</head>  

<style>

    body{
        background: #C33764;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .jumbotron{
        margin-top: 50px;
    }
</style>  

<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col">

            <!-- Sign UP block -->
            <div class="jumbotron">

                <!-- Signup heading -->
                <div>  
                    <h3>Registration</h3>  
                </div>

                <form role="form" method="post" action="registration.php">

                    <!-- Block to take user name -->
                    <div class="form-group">
                        <label for="InputUserName">Enter Your Name :</label>
                        <input class="form-control" placeholder="Username" name="name" type="text" id="InputUserName" autofocus>  
                    </div>

                    <!-- Block to enter email address -->
                    <div class="form-group">
                        <label for="Inputuid">Enter USER ID :</label>
                        <input class="form-control" placeholder="Enter Unique User ID" name="uid" type="text" id="Inputuid" autofocus>  
                    </div>

                    <!-- Enter Password -->
                    <div class="form-group">
                        <label for = "InputPassword">Enter Your Password :</label>
                        <input class="form-control" placeholder="Password" name="pass" type="password" id="InputPassword" value="">  
                    </div>

                    <!-- Blck to submit button -->
                    <div class="form-group">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >    
                    </div>
                </form>  
                <center><b>Already registered ?</b> <br></b><a href="index.php">Login here</a></center><!--for centered text-->  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
</html>  
  
<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $uid=$_POST['uid'];//same  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name.')</script>";
        exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password.')</script>";
        exit();  
    }  
  
    if($uid=='')  
    {  
        echo"<script>alert('Please enter the User ID.')</script>";
        exit();  
    }  

    //here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE userid='$uid'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {
        echo "<script>alert('User ID $uid is already exist in our database, Please try another one!')</script>";
        exit();  
    }  

    //insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,userid) VALUE ('$user_name','$user_pass','$uid')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
}  
?>  