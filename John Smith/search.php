<?php
// Include common.php or any necessary files
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}


if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Perform search query in the database or any other logic
    // Display search results or redirect to appropriate pages
    // You can use $search_query to fetch results from the database
}
?>