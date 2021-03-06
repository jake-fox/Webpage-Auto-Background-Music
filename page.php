<?php

// RAMDOMLY PICKS THE SONG //
   $r       = mt_rand(1,9); 

// WHAT MUSIC IS CURRENTLY PLAYING //
$authors = array(
 1 => 'Music provided by ',
 2 => 'Music provided by ',
 3 => 'Music provided by ',
 4 => 'Music provided by ',
 5 => 'Music provided by ',
 6 => 'Music provided by ',
 7 => 'Music provided by ',
 8 => 'Music provided by ',
 9 => 'Music provided by ',

);

?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
<!-- SETS VOLUME OF MUSIC ON LOAD -->
<body onload="setVolume()"> 

<!-- PLAYS THE SOUND FILE $r WITH THESE SETTINGS --> 
<video id="myVideo" width="0" height="0" controls style="opacity: 0">
  <source src="music/<?php echo $r?>.wav" type="audio/ogg">
  </video>

<script>
// DEFINES "MYVIDEO"
var vid = document.getElementById("myVideo");

// SET VOLUME OF MUSIC //
function setVolume() { 
  vid.volume = 0.02;
} 
  
// SET AUTO START DELAY OF MUSIC ON LOAD //   
var video = document.getElementById("myVideo");
video.addEventListener("canplay", function() {
  setTimeout(function() {
    video.play();
    // VIDEO START DELAY //
  }, 2000);
});  

// AFTER EVERY SONG THIS RELOADS THE PAGE //
var aud = document.getElementById("myVideo");
aud.onended = function() {
    location.reload();
};


</script> 



</body> 
</head>
<body>
<?php echo $authors[$r];?>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
