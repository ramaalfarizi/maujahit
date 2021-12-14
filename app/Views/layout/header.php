<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="flex-shrink-0">
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">MAUJAHIT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/about') ?>">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Price</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                        <li class="dropdown">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Yuk Masuk!
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Register</a></li>
                                <li><a class="dropdown-item" href="#">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>