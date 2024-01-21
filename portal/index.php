<?php
Error_Reporting(E_ALL ^ E_NOTICE);
// Get all query string parameters using if and isset: $_SERVER
require_once "../header.php";

if (isset($_SERVER['QUERY_STRING'])){
  $query = $_SERVER['QUERY_STRING'];

// If page is not set, set it to the default page: .
}
  ?>
<div class="bg-shadow-lg p-3 mb-5 bg-white rounded">
  <h2 class="text-center">Welcome to the Portal!</h2>
  <p class="text-center">This is the portal for the project. It is a place where you can find all of the service, kept in 3.0%/per buy, and you can buy Server made in PHP, HTML, CSS, JS, and Python.</p>
</div>
<ul id="item" class="list-group">
  <h2 class="text-center">No service yet, Please add one using <I class="fas fa-plus"></I> button.</h2>
</ul>