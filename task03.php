<?php

// Returns the content of the HTML file matching the "page" GET parameter, or an error paragraph.
function dynamic_body()
{
    $pages = ["home", "php", "sql"];

    if (isset($_GET["page"]) && in_array($_GET["page"], $pages, true)) {
        return file_get_contents(__DIR__ . "/" . $_GET["page"] . ".html");
    }
    return "<p>Unknown page</p>";
}
