

<?php

error_reporting(0);
@set_time_limit(3);

$r       = mt_rand(1,3);
$plname  = 'Player';
$map     = '';
$avatar  = 'img/nouser.png';

$authors = array(
    1 => 'Music provided by Argofox:
Hexalyte - Horizon
youtu.be/zX7K_oj55Gw',
    2 => 'Music provided by Argofox:
DOCTOR VOX - Frontier
https://youtu.be/lkY3Ek9VPtg',
    3 => 'Music provided by Argofox:
Inova - 8-Bit Shuffle
https://youtu.be/S-gBTBTHYh8'
);
}

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

<video id="myVideo" width="0" height="0" controls style="opacity: 0">
  <source src="music/<?php echo $r?>.ogg" type="audio/ogg">
  
</video>
