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
require('config2.php');
require 'connect.php';
$query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";

$record_no_stop=0;
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 20:32:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5b79c275d7b21cac1fea5e" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>User-Requests</title>
  <meta content="User-Requests" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/dejk.css" rel="stylesheet" type="text/css">
  <link href="css/beysik.css" rel="stylesheet" type="text/css">
  <link href="css/habadu.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="body-wrapper">
    <div data-w-id="805786d7-8cb0-adde-f5bf-f6746fa4a7d4" style="display:none;opacity:1" class="delete-popup-wrap">
      <div class="delete-popup-section-2">
        <div class="div-block-134">
          <div class="div-block-135"><img src="images/delete_black_192x192.png" alt=""></div>
          <div class="div-block-136">
            <div class="text-block-56">Delete Confirmation</div>
          </div>
          <div class="div-block-137"><a data-w-id="805786d7-8cb0-adde-f5bf-f6746fa4a7dd" href="#" class="button-26 w-button"></a></div>
        </div>
        <div class="div-block-138">
          <div class="div-block-139">
            <div class="text-block-58">Confirm by typing</div>
          </div>
          <div class="div-block-140">
            <div class="text-block-59">jutay-si-justine</div>
          </div>
          <div class="div-block-141">
            <div class="text-block-60">below</div>
          </div>
        </div>
        <div class="div-block-144">
          <div class="w-form">
            <form id="email-form-4" name="email-form-4" data-name="Email Form 4"><input type="text" class="w-input" maxlength="256" name="name-6" data-name="Name 6" placeholder="jutay-si-justine" id="name-6"><input type="submit" value="Delete Forever" data-wait="Please wait..." class="submit-button-5 w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
            <div class="div-block-145"><a href="#" class="button-27 w-button">Cancel</a></div>
          </div>
        </div>
      </div>
    </div>
    <div style="opacity:1" class="edit-popup-wrap">
      <div class="edit-popup-section">
        <div class="edit-popup-wrapper">
          <div class="edit-popup-action">
            <div class="div-block-35">
              <div class="text-block-30">EDIT</div>
            </div>
            <div class="div-block-74"></div>
          </div>
          <div class="div-block-68">
            <div class="div-block-75">
              <div class="text-block-29">DANCE</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">TRIBE</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">LOCATION</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">DATE</div>
            </div>
            <div class="div-block-75"></div>
          </div>
          <div class="div-block-69">
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Dance" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Tribe" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Location" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div id="w-node-8d0954fb1303-ac1fea5e" class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Date" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="div-block-71"><a data-w-id="c6fba535-0f71-81ac-0809-8d0954fb130e" href="#" class="button-7 w-button"></a></div>
          <div class="div-block-73">
            <div class="add-popup-foot">
              <div class="div-block-70"><a href="#" class="button-3 w-button">Update</a><a href="#" class="button-5 w-button">Clear</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-user-sidnav">
      <div class="logo-info-container">
        <div class="div-block-31"><img src="images/FINAL-LOGO3.png" srcset="images/FINAL-LOGO3-p-500.png 500w, images/FINAL-LOGO3-p-800.png 800w, images/FINAL-LOGO3-p-1080.png 1080w, images/FINAL-LOGO3-p-1600.png 1600w, images/FINAL-LOGO3-p-2000.png 2000w, images/FINAL-LOGO3-p-2600.png 2600w, images/FINAL-LOGO3.png 3000w" sizes="139.99566650390625px" alt="" class="image-16"></div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="profilepic/DP1.jpeg" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div user-gear-button="&lt;a&gt;" class="text-block-43"></div>
        </div>
        <div class="div-block-16">
          <a href="index.html" user-logout-button="&lt;a&gt;" class="div-block-83"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="user-datasets-sidenav-2">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20"><a href="user.php?" class="user-dataset-navlink">Home</a></div>
      </div>
      <div class="user-datasets-sidenav-2">
        <div class="div-block-116">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-117"><a href="#" class="link01-2">Profile</a></div>
      </div>
      <div class="div-block-127">
        <div class="div-block-23">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-24"><a href="user-requests.php?" class="link-7">Request</a></div>
      </div>
      <div class="sidenav-navlink-datasets-2">
        <div class="div-block-27">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-119"><a href="user-datasets.php?" class="link-7">Datasets</a></div>
      </div>
    </div>
    <div class="main-user-content">
      <div class="div-block-47">
        <div class="search-rowindicator-container">
          <div class="div-block-36">
            <div class="div-block-37">
              <div class="row-indicator-menu">5</div>
            </div>
            <div id="w-node-0e0c71c1a131-ac1fea5e" class="div-block-38">
              <div class="div-block-40">
                <div class="form-block-2 w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" class="form-2"><input type="submit" value="" data-wait="Please wait..." class="submit-button-3 w-button"></form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
              <div class="div-block-41">
                <div class="form-block-3 w-form">
                  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-3"><input type="submit" value="" data-wait="Please wait..." class="submit-button-4 w-button"></form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-block-42">
              <div class="text-block-15">No. of records per page</div>
            </div>
          </div>
          <div class="div-block-43">
            <div class="div-block-44"></div>
            <div class="div-block-45">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-3 w-input" maxlength="256" name="name" data-name="Name" placeholder="Search here" id="name"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-46">
              <div class="text-block-16"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-48">
        <div class="text-block-17">DATASETS REQUEST</div>
      </div>
      <div class="div-block-49">
        <div class="div-block-97">
          <div class="div-block-51">
            <div class="text-block-18">DANCE</div>
          </div>
          <div class="div-block-52">
            <div class="text-block-19">TRIBE</div>
          </div>
          <div class="div-block-53">
            <div class="text-block-20">LOCATION</div>
          </div>
          <div class="div-block-54">
            <div class="text-block-21">DATE</div>
          </div>
          <div class="div-block-55">
            <div class="text-block-22">ACTION</div>
          </div>
          <div class="div-block-56">
            <div class="text-block-23">STATUS</div>
          </div>
        </div>
      </div>
      <div class="div-block-98">
        <div class="div-block-58">
          <div class="text-block-24">Itik Itik</div>
        </div>
        <div class="div-block-59">
          <div class="text-block-25">Ifugao</div>
        </div>
        <div class="div-block-60">
          <div class="text-block-26">Luzon</div>
        </div>
        <div class="div-block-61">
          <div class="text-block-27">January 17, 2017</div>
        </div>
        <div class="div-block-157"><a href="#" class="button-28 w-button">VIEW</a></div>
        <div class="div-block-156"><a href="#" class="button-29 w-button">Edit<br>‍</a></div>
        <div class="div-block-155"><a data-w-id="dd151904-1960-3dbe-6c46-be44b37ad79a" href="#" class="button-30 w-button">DELETE</a></div>
        <div class="div-block-154">
          <div class="text-block-65">ACCEPTED</div>
        </div>
      </div>
      <div class="div-block-98">
        <div class="div-block-58">
          <div class="text-block-24">Itik Itik</div>
        </div>
        <div class="div-block-59">
          <div class="text-block-25">Ifugao</div>
        </div>
        <div class="div-block-60">
          <div class="text-block-26">Luzon</div>
        </div>
        <div class="div-block-61">
          <div class="text-block-27">January 17, 2017</div>
        </div>
        <div class="div-block-157"><a href="#" class="button-28 w-button">VIEW</a></div>
        <div class="div-block-156"><a href="#" class="button-29 w-button">Edit<br>‍</a></div>
        <div class="div-block-155"><a data-w-id="838fa113-b5a4-0400-fa84-877816de9398" href="#" class="button-30 w-button">DELETE</a></div>
        <div class="div-block-154">
          <div class="text-block-66">PENDING</div>
        </div>
      </div>
      <div class="div-block-98">
        <div class="div-block-58">
          <div class="text-block-24">Itik Itik</div>
        </div>
        <div class="div-block-59">
          <div class="text-block-25">Ifugao</div>
        </div>
        <div class="div-block-60">
          <div class="text-block-26">Luzon</div>
        </div>
        <div class="div-block-61">
          <div class="text-block-27">January 17, 2017</div>
        </div>
        <div class="div-block-157"><a href="#" class="button-28 w-button">VIEW</a></div>
        <div class="div-block-156"><a href="#" class="button-29 w-button">Edit<br>‍</a></div>
        <div class="div-block-155"><a data-w-id="7d20bced-5cc7-f34b-3f21-d6e56c72f008" href="#" class="button-30 w-button">DELETE</a></div>
        <div class="div-block-154">
          <div class="text-block-67">DECLINED</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>