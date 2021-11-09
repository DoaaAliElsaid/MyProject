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
  <title> نبذة عنا </title>
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light px-3" dir="rtl">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="imageLogo" class="img-fluid"></a>
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

  <!-- first section -->
  <div class="search">
    <div class="overlay">
      <div class="container-fluid p-0">
        <div class="text-white pt-4 aboutUs boxSearch">
          <h2 class="text-center fw-bold pt-5 pb-3">نبذة عنا</h2>
          <nav class="breadcrumbCreate pb-4" aria-label="breadcrumb" dir="ltr">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item active" aria-current="page">القاهرة</li>
              <li class="breadcrumb-item"><a href="index.html"> الصفحة الرئيسية</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center pt-3">
    <h2>مرحبا بكم في إسكان.كوم</h2>
    <p>المنزل الجديد للعقارات في مصر</p>
    <p class="py-4">
      إسكان.كوم يوفر لك بيانات رائدة لمساعدتك في العثور على العقارات في جميع أنحاء مصر مما يجعلها سهلة ومريحة قدر الإمكان. تواصل مع أفضل المحترفين المحليين وتصفح مجموعتنا الواسعة من القوائم التجارية والسكنية. يمكنك استئجار ، أو شراء جميع أنواع العقارات ؛ من التطورات الجديدة لإعادة البيع ، وكل شيء بينهما. سنساعدك حتى على بيع ممتلكاتك. في إسكان.كوم، نحن مصممون على تبسيط العملية ، مع تزويدك بكل ما تقدمه الصناعة.
    </p>
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
