<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ashot Kartalyan">
    <title>Ashot Kartalyan</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <?php echo $__env->yieldContent('additional-css'); ?>
    
</head>

<body>
    <!-- Navbar -->
    <header style="background-image: url(<?php echo e(asset('images/header.jpg')); ?>)">
        <?php echo $__env->yieldContent('header'); ?>
    </header>

    <!-- Body Content -->
    <?php echo $__env->yieldContent('body'); ?>

    <!--Source Javascript scripts-->
    <!-- Load jQuery, Google Analytics, and Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>

    <?php echo $__env->yieldContent('additional-js'); ?>
</body>

</html>