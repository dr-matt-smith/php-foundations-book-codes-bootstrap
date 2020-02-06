<!doctype html>
<html><head>
    <title>MGW - equiry form</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >
</head>

<body class="container">
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="/index.php">home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/index.php?action=contact">contact details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/index.php?action=enquiryForm">submit an enquiry</a>
    </li>
</ul>

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
