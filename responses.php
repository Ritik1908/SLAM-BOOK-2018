<?php  
session_start();  
if(!$_SESSION['userid'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
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
            color : white;
        }
        .jumbotron {
        	color : gray;
        	margin : 20px;
        }
        }  
    .table {  
        margin-top: 50px;  
  
    } 
    </style>
</head> 

<body>  
<!-- Navbar -->
<nav class = "navbar navbar-dark bg-dark">
    <div class = "col">
        <a href="welcome.php">SLAM BOOK 2018</a>
    </div>
    <div class = "col" style="text-align:right">
        <?php echo '<p>'.$_SESSION['username'].'</p>' ?>
        <a href="logout.php">Logout here</a>
    </div>
</nav>

  
<div class="jumbotron">  
    <h1 align="center">All the Responses</h1>  
</div>

<?php
    include("database/db_conection.php");  
    $view_users_query="select * from qdata where uide = '{$_SESSION['userid']}'";//select query for viewing users.
    $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
    {  
        $username=$row[1];  
        $Q1=$row[2];  
        $Q2=$row[3];  
        $Q3=$row[4];
        $Q4=$row[5];  
        $Q5=$row[6];  
        $Q6=$row[7];
        $Q7=$row[8];  
        $Q8=$row[9];  
        $Q9=$row[10];  
        $Q10=$row[11];  
        $Q11=$row[12];  
        $Q12=$row[13];
        $Q13=$row[14];  
        $Q14=$row[15];  
        $Q15=$row[16];
    ?>

    <div class = "jumbotron">
        <h3>Response Given By : <?php echo $username; ?></h3>
        <ol>
            <li>
                What Nickname Suits My Personality ?
                <br>
                Answer:- <?php echo $Q1;  ?>
            </li>
            <li>
                My name in your phone.
                <br>
                Answer:- <?php echo $Q2; ?>
            </li>  
            <li>
                Words about me.
                <br>
                Answer:- <?php echo $Q3; ?>
            </li>  
            <li>
                If you got a chance to ask me something about my personal life what would it be ?
                <br>
                Answer:- <?php echo $Q4; ?>
            </li>
            <li>
                What’s the bravest thing you’ve ever done in 2018 ?
                <br>
                Answer:- <?php echo $Q5; ?>
            </li>  
            <li>   
                Describe in one word, LIFE is
                <br>
                Answer:- <?php echo $Q6; ?>
            </li>  
            <li>
                Describe in one word, Friendship is
                <br>
                Answer:- <?php echo $Q7; ?>
            </li>
            <li>
                Describe in one word, love is
                <br>
                Answer:- <?php echo $Q8; ?>
            </li>  
            <li>
                How do you Feel When you talk to me
                <br>
                Answer:- <?php echo $Q9; ?>
            </li>  
            <li>
                Your First Reaction on My First Look
                <br>
                Answer:- <?php echo $Q2; ?>
            </li> 
            <li>
                Relation between you and me
                <br>
                Answer:- <?php echo $Q2; ?>
            </li>
            <li>
                One thing that u Love the Most about Me
                <br>
                Answer:- <?php echo $Q2; ?>
            </li>  
            <li>
                Any name you would like to call me
                <br>
                Answer:- <?php echo $Q2; ?>
            </li>  
            <li>
                What is your New Year resolution of 2019?
                <br>
                Answer:- <?php echo $Q2; ?>
            </li> 
            <li>
                If you had three wishes for me, what would it be?
                <br>
                Answer:- <?php echo $Q2; ?>
            </li>
        </ol>
    </div>
  
<?php } ?>

</body>
</html>