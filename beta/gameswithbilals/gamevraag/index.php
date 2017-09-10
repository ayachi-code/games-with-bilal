<!DOCTYPE html>

<html>

<head>

<title>Game aanvragen</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="index.css">
<script src="index.js"></script>

</head>


<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GamesWithBilal</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">games</a></li>
      <li class="active"><a href="#">Games aanvragen</a></li>
    </ul>
  </div>
</nav>



<center>
<?php
$action=$_REQUEST['action'];
if ($action=="")    
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    jouw naam:<br>
    <input name="name" type="text" value="" size="30"/><br>
    jouw e-mail:<br>
    <input name="email" type="text" value="" size="30"/><br>
    jouw idee voor een game:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="verstuur verzoek"/>
    </form>
    <?php
    } 
else                
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("buddygames.games@gmail.com", $subject, $message, $from);
		echo "verzoek is verstuurd ";
	    }
    }  
?>
</center>					









</body>



</html>