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
  
      $str3 = strtolower($str);
      if(strcmp($str3,strrev($str3))){
          // check if $str with regular expression
      $pattern2 = "/[A-Za-z]/";
      $len = strlen($str); // obtain length of string $str 
      $convstr =""; 
      for ($i = 0; $i < $len; $i++) {  // checks all characters in $str 
        $letter = substr ($str, $i, 1);
        
      if(preg_match($pattern2, $letter)) {
        $convstr = $convstr . $letter;
      }
    }
      $str2 = strtolower($convstr);
      if (strcmp($str2,strrev($str2))){
        echo "<p>not palindrome</p>";
      }else {
      echo "<p>standard palindrome</p>"; }
      }
      else{
        echo "<p>perfect palindrome</p>";
      }

    } 
   else {      // no input 
    echo "<p>Please enter string from the input form.</p>"; 
  } 
?> 
</body> 
</html> 