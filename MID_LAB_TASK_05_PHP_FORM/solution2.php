<?php

$email_error = "";
$email = $_REQUEST['email'];

if (isset($_REQUEST['submit'])) {

    if ($email == null) {
        $email_error = "invalid email!";
    } else {
        $email_error = $_REQUEST['email'];
    }
}