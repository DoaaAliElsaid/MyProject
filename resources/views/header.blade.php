<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <base href="<?php  echo url('/'); ?>"  />
        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/all.css">
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        <link rel="stylesheet" href="./css/style.css">

        <title>موقعكم</title>
</head>

<body>

  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light px-3" dir="rtl">
      <a class="navbar-brand" href="./"><img src="./images/logo.png" alt="imageLogo" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-align-justify text-white">
        </span>
      </button>
      <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="search.html"> المقالات </a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="search.html"><i class="fa fa-briefcase"></i> للشركات </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="announcement.blade.php"><i class="fa fa-plus-circle ps-1"></i> إضافة عقار</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-sign-in-alt ps-1"></i> تسجيل الدخول
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-announcement.html"> <i class="fa fa-edit ps-1"></i> إنشاء حساب</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
