<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <h2>Application Submitted Successfully!</h2>

    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Address:</strong> <?= $address ?></p>

    <a href="form.html" class="back-btn">Submit Another</a>
</div>
</body>
</html>