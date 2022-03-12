<?php

function development_check() {
    if(isDevelopmentMode()) {
        session_start();

        if (!isset($_SESSION["username"])) {
            header("location: admin.php");
            exit;
        }
    }
}

function isDevelopmentMode() {
    return true;
}

