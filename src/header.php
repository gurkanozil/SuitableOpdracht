<?php
$menu = json_decode(file_get_contents(__DIR__ . '/data/menu.json'), true);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title><?php echo isset($title) ? $title : 'Home'; ?></title>
    <style>body{background:#f0f0f0; /* achtergrond licht grijs */}</style> 
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container"> 