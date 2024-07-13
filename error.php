<?php
if(isset($_GET['x'])) {
  $x= $_GET['x'];
  switch($x) {
    case 101:
      $msg = "Rule Voilation";
      $x = "Error: 101";
      break;
      case 403:
          $msg = "Forbidden";
          $x = "Error: 403";
          break;
      case 500:
          $msg = "Internal Server Error";
          $x = "Error: 500";
          break;
      default:
          $msg = "Page Not Found";
          $x = "Error: 404";
          break;
  }
}else{
  $x = "Error: 404";
  $msg = "Page Not Found";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  <style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    
    
    .bgimg {
    background-image: url('http:localhost/w3/img/parallax2.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
    }
  </style>
</head>
<body>
  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
      <img src="https://programming-tour.vercel.app/IAS.ico" style="width:40px" onclick="onClick(this)" class="w3-hover-opacity" alt="Logo">
    </div>

    <div class="w3-display-middle">
      <h1 class="w3-jumbo w3-animate-top"><?php echo $msg; ?></h1>
      <hr class="w3-border-grey" style="margin:auto;width:40%">
      <p class="w3-large w3-center"><?php echo $x; ?></p>
    </div>

    <div class="w3-display-bottomleft w3-padding-large">Powered by <a href="javascript:void(0)" target="_blank">commehome.ca</a></div>
  </div>

</body>

</html>