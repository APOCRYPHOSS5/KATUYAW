<?php
session_start();
$username=$_SESSION['username'];
if ($_SESSION['loginned_check']==True)
{
  echo"";
}
else
{
  header("location: index.html");
}
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Mar 01 2020 22:46:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5b59a6c9fe841f30999b09" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>User</title>
  <meta content="User" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/future-lab-gadget-no-001.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="body-wrapper">
    <div class="main-user-sidnav">
      <div class="logo-info-container">
        <div class="div-block-31">
          <div class="text-block-14">KATUYAW</div>
        </div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="profilepic/DP1.jpeg" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-5"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-6"></div>
        </div>
        <div class="div-block-16">
          <a href="index.html"class="div-block-17"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20">
          <a href="user.php?" class="text-block-7">Home</a>
        </div>
      </div>
      <div class="sidenav-profile-container">
        <div class="div-block-26">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-27">
          <div class="text-block-11">Profile</div>
        </div>
      </div>
      <div class="sidenav-requests-container">
        <div class="div-block-23">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-24">
          <a href="user-requests.php?" class="link-7">Request</a>
        </div>
      </div>
      <div class="sidenav-datasets-container">
        <div class="div-block-29">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-30">
          <a href="user-datasets.php?" class="text-block-13">Datasets</a>
        </div>
      </div>
    </div>
    <div class="main-user-content">
      <div class="div-block-34"></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>