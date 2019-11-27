<!DOCTYPE html>
<html lang="es">

<head>
    <title>Secretaría Administrativa - FISC</title>
    <meta charset="utf-8">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/css/dashboard.css" rel="stylesheet">
</head>

<body>
<header>
    <?php require_once('MenuSA.php'); ?>
</header>
<div class="container-fluid">
    <div class="row">
        <?php require_once('routes.php'); ?>
    </div>
</div>

</body>

</html>