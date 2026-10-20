<?php

// Prints a presentation sentence built from the "name" and "age" POST parameters.
function whoami()
{
    $has_name = isset($_POST["name"]) && is_string($_POST["name"])
        && trim($_POST["name"]) !== "";
    $has_age = isset($_POST["age"]) && is_string($_POST["age"])
        && ctype_digit($_POST["age"]);

    if ($has_name) {
        $name = htmlspecialchars($_POST["name"]);
    }
    if ($has_age) {
        $age = (int) $_POST["age"];
    }

    if ($has_name && $has_age) {
        echo "Hi, my name is $name and I'm $age years old.";
    } elseif ($has_age) {
        echo "Hi, I have no name and I'm $age years old.";
    } elseif ($has_name) {
        echo "Hi, my name is $name.";
    } else {
        echo "Hi, I have no name.";
    }
}
