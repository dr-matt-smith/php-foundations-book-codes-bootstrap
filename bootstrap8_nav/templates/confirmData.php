<!doctype html>
<html><head>
    <title>MGW - confirmed enquiry</title>
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

<h1>Enquiry received</h1>
<p>
Thanks your for your enquiry - we aim to respond within 2 working days.
<p>Data received:

<div class="form-group">
    <label for="exampleInputEmail1">Your name</label>
    <input class="form-control" value="<?= $customerName ?>" readonly>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input class="form-control" value="<?= $customerEmail ?>" readonly>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Your enquiry</label>
    <textarea class="form-control" rows="3" readonly><?= $enquiry ?></textarea>
</div>
