<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <title>بحث</title>
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light px-3" dir="rtl">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="imageLogo" class="img-fluid"></a>
      <p class="text-center advanced text-light pt-2 ps-2  d-lg-none"> <i class="fa fa-angle-down"></i> بحث متقدم</p>
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
          <li class="nav-item d-none d-lg-block">
            <!-- <a class="nav-link" aria-current="page" href="search.html"><i class="fa fa-briefcase"></i> للشركات </a> -->
            <p class="text-center advanced text-light pt-2 ps-2"> <i class="fa fa-angle-down"></i> بحث متقدم</p>
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
    <div class="collpaseSearch">
      <div class="container">
        <form action="#" class="formFilter2 pb-3">
          <div class="input-group mb-3">
            <span class="input-group-text p-0">
              <button class="btn btn-primary px-4">بحث</button>
            </span>
            <input type="text" required placeholder="إسم المدينة أو المنتجع أو الشارع" class="form-control text-end" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">
              <i class="fa fa-search"></i>
            </span>
          </div>
          <div class="row" dir="rtl">
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected>إختر الفئة</option>
                <option value="1">تجاري</option>
                <option value="2">سكني</option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected>إختر النوع</option>
                <option value="1">مكتب</option>
                <option value="2">مستودع</option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected> الحد الأدني للغرف </option>
                <option value="1">استوديو</option>
                <option value="2">1 غرف </option>
                <option value="3">2 غرف </option>
                <option value="4">3 غرف </option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected> الحد الأقصي للغرف </option>
                <option value="1">استوديو</option>
                <option value="2">1 غرف </option>
                <option value="3">2 غرف </option>
                <option value="4">3 غرف </option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected> كل العقار </option>
                <option value="1">مباشرة من المالك</option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected> حدد مدة الإيجار </option>
                <option value="1"> قصيرة المدة </option>
                <option value="2"> طويلة المدة </option>
              </select>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <input type="text" class="form-control" placeholder="السعر الأدني">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <input type="text" class="form-control" placeholder="السعر الأقصي">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 pt-2">
              <select class="form-select">
                <option selected> إختر الفرش </option>
                <option value="1"> مفروشة بالكامل  </option>
                <option value="2"> نصف مفروشة </option>
                <option value="3"> غير مفروشة </option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>


  <!-- Section Result -->
  <div class="resultSearch py-4">
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-md-7">
          <h5 class="text-end pb-2"> عقارات للبيع في مصر</h5>
          <p class="text-end">136564 عقارات</p>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <select class="form-select mb-2">
                <option selected>10</option>
                <option value="1">25</option>
                <option value="2">50</option>
                <option value="3">100</option>
              </select>
            </div>
            <div class="col-lg-8 col-md-6">
              <select class="form-select mb-3">
                <option selected>الأكثر شهرة</option>
                <option value="1">الأقدم</option>
                <option value="2">الأحدث</option>
                <option value="3">السعر المنخفض</option>
                <option value="3">السعر المرتفع</option>
              </select>
            </div>
          </div>
        </div>
      </div>


      <div class="card cardDetails mb-2" dir="rtl">
        <div class="row g-0">
          <div class="col-md-4">
            <div id="carouselExa" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item heightDev active">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/background2.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExa" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExa" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>


		  <div class="col-md-6">
            <div class="card-body contentCard">
              <a href="details.html" class="text-decoration-none linkCard">
                <span class="text-danger fw-bold">891,080 EGP</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
                <p class="text-muted"> آخر تحديث 22/4/2021 </p>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2">
              <p class="text-center">
                <span class="badge bg-secondary justify-content-center">البلاتينية</span>
              </p>
              <img src="images/company.jpeg" class="imgCompany mx-auto d-block" alt="img">
              <div class="row d-none d-md-block">
                <div class="col-12 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-12">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i> البريد الإلكتروني</button>
                </div>
              </div>
              <div class="row d-sm-none">
                <div class="col-4">
                  <button class="btn btn-success px-1 w-100"><i class="fab fa-whatsapp"></i></button>
                </div>
                <div class="col-4 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i></button>
                </div>
                <div class="col-4">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i></button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="card cardDetails mb-2" dir="rtl">
        <div class="row g-0">
          <div class="col-md-4">
            <div id="carouselEx" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item heightDev active">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/background2.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselEx" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselEx" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body contentCard">
              <a href="details.html" class="text-decoration-none linkCard">
                <span class="text-danger fw-bold">891,080 EGP</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
                <p class="text-muted"> آخر تحديث 22/4/2021 </p>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2">
              <p class="text-center">
                <span class="badge bg-secondary justify-content-center">البلاتينية</span>
              </p>
              <img src="images/company.jpeg" class="imgCompany mx-auto d-block" alt="img">
              <div class="row d-none d-md-block">
                <div class="col-12 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-12">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i> البريد الإلكتروني</button>
                </div>
              </div>
              <div class="row d-sm-none">
                <div class="col-4">
                  <button class="btn btn-success px-1 w-100"><i class="fab fa-whatsapp"></i></button>
                </div>
                <div class="col-4 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i></button>
                </div>
                <div class="col-4">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card cardDetails mb-2" dir="rtl">
        <div class="row g-0">
          <div class="col-md-4">
            <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item heightDev active">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/background2.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body contentCard">
              <a href="details.html" class="text-decoration-none linkCard">
                <span class="text-danger fw-bold">891,080 EGP</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
                <p class="text-muted"> آخر تحديث 22/4/2021 </p>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2">
              <p class="text-center">
                <span class="badge bg-secondary justify-content-center">البلاتينية</span>
              </p>
              <img src="images/company.jpeg" class="imgCompany mx-auto d-block" alt="img">
              <div class="row d-none d-md-block">
                <div class="col-12 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-12">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i> البريد الإلكتروني</button>
                </div>
              </div>
              <div class="row d-sm-none">
                <div class="col-4">
                  <button class="btn btn-success px-1 w-100"><i class="fab fa-whatsapp"></i></button>
                </div>
                <div class="col-4 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i></button>
                </div>
                <div class="col-4">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card cardDetails mb-2" dir="rtl">
        <div class="row g-0">
          <div class="col-md-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item heightDev active">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/background2.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
                <div class="carousel-item heightDev">
                  <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body contentCard">
              <a href="details.html" class="text-decoration-none linkCard">
                <span class="text-danger fw-bold">891,080 EGP</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
                <p class="text-muted"> آخر تحديث 22/4/2021 </p>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="p-2">
              <p class="text-center">
                <span class="badge bg-secondary justify-content-center">البلاتينية</span>
              </p>
              <img src="images/company.jpeg" class="imgCompany mx-auto d-block" alt="img">
              <div class="row d-none d-md-block">
                <div class="col-12 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-12">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i> البريد الإلكتروني</button>
                </div>
              </div>
              <div class="row d-sm-none">
                <div class="col-4">
                  <button class="btn btn-success px-1 w-100"><i class="fab fa-whatsapp"></i></button>
                </div>
                <div class="col-4 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i></button>
                </div>
                <div class="col-4">
                  <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i></button>
                </div>
              </div>
            </div>
            <!-- Modal Contact -->
            <div class="modal fade modalContact" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                      إرسال بريد إلكتروني إلى المدير
                    </h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="card">
                      <div class="card-body">
                        <form action="#">
                          <div class="mb-3">
                            <label for="fName" class="form-label"> الإسم * </label>
                            <input type="text" class="form-control" id="fName" placeholder="" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني * </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                          </div>
                          <div class="mb-3">
                            <label for="telephone" class="form-label"> رقم الهاتف </label>
                            <input type="tel" class="form-control" id="telephone" placeholder="+2 01114205243">
                          </div>
                          <div class="text-end" dir="rtl">
                            <label for="floatingTextarea2">نص الرسالة *</label>
                            <textarea class="form-control mt-2" placeholder="مرحباً ، أود الاستفسار عن عقارك على Isqan.com برقم مرجعي: IQ-NEWCAPITAL-JNOUB" id="floatingTextarea2" required></textarea>
                          </div>
                          <button class="btn btnCard w-100 px-5 mt-3" type="submit">إرسال</button>
                          <!-- <p class="pt-3"><small>بالضغط على "للإتصال" انكم توافقون على سياسة حماية البيانات الشخصية</small></p> -->
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example" dir="rtl">
        <ul class="pagination justify-content-center mt-4 pe-0">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- Footer -->
  <footer dir="rtl" class="bg-dark footer py-4 text-center">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-lg-4">
          <h3 class="pb-3">اتصل بنا</h3>
          <p>32 البنفسج ، التجمع الأول القاهرة الجديدة ، القاهرة ، مصر</p>
          <p><a href="mailto:info@isqan.com">info@isqan.com</a></p>
          <p><button class="btn bg-dark border-0 text-white" data-bs-toggle="modal" data-bs-target="#contactUs"> اتصل بنا </button></p>
          <!-- Modal Contact Us -->
          <div class="modal fade modalContact" id="contactUs" tabindex="-1" aria-labelledby="contactUsLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header border-0">
                  <h5 class="modal-title" id="exampleModalLabel">
                    إتصل بنا
                  </h5>
                  <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-end" dir="rtl">
                  <div class="card">
                    <div class="card-body">
                      <form action="#">
                        <div class="mb-3">
                          <label for="fName" class="form-label"> الإسم * </label>
                          <input type="text" class="form-control" id="fName" placeholder="" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني * </label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="mb-3">
                          <label for="telephone" class="form-label"> رقم الهاتف </label>
                          <input type="tel" class="form-control" id="telephone" placeholder="+2 01114205243">
                        </div>
                        <div class="mb-3">
                          <label for="material" class="form-label"> المادة * </label>
                          <input type="email" class="form-control" id="material" placeholder="" required>
                        </div>
                        <div class="text-end" dir="rtl">
                          <label for="floatingTextarea2">نص الرسالة *</label>
                          <textarea class="form-control mt-2" placeholder="مرحباً ، أود الاستفسار عن عقارك على Isqan.com برقم مرجعي: IQ-NEWCAPITAL-JNOUB" id="floatingTextarea2" required></textarea>
                        </div>
                        <button class="btn btnCard w-100 px-5 mt-3" type="submit">إرسال</button>
                        <!-- <p class="pt-3"><small>بالضغط على "للإتصال" انكم توافقون على سياسة حماية البيانات الشخصية</small></p> -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </p>
        </div>
        <div class="col-lg-4">
          <h3 class="pb-3">روابط مفيدة</h3>
          <p><a href="contact-us.html">نبذة عنا</a></p>
          <p><a href="#">سياسة الخصوصية</a></p>
          <p><a href="#">الشروط والأحكام</a></p>
          <p><a href="#">المقالات</a></p>
        </div>
        <div class="col-lg-4">
          <h3 class="pb-3">اشترك</h3>
          <p>الاشتراك لرسالتنا الإخبارية</p>
          <form action="#">
            <input type="email" required placeholder="البريد الإلكتروني" class="form-control mb-2">
            <button type="submit" class="btn btn-primary w-100 mb-2">إشترك</button>
          </form>
        </div>
      </div>
      <p class="text-center pt-2 pb-0">© 2021 Isqan LLC.</p>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/file.js"></script>
</body>

</html>
