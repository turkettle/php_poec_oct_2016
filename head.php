<?php
  $path_from_app = isset($_GET['app']) ? '../../' : NULL;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php print $path_from_app; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php print $path_from_app; ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php print $path_from_app; ?>css/main.css">

    <script src="<?php print $path_from_app; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
