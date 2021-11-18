@include('header')
<?php
$row = $real[0];
//var_dump($row);
//exit();
//var_dump($row); exit();
global $_dir, $_masa3d, $_finish, $_b_age, $_type_s, $_type, $_purp_l, $_reg_in,$_hay,$_reg,$_moh, $_source,$_moh_en,$_hay_en,$_reg_en;
        $imgfolder= "https://www.tqsyet.com/uploads/";
?>
        @for ($i = 1; $i < 8; $i++)
             @if($row['image'.$i.'name'] == '')
                 @break
             @else
                 $add_img[] =  $imgfolder.$row['image'.$i.'name'];
             @endif
        @endfor

  <!-- Section search -->
  <div class="details pt-4">
    <div class="container">
      <div class="row" dir="rtl">
        <div class="col-md-8 col-sm-8 text-end">
          <h2>{{$row->title}}</h2>
          <div class="details" dir="rtl">
            <nav class="breadcrumbCreate" aria-label="breadcrumb" dir="ltr">
              <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item active" aria-current="page">القاهرة</li>
                <li class="breadcrumb-item"><a href="#"> عقارات بمصر</a></li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <h2 class="text-lg-start textPrice"><img src="images/price.png" alt="price" width="30" height="30"> EGP
              {{$row->price}}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-lg-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">

              @for ($i=1; $i<=8 ; $i++)
                  $add_img  = getImage($row['image'.$i.'name']);
              @endfor
              $add_img = array_unique($add_img);
              @for($i = 0; $i < count($add_img); $i++)
                  <div  data-slide-to="{{ $i }}" class="carousel-item heightDev
                    @if($i == 0)
                         active
                    @endif ">
                      <img src="{{$add_img[$i]}} " alt=" {{$row->title}} " class="img-fluid mx-auto d-block">
                  </div>
               @endfor
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- cards -->
  <div class="cards">
    <div class="container">
      <div class="row" dir="rtl">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <h5><i class="fa fa-bed"></i></h5>
                  <h6 class="mb-0">{{$row->roomnum}} غرف</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <h5><i class="fa fa-toilet"></i></h5>
                  <h6 class="mb-0">{{$row->bathnum}} حمامات</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <h5><i class="fa fa-chart-area"></i></h5>
                  <h6 class="mb-0">{{$row->area}} متر <sup>2</sup></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <h5><i class="fa fa-tag"></i></h5>
                  <h6 class="mb-0">{{$row->price}} السعر / م <sup>2</sup></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="descrBlockProp noTop">
                <h4 class="py-3"> تفاصيل الاعلان</h4>
              </div>
              <p>
                  {{$row->details}}
              </p>
              <ul class="list-group border-0 pe-0">
                <li class="list-group-item border-0 pe-0">التشطيب : {{$row->finish}}</li>
                <li class="list-group-item border-0 pe-0">النوع : {{$row->type}}</li>
                <li class="list-group-item border-0 pe-0">رقم الدور : {{$row->no_floar}}</li>
                <li class="list-group-item border-0 pe-0">تاريخ اضافه الاعلان : {{$row->date}}</li>
                <li class="list-group-item border-0 pe-0"> رقم الموبايل : {{$row->mobile}}</li>
              </ul>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr>

  <!-- Akar Good -->
  <div class="cardAkarDetails border-bottom pb-4">
    <div class="container" dir="rtl">
      <h4 class="text-center py-4">العقارات المميزة</h4>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card mb-3">
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
            <!-- <a href="#" class="heightDev">
              <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
            </a> -->
            <div class="card-body pb-0">
              <a href="#" class="text-decoration-none linkCard">
                <span class="textPrice fw-bold">891,080 EGP</span>
                <span class="badge bg-secondary float-start">البلاتينية</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا
                  <img src="images/company.jpeg" class="imgComapny" alt="comapny">
                </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
              </a>
              <div class="row d-none d-md-flex">
                <div class="col-sm-6 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-sm-6">
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
              <p class="text-start pt-2">آخر تحديث 04‏/04‏/2021</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card mb-3">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
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
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- <a href="#" class="heightDev">
              <img src="images/img1.jpg" class="img-fluid mx-auto d-block" alt="card-image">
            </a> -->
            <div class="card-body pb-0">
              <a href="#" class="text-decoration-none linkCard">
                <span class="textPrice fw-bold">891,080 EGP</span>
                <span class="badge bg-secondary float-start">البلاتينية</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا
                  <img src="images/last.jpg" class="imgComapny" alt="comapny">
                </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
              </a>
              <div class="row d-none d-md-flex">
                <div class="col-sm-6 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-sm-6">
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
              <p class="text-start pt-2">آخر تحديث 04‏/04‏/2021</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card mb-3">
            <a href="#" class="heightDev">
              <img src="images/bgsky.jpg" class="img-fluid mx-auto d-block" alt="card-image">
            </a>
            <div class="card-body pb-0">
              <a href="#" class="text-decoration-none linkCard">
                <span class="textPrice fw-bold">891,080 EGP</span>
                <span class="badge bg-secondary float-start">البلاتينية</span>
                <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  جنوب، كمبوندات العاصمة الإدارية </p>
                <p><i class="fa fa-home"></i> فيلا
                  <img src="images/company.jpeg" class="imgComapny" alt="comapny">
                </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> 3</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> 4</span>
                  <span><i class="fa fa-chart-area"></i> 371 متر<sup>2</sup></span>
                </p>
              </a>
              <div class="row d-none d-md-flex">
                <div class="col-sm-6 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i> إتصل</button>
                </div>
                <div class="col-sm-6">
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
              <p class="text-start pt-2">آخر تحديث 04‏/04‏/2021</p>
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

@include('footer')
