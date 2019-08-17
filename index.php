<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">  
    <title>SLAM BOOK 2018</title>  

    <style>
        body{
            background: #C33764;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .jumbotron{
            margin-top: 50px;
        }
        #my_centered_buttons 
        { 
            display: flex; 
            justify-content: center; 
        }
    </style>

</head>
  
<body>

<!-- Navbar -->
<nav class = "navbar navbar-dark bg-dark">
    <div class = "col" style="text-align: center">
        <a href="index.php">SLAM BOOK 2018</a>
    </div>
</nav>

<div class="container jumbotron">  
    <div class = "row">
        <h1 style="text-align: center">SLAM BOOK 2K18</h1>
        <p>Login/Sign up to generate the year end SLAM BOOK and welcome a new year with great bond of friendship stronger than 2k18</p>
    </div>
    <div class="row">  
        <div class="col">  

            <!-- SIGN IN BLOCK -->
            <div class="jumbotron">

                <div>  
                    <h3>Sign In</h3>  
                </div>

                <!-- Form for sign-in -->
                <form role="form" method="post" action="index.php">

                    <!-- Email address block -->
                    <div class="form-group">
                        <label for="InputUserId">User ID :</label>
                        <input class="form-control" placeholder="User Id" name="uid" type="text" id="InputUserId" autofocus>
                    </div>

                    <!-- Password block -->
                    <div class="form-group">
                        <label for="InputPassword">Password :</label>
                        <input class="form-control" placeholder="Password" id="InputPassword1" name="pass" type="password" value="">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="index" >
                    </div>

                </form>

                <!-- Link to not registered block -->
                <div>
                    <p>Not Registered yet ? Not able to post answers for your friends slam ?</p>
                    <a href="registration.php">Register Here</a>
                </div>

            </div>
        </div>
    </div>  
</div>

<!-- Footer -->
<footer class="jumbotron">
<div class = "row">
    <div class="col">
        <h3>FEEDBACK</h3>
        <p>Your feedback is appreciated.<br>Send your valuable feedback at <br>ritikverma553@gmail.com<br></p>
        <hr>
        <p>If you want to send new slams to be added into Site Send Questions at :- <br>ritikverma553@gmail.com</p>
    </div>
  
    <div class="col">
      <h3>CONTACT</h3>
      <p>If you want to personally contact me(for some works),you can send your contact details along with the reason to contact at the given mail<br>ritikverma8100775754@gmail.com</p>
    </div>

    <div class="col">
      <h3>SHARE</h3>
      <p>If you like mine work you can share this with your friends.</p>
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons">
        <a class="a2a_button_whatsapp"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_google_plus"></a>
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
    </div>
</div>
</footer>
<!-- End page content -->

</body>  
</html>  
  
<?php  
  
include("database/db_conection.php");  
  
if(isset($_POST['index']))  
{  
    $uid = $_POST['uid'];  
    $user_pass = $_POST['pass'];

    $check_user="select * from users WHERE userid='$uid'AND user_pass='$user_pass'";
    $run=mysqli_query($dbcon,$check_user);

    $name_query = "select user_name from users where userid = '$uid'";
    $user_name = mysqli_fetch_array(mysqli_query($dbcon, $name_query));
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
        $_SESSION['userid']=$uid;
        $_SESSION['username']=$user_name['user_name'];//here session is used and value of $user_email store in $_SESSION.  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  