@include('header')
<?php
$row = $real[0];
//var_dump($row);
//exit();
$type=$row->type;
$imgfolder= "https://www.homz4sale.com/uploads/thumb/";
global $_dir, $_masa3d, $_finish, $_b_age, $_type_s, $_type, $_purp_l, $_reg_in,$_hay,
       $_reg,$_moh, $_source,$_moh_en,$_hay_en,$_reg_en ,$imgthumb  , $imglogo;

?>
  <!-- Section search -->
  <div class="details pt-4">
    <div class="container">
      <div class="row" dir="rtl">
        <div class="col-md-8 col-sm-8 text-end">
          <h1>{{$row->title}}</h1>
        </div>
        <div class="col-md-4 col-sm-4">
          <h2 class="text-lg-start textPrice"><img src="./public/images/price.png" alt="{{$row->title}}" width="30" height="30"> EGP
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
                <?php for ($i=1; $i<=8 ; $i++){
                    $img = "image".$i."name";
                    $im = $row->$img;
                    $add_img [] = app('App\Http\Controllers\Controllers')->getImage($im);
                }
                $add_img = array_unique($add_img);
                for($i = 0; $i < count($add_img); $i++){ ?>
                <div  data-slide-to="{{$i}}" class="carousel-item heightDev <?php if($i == 0){echo "active";} ?>">
                    <img src="{{$add_img[$i] }}" alt="{{$row->title}}" class="img-fluid mx-auto d-block">
                </div>
                <?php }?>
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
                  <i class="fa fa-bed"></i>
                  <h6 class="mb-0">{{$row->roomnum}} غرف</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <i class="fa fa-toilet"></i>
                  <h6 class="mb-0">{{$row->bathnum}} حمامات</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                  <i class="fa fa-chart-area"></i>
                  <h6 class="mb-0">{{$row->area}} متر <sup>2</sup></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="card bgCard mb-2">
                <div class="card-body py-2 text-center">
                    <i class="fa fa-tag"></i>
                    <h6 class="mb-0">{{$row->price}} السعر / م <sup>2</sup></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="descrBlockProp noTop">
                <h4 class="py-3"> التفاصيل :</h4>
              </div>
              <p>
                  {{strip_tags($row->details)}}
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
