<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--        <meta name="Title" content="{{$meta['title']}}" />--}}
        <meta name="Description" content="{{$meta['desc']}}"/>
        <meta name="keywords" content="{{$meta['keywords'] }}"/>
        <title>{{$meta['title']}}</title>
{{--        <base href="<?=URL::to('/')?>/" />--}}
        <script> var base='<?=URL::to('/')?>/';</script>
        <meta name="DC.identifier" content="https://elbyoot.com/" />
        <meta property="og:title" content="{{$meta['title']}}"/>
        <meta property="og:description" content="{{ $meta['desc']}}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://elbyoot.com/"/>
        <meta property="og:site_name" content="elbyoot"/>
        <meta property="og:image" content="./images/logo.png"/>
        <meta name="author" content="البيوت" />
        <meta name="Publisher" content="البيوت" />
        <link href=".<?php echo $_SERVER['REQUEST_URI'] ?>" rel="canonical" />
        <meta name="robots" content="index, follow"/>
        <meta name="Googlebot" content="index, follow"/>
        <meta name="FAST-WebCrawler" content="index, follow"/>
        <meta name="Scooter" content="index, follow"/>
        <meta name="GOOGLEBOT" content="NOODP"/>
        <meta name="allow-search" content="yes"/>
        <meta name="msnbot" content="INDEX, FOLLOW"/>
        <meta name="YahooSeeker" content="INDEX, FOLLOW"/>
        <meta name="rating" content="general" />
        <meta name="copyright" content=" البيوت أكبر سوق للعقارات فى مصر" />
        <meta name="Classification" content=" البيوت أكبر سوق للعقارات فى مصر" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/all.css">
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        <link rel="stylesheet" href="./css/style.css">


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
            <a class="nav-link" aria-current="page" href="https://www.shof3qar.com/news/"> المقالات </a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./companies/3kari"><i class="fa fa-briefcase"></i> للشركات </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.shof3qar.com/add-new/choose/"><i class="fa fa-plus-circle ps-1"></i> إضافة عقار</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.shof3qar.com/login/">
              <i class="fa fa-sign-in-alt ps-1"></i> تسجيل الدخول
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.shof3qar.com/register/"> <i class="fa fa-edit ps-1"></i> إنشاء حساب</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
