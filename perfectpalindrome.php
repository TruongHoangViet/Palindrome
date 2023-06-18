<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
  <title>TITLE</title> 
</head> 
<body> 
<h1>Web Programming - Lab 4</h1> 
<?php // read the comments for hints on how to answer each item 
  if (isset ($_POST["stringtest"])){ // check if form data exists 
    $str = $_POST["stringtest"]; // obtain the form data 
    $pattern = "/^[A-Za-z ]+$/"; // set regular expression pattern 
    if (preg_match($pattern,$str)) {  // check if $str with regular expression
      $str2 = strtolower($str);
      if (strcmp($str2,strrev($str2))){
        echo "<p>not palindrome</p>";
      }else{
      echo "<p>perfect palindrome</p>"; }
    } else {    // string contains invalid characters 
   echo "<p>Please enter a string containing only letters or space.</p>"; 
    } 
  } else {      // no input 
    echo "<p>Please enter string from the input form.</p>"; 
  } 
?> 
</body> 
</html> 