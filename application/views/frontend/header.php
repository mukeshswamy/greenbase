<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/bootstrap.min.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/style.css') ?>>
    <script src=<?php echo base_url('assets/js/jquery.min.js'); ?>></script>
    <title>GreenBase | Home</title>
</head>

<body>
    <div class="fulloverlay" id="fulloverlay"></div>
    <header class="main-header">
        <div class="container-fluid container-header">
            <div class="row header-row">
                <div class="col-md-2 cus-col-md-2 paddingnull">
                    <a href=<?php echo base_url(); ?>><img src=<?php echo base_url('assets/images/logo.svg'); ?> alt="logo" class="logo"></a>
                </div>
                <div class="col-md-10 flex-col">
                    <ul class="main-nav-ul">
                        <li><a href="<?php echo base_url(); ?>aboutus">ABOUT US</a></li>
                        <li><a href="<?php echo base_url(); ?>whyus">WHY US</a></li>
                        <li><a href="<?php echo base_url(); ?>location" id="do">OUR LOCATION</a></li>
                        <li><a href="<?php echo base_url(); ?>clients">OUR CLIENTS</a></li>
                        <li><a href="<?php echo base_url(); ?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url(); ?>gallery">GALLERY</a></li>
                        <li><a href="<?php echo base_url(); ?>blogs">BLOGS</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="col-md-10 cus-col10 mobile-header">
                    <img id="burger" src=<?php echo base_url('assets/images/burger.svg'); ?> alt="burger">
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="<?php echo base_url(); ?>aboutus">ABOUT US</a>
                    <a href="<?php echo base_url(); ?>whyus">WHY US</a>
                    <a href="<?php echo base_url(); ?>location" id="do">OUR LOCATION</a>
                    <a href="<?php echo base_url(); ?>clients">OUR CLIENTS</a>
                    <a href="<?php echo base_url(); ?>news">NEWS</a>
                    <a href="<?php echo base_url(); ?>gallery">GALLERY</a>
                    <a href="<?php echo base_url(); ?>blogs">BLOGS</a>
                    <a href="<?php echo base_url(); ?>contact">CONTACT US</a>
                </div>
            </div>
        </div>
    </header>