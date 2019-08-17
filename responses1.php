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

  
<div class="table-scrol">  
    <h1 align="center">All the Responses</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>
            <th>Response Given By</th>  
            <th>What Nickname Suits My Personality ?</th>  
            <th>My name in your phone.</th>  
            <th>Words about me.</th>  
            <th>If you got a chance to ask me something about my personal life what would it be ?</th>
            <th>What’s the bravest thing you’ve ever done in 2018 ?</th>  
            <th>Describe in one word, LIFE is</th>  
            <th>Describe in one word, Friendship is</th>
            <th>Describe in one word, love is</th>  
            <th>How do you Feel When you talk to me</th>  
            <th>Your First Reaction on My First Look</th> 
            <th>Relation between you and me</th>
            <th>One thing that u Love the Most about Me</th>  
            <th>Any name you would like to call me</th>  
            <th>What is your New Year resolution of 2019?</th> 
            <th>If you had three wishes for me, what would it be?</th> 

        </tr>  
        </thead>  
  
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
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $username;  ?></td>  
            <td><?php echo $Q1;  ?></td>  
            <td><?php echo $Q2;  ?></td>  
            <td><?php echo $Q3;  ?></td>
            <td><?php echo $Q4;  ?></td>  
            <td><?php echo $Q5;  ?></td>  
            <td><?php echo $Q6;  ?></td>
            <td><?php echo $Q7;  ?></td>  
            <td><?php echo $Q8;  ?></td>  
            <td><?php echo $Q9;  ?></td> 
            <td><?php echo $Q10;  ?></td>  
            <td><?php echo $Q11;  ?></td>  
            <td><?php echo $Q12;  ?></td>
            <td><?php echo $Q13;  ?></td>  
            <td><?php echo $Q14;  ?></td>  
            <td><?php echo $Q15;  ?></td>  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  

</body>
</html>