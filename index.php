<?php
require 'vendor/autoload.php';
include_once("config.php");
include_once("library.php");
if(chkLogin()){

        $name = $_SESSION["uname"];
 }
    else{
        header("Location: login.php");
    }

    if(isset($_POST['logout'])){

        $var = removeall();
        if($var){
            header("Location:login.php");
        }
        else{
            echo "Error!";
        }

    }
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BLog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

  .container
 {
	padding: 60px;
	
	position:relative;
	top:50px;
	left:1%;
	
	width:300px;
	
	
 }
 .form{
 width:300px;
 padding:100px;
 margin:auto;
 }
 .button
 {
 background-color:gray;
 color:white;
 border:none;
 cursor:pointer;
 width:100%;
 padding:10px;
 margin:8px 0;
 }
 button:hover
 {opacity:0.8;}

 .row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
 
.column {
    float: left;
    padding: 10px;
}


.column.side {
    width: 30%;
    font-size:18.5px;
}

/* Middle column */
.column.middle {
    width:30%;
	}
	.topnavlogout {
    position:relative;
    left:20%;
    background-color: #333;
	    display:inline;
	    color: #f2f2f2;
	    text-align: center;
	    padding:10px;
    text-decoration: none;

}
.container
 {
	padding: 60px;
	
	position:relative;
	top:75px;
	left:1%;
	
	width:300px;
	
	
 }
 .form{
 width:300px;
 padding:100px;
 margin:auto;
 }
 .button
 {
 background-color:gray;
 color:white;
 border:none;
 cursor:pointer;
 width:100%;
 padding:10px;
 margin:8px 0;
 }
 button:hover
 {opacity:0.8;}

 .row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
 
.column {
    float: left;
    padding: 10px;
}


.column.side {
    width: 30%;
    font-size:18.5px;
}

/* Middle column */
.column.middle {
    width:30%;
	}
	.topnavlogout {
    position:relative;
    left:20%;
    background-color: #333;
	    display:inline;
	    color: #f2f2f2;
	    text-align: center;
	    padding:10px;
    text-decoration: none;

}


  .container
 {
	padding: 60px;
	
	position:relative;
	top:100px;
	left:1%;
	
	width:300px;
	
	
 }
 .form{
 width:300px;
 padding:100px;
 margin:auto;
 }
 .button
 {
 background-color:gray;
 color:white;
 border:none;
 cursor:pointer;
 width:100%;
 padding:10px;
 margin:8px 0;
 }
 button:hover
 {opacity:0.8;}

 .row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
 
.column {
    float: left;
    padding: 10px;
}


.column.side {
    width: 30%;
    font-size:18.5px;
}

/* Middle column */
.column.middle {
    width:30%;
	}
	.topnavlogout {
    position:relative;
    left:20%;
    background-color: #333;
	    display:inline;
	    color: #f2f2f2;
	    text-align: center;
	    padding:10px;
    text-decoration: none;

}


.container
 {
	padding: 60px;
	
	position:relative;
	top:125px;
	left:1%;
	
	width:300px;
	
	
 }
 .form{
 width:300px;
 padding:100px;
 margin:auto;
 }
 .button
 {
 background-color:gray;
 color:white;
 border:none;
 cursor:pointer;
 width:100%;
 padding:10px;
 margin:8px 0;
 }
 button:hover
 {opacity:0.8;}

 .row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
 
.column {
    float: left;
    padding: 10px;
}


.column.side {
    width: 30%;
    font-size:18.5px;
}

/* Middle column */
.column.middle {
    width:30%;
	}
	.topnavlogout {
    position:relative;
    left:20%;
    background-color: #333;
	    display:inline;
	    color: #f2f2f2;
	    text-align: center;
	    padding:10px;
    text-decoration: none;

}

	</style>
<body>
<center>
<form method="post" action="">
	            <input type="submit"  class="topnavlogout" name="logout" value="Logout!">
        </form>
<div class="row">
  <div class="column side">
  <form action="education.html" method="post">

   <div class="container">
<button type="submit" name="add">Add Education Post</button>
</div>
   </form>
   </div>

 <div class="column middle">
<form action="sports.html" method="post">

   <div class="container">


<button type="submit" name="add">Add Sports Post</button>
</div>

   </form>
   </div>

  <div class="column side">
  <form action="politics.html" method="post">

     <div class="container">


  <button type="submit" name="add">Add Politics Post</button>
  </div>

     </form>
   </div>
   
   <div class="row">
  <div class="column side">
  <form action="education_display.php" method="post">

   <div class="container">
<button type="submit" name="add">Education Posts</button>
</div>
   </form>
   </div>

 <div class="column middle">
<form action="sports_display.php" method="post">

   <div class="container">


<button type="submit" name="add">Sports posts</button>
</div>

   </form>
   </div>

  <div class="column side">
  <form action="politics_display.php" method="post">

     <div class="container">


  <button type="submit" name="add">Add Political Post</button>
  </div>

     </form>
   </div>
</div>
<div class="row">
  <div class="column side">
  <form action="cinema.html" method="post">

   <div class="container">
<button type="submit" name="add">cinema</button>
</div>
   </form>
   </div>

 <div class="column middle">
<form action="novels.html" method="post">

   <div class="container">


<button type="submit" name="add">novels</button>
</div>

   </form>
   </div>

  <div class="column side">
  <form action="sharemarket.html" method="post">

     <div class="container">


  <button type="submit" name="add">Add Share Market Post</button>
  </div>

     </form>
   </div>
</div>
<div class="row">
  <div class="column side">
  <form action="cinema_display.php" method="post">

   <div class="container">
<button type="submit" name="add">Cinema Posts</button>
</div>
   </form>
   </div>

 <div class="column middle">
<form action="novels_display.php" method="post">

   <div class="container">


<button type="submit" name="add">Novel Reviews</button>
</div>

   </form>
   </div>

  <div class="column side">
  <form action="Share Market_display.php" method="post">

     <div class="container">


  <button type="submit" name="add">Share Market Post</button>
  </div>

     </form>
   </div>
</div>

</center>

</body>
 </html>