@include('header')
<?php
$row = $real[0];
//var_dump($row);
//exit();
$type=$row->type;
$imgfolder= "https://www.shoqaq4sale.com/uploads/";
global $_dir, $_masa3d, $_finish, $_b_age, $_type_s, $_type, $_purp_l, $_reg_in,$_hay,$_reg,$_moh, $_source,$_moh_en,$_hay_en,$_reg_en;

?>
  <!-- Section search -->
  <div class="details pt-4">
    <div class="container">
      <div class="row" dir="rtl">
        <div class="col-md-8 col-sm-8 text-end">
          <h2>{{$row->title}}</h2>
{{--          <div class="details" dir="rtl">--}}
{{--            <nav class="breadcrumbCreate" aria-label="breadcrumb" dir="ltr">--}}
{{--              <ol class="breadcrumb justify-content-end">--}}
{{--                <li class="breadcrumb-item active" aria-current="page">القاهرة</li>--}}
{{--                <li class="breadcrumb-item"><a href="#"> عقارات بمصر</a></li>--}}
{{--              </ol>--}}
{{--            </nav>--}}
{{--          </div>--}}
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

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner newEditSlider">
                <div class="carousel-item active">
                    <img src={{$imgfolder.$row->image1name}} class="d-block mx-auto" alt="{{$row->title}}">
                </div>
                <div class="carousel-item">
                    <img src={{$imgfolder.$row->image2name}} class="d-block mx-auto" alt="{{$row->title}}">
                </div>
                <div class="carousel-item">
                    <img src={{$imgfolder.$row->image3name}} class="d-block mx-auto" alt="{{$row->title}}">
                </div>
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
{{--                <li class="list-group-item border-0 pe-0">التشطيب : {{$row->finish}}</li>--}}
                <li class="list-group-item border-0 pe-0">النوع : {{$_type_s[$type]}}</li>
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

@include('block')

@include('footer')
