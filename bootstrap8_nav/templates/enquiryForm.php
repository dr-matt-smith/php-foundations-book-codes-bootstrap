<!doctype html>
<html><head>
    <title>MGW - equiry form</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >
    <style>
        @import '/style.css';
    </style>
</head>

<body class="container">

<?php
    require_once __DIR__ . '/_nav.php'
?>

<h1>MGW Sales Enquiry</h1>
<form method="GET" action="/">
    <input type="hidden" name="action" value="processForm">

    <div class="form-group">
        <label for="exampleInputEmail1">Your name</label>
        <input class="form-control" name="customerName">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="customerEmail">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Your enquiry</label>
        <textarea class="form-control" name="enquiry" rows="3"></textarea>
    </div>

    <input type="submit" value="Submit enquiry" class="btn btn-success">
</form>
