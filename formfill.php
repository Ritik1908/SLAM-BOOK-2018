<?php
session_start();
$uinvid = $_GET['var'];
include("database/db_conection.php");
$uinvname = mysqli_fetch_array(mysqli_query($dbcon, "Select user_name from users where userid= '$uinvid'"));
?>

<!DOCTYPE html>
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">  
    <title>FILL SLAM 2018</title>  

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

</head>
<body>
<div class="container">  
    <div class="row">  
        <div class="col">  

            <!-- SIGN IN BLOCK -->
            <div class="jumbotron">

                <div>  
                    <h3>Enter your name and fill this slam for <?php echo $uinvname[0] ?></h3>  
                </div>

                <!-- Form for sign-in -->
                <form role="form" method="post" action="formfill.php">
                    
                    <input type ="hidden" value = <?php echo $uinvid ?> name="id">

                    <!-- Filler Name block -->
                    <div class="form-group">
                        <label for="UserName">Your Name :</label>
                        <input class="form-control" placeholder="Enter your name" name="username1" type="text" id="UserName" autofocus>
                    </div>

                    <hr>

                    <!-- Question1 -->
                    <div class="form-group">
                        <label for="Q1">What Nickname Suits My Personality ?</label>
                        <input class="form-control" placeholder="Your Answer" id="Q1" name="Q1" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 2 -->
                    <div class="form-group">
                        <label for="Q2">My name in your phone.</label>
                        <input class="form-control" placeholder="Your Answer" id="Q2" name="Q2" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 3 -->
                    <div class="form-group">
                        <label for="Q3">Words about me.</label>
                        <input class="form-control" placeholder="Your Answer" id="Q3" name="Q3" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 4 -->
                    <div class="form-group">
                        <label for="Q4">If you got a chance to ask me something about my personal life what would it be ?</label>
                        <input class="form-control" placeholder="Your Answer" id="Q4" name="Q4" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question5 -->
                    <div class="form-group">
                        <label for="Q5">What’s the bravest thing you’ve ever done in 2018 ?</label>
                        <input class="form-control" placeholder="Your Answer" id="Q5" name="Q5" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 6 -->
                    <div class="form-group">
                        <label for="Q6">Describe in one word, LIFE is</label>
                        <input class="form-control" placeholder="Your Answer" id="Q6" name="Q6" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 7 -->
                    <div class="form-group">
                        <label for="Q7">Describe in one word, Friendship is</label>
                        <input class="form-control" placeholder="Your Answer" id="Q7" name="Q7" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 8 -->
                    <div class="form-group">
                        <label for="Q8">Describe in one word, love is</label>
                        <input class="form-control" placeholder="Your Answer" id="Q8" name="Q8" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 9 -->
                    <div class="form-group">
                        <label for="Q9">How do you Feel When you talk to me</label>
                        <input class="form-control" placeholder="Your Answer" id="Q9" name="Q9" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 10 -->
                    <div class="form-group">
                        <label for="Q10">Your First Reaction on My First Look</label >
                        <input class="form-control" placeholder="Your Answer" id="Q10" name="Q10" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 11 -->
                    <div class="form-group">
                        <label for="Q11">Relation between you and me</label>
                        <input class="form-control" placeholder="Your Answer" id="Q11" name="Q11" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 12 -->
                    <div class="form-group">
                        <label for="Q12">One thing that u Love the Most about Me</label>
                        <input class="form-control" placeholder="Your Answer" id="Q12" name="Q12" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 13 -->
                    <div class="form-group">
                        <label for="Q13">Any name you would like to call me</label>
                        <input class="form-control" placeholder="Your Answer" id="Q13" name="Q13" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 14 -->
                    <div class="form-group">
                        <label for="Q14">What is your New Year resolution of 2019?</label>
                        <input class="form-control" placeholder="Your Answer" id="Q14" name="Q14" type="text" value="">
                    </div>

                    <hr>

                    <!-- Question 15 -->
                    <div class="form-group">
                        <label for="Q15">If you had three wishes for me, what would it be?</label>
                        <input class="form-control" placeholder="Your Answer" id="Q15" name="Q15" type="text" value="">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit Your Answers" name="sub" >
                    </div>

                </form>

                <!-- Link to create your own SLAM book block -->
                <div>
                    <p>Want to create your own slam book and get amazing response from your friends clink on the link below :-</p>
                    <a href="registration.php">Create My Slam</a>
                </div>
            </div>
        </div>
    </div>  
</div>
</body>
<?php  
   
if(isset($_POST['sub']))  
{  
    $uinvid = $_POST['id'];
    $user_name1=$_POST['username1'];//here getting result from the post array after submitting the form.  
    $Q1=$_POST['Q1'];
    $Q2=$_POST['Q2']; 
    $Q3=$_POST['Q3'];
    $Q4=$_POST['Q4'];
    $Q5=$_POST['Q5'];
    $Q6=$_POST['Q6'];
    $Q7=$_POST['Q7'];
    $Q8=$_POST['Q8'];
    $Q9=$_POST['Q9'];
    $Q10=$_POST['Q10'];
    $Q11=$_POST['Q11'];
    $Q12=$_POST['Q12'];
    $Q13=$_POST['Q13'];
    $Q14=$_POST['Q14'];
    $Q15=$_POST['Q15'];  
  
    if($user_name1=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name.')</script>";
        exit();//this use if first is not work then other will not show  
    }

    //here query check weather if user already registered so can't register again.  
    $check_email_query="select * from qdata WHERE uide='$uinvid' AND user_name1='$user_name1'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {
        echo "<script>alert('Response already recorded')</script>";
        exit();  
    }  

    // insert the user into the database.  
    $insert_user="insert into qdata (uide,user_name1,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15) VALUE ('$uinvid','$user_name1','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.php','_self')</script>";  
    }  
}  
?>
</html>