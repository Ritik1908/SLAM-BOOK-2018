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
    </style>
</head> 
<body>  

<!-- Navbar -->
<nav class = "navbar navbar-dark bg-dark">
	<div class = "col">
		<p>SLAM BOOK 2018</p>
	</div>
	<div class = "col" style="text-align:right">
		<?php echo '<p>'.$_SESSION['username'].'</p>' ?>
		<a href="logout.php">Logout here</a>
	</div>
</nav>

<!-- Main content to welcome page -->
<div class = "jumbotron">

	<!-- Welcome Message -->
	<div>
		<h2>As the year is approaching towards ends, share this slam book with your near and dear ones to get amazaing response from them and strentghen your bond in upcoming year</h2>
	</div>

	<hr>

	<!-- Set of questionarrie for slam book 2018 -->
	<div>
		<h3>This Slam Book Consist of following Slams :-</h3>
		<ol>
			<li>What Nickname Suits My Personality ?</li>
			<li>My name in your phone.</li>
			<li>Words about me.</li>
			<li>If you got a chance to ask me something about my personal life what would it be ?</li>
			<li>What’s the bravest thing you’ve ever done in 2018 ?</li>
			<li>Describe in one word, LIFE is</li>
			<li>Describe in one word, Friendship is</li>
			<li>Describe in one word, love is</li>
			<li>How do you Feel When you talk to me</li>
			<li>Your First Reaction on My First Look</li>
			<li>Relation between you and me</li>
			<li>One thing that u Love the Most about Me</li>
			<li>Any name you would like to call me</li>
			<li>What is your New Year resolution of 2019?</li>
			<li>If you had three wishes for me, what would it be?</li>
		</ol>
	</div>

	<hr>

	<!-- Ask for Response -->
	<div>
		<h3>Excited About the Response You will get, ask your friends to fill up the book.</h3>
		<p>Click on the button below to request friends for answers.</p>
		<a href = "whatsapp://send?text=Send this SLAM BOOK to your friends :-
		https://slam-book-2018.000webhostapp.com/formfill.php?var=<?php echo $_SESSION['userid'] ?>" class="btn btn-secondary btn-lg btn-block">Request Slams</a>
	</div>

	<!-- Generate response -->
	<div>
		<h4>Click on the button below to generate all the responses.</h4>
		<a href = "responses.php" class="btn btn-secondary btn-lg btn-block">Generate Response</a>
	</div>


</div>
</body>  
  
</html> 