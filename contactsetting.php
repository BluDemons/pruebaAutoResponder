<?php

// Change the Email Addresses below to email Id where you want to get your emails.
// Reply Email Address where you want to set reply to email ID

$replyto='jar.salazar@yavirac.edu.ec';

$uploadpath='/scripts/test/';

$save_path ='http://'.$_SERVER['SERVER_NAME'].$uploadpath;  // do not change this

switch ($subject) {
case "PHP Department": // appears as subject in mail and select field name 1 in form
$toemail='andresjuan11048@gmail.com'; // select field email 1

break;

case "Java Deparment": // appears as subject in mail and select field name 3 in form
$toemail='java@domain.com'; // select field email 2

break;

case "Flash Department": // appears as subject in mail and select field name 3 in form
$toemail='flash@domain.com'; // select field email 3

break;
}

$autorespond="yes"; // no : Disable the Auto-Responder   yes : Enable Auto-Responder.

?>
