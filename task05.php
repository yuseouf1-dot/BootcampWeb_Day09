<?php

// Returns true if the form has been submitted.
function form_is_submitted()
{
    return isset($_POST["submit"]);
}

// Prints a presentation sentence built from the "name", "age" and "curriculum" POST parameters.
function whoami()
{
    $curriculums = [
        "pge" => "PGE (Programme Grande Ecole)",
        "bachelor" => "Bachelor",
        "msc" => "MSc Pro",
        "coding" => "Coding Academy",
        "wac" => "Web@cademie",
    ];

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
        $sentence = "Hi, my name is $name and I'm $age years old.";
    } elseif ($has_age) {
        $sentence = "Hi, I have no name and I'm $age years old.";
    } elseif ($has_name) {
        $sentence = "Hi, my name is $name.";
    } else {
        $sentence = "Hi, I have no name.";
    }

    if (isset($_POST["curriculum"]) && is_string($_POST["curriculum"])
        && isset($curriculums[$_POST["curriculum"]])) {
        $sentence .= " I'm a student of " . $curriculums[$_POST["curriculum"]] . ".";
    }

    echo $sentence;
}
