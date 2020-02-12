<!doctype html>
<html><head>
    <title>MGW - form errors</title>
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

<h1>Errors in data for enquiry form</h1>

<div class="alert alert-danger" role="alert">
    Sorry, there was a problem with your form submission:

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
