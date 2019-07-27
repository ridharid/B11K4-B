<?php
function Is_username_valid($username) {
    return preg_match("/^[a-zA-Z][a-zA-Z0-9]{5,9}/",$username);
}
    if (Is_username_valid("Xrutaf888")) {
        echo "true";
    } else {
        echo "false";
    }
    if (Is_username_valid("1Diana")) {
        echo "true";
    } else {
        echo "false";
    }

function Is_password_valid($password) {
    return preg_match("/(?=.*\d)(?=.*[A-Z])(?=.*[=])[a-zA-Z0-9=]{8,}/",$password);
}
    if (Is_password_valid("passW0rd=")) {
        echo "true";
    } else {
        echo "false";
    }
    if (Is_password_valid("C0d3YourFuture!#")) {
        echo "true";
    } else {
        echo "false";
    }
?>