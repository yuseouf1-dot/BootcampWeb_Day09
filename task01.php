<?php

// Returns (does not print) the HTML of the site menu.
function display_menu()
{
    $menu = '<ul>' . "\n";
    $menu .= '    <li><a href="home.php">Home</a></li>' . "\n";
    $menu .= '    <li><a href="product.php">Products</a></li>' . "\n";
    $menu .= '    <li><a href="about.php">About Us</a></li>' . "\n";
    $menu .= '    <li><a href="contact.php">Contact</a></li>' . "\n";
    $menu .= '</ul>' . "\n";
    return $menu;
}
