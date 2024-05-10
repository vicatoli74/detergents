<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Button Color</title>
<style>
    .btn {
        padding: 10px 20px;
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>

<button id="changeColorBtn" class="btn">Change Color</button>

<script>
document.getElementById("changeColorBtn").addEventListener("click", function() {
    // Change button color to blue
    document.getElementById("changeColorBtn").style.backgroundColor = "blue";
    
    // Redirect to home.php
    window.location.href = "home.php";
