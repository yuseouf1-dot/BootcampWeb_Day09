<?php

// Returns the content of the HTML file matching $page, or an error paragraph.
function render_body($page)
{
    $pages = ["home", "php", "sql"];

    if (in_array($page, $pages, true)) {
        return file_get_contents(__DIR__ . "/" . $page . ".html");
    }
    return "<p>Unknown page</p>";
}
