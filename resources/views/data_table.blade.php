<?php
global $_type_s_en , $_purp_l_en ,  $_dir , $_masa3d , $_finish , $_b_age , $_type_s , $_purp_l , $_reg_in  ;
global $_purp_l_en, $_type_s_en, $_hay_en, $_type_s, $_purp_l, $_hay,$_reg , $_reg_en,$_moh;
//print_r($units);
//exit();
?>
<!-- Akar Good -->
  <div class="cardAkarDetails border-bottom pb-4">
    <div class="container" dir="rtl">
      <div class="row">

          @if(!empty($units))
              @foreach($units as $row)

                  <div class="card cardDetails mb-2" dir="rtl">
                      <div class="row g-0">
                          <div class="col-md-4">
                              <div id="carouselExa" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                      <div class="carousel-item heightDev active">
                                          <a href="./realestate/{{$row->unit_id}}" class="heightDev">
                                              <img src="https://www.shoqaq4sale.com/uploads/{{$row->image1name}}" class="img-fluid mx-auto d-block" alt="{{$row->title}}">
                                          </a>
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

                            <?php
                                $typ = $row->type;
                                if(isset($row->region_code))
                                {
                                    $r1= $row->region_code;
                                }
                                if(isset($row->ahyaacode))
                                {
                                  $h1= $row->ahyaacode;
                                }
                                if(isset($row->mohafzacode))
                                {
                                    $m1= $row->mohafzacode;
                                }
                            ?>
                          <div class="col-md-6">
                              <div class="card-body contentCard">
                                  <a href="./realestate/{{$row->unit_id}}" class="text-decoration-none linkCard">
                                      <p title="{{$row->title}}" class="card-text fw-bold" style="height: 25px;">
                                          {{$row->title}}
                                      </p>
                                      <span class="text-danger fw-bold">   جنيه {{$row->price}}</span>
                                      <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  {{$_reg[$r1]}},{{$_hay[$h1]}},{{$_moh[$m1]}}  </p>
                                      <p><i class="fa fa-home"></i> {{$_type_s[$typ]}} </p>
                                      <p class="text-center">
                                          <span> <i class="fa fa-bed"></i> {{$row->roomnum}}</span>
                                          <span class="px-3"><i class="fa fa-toilet"></i>{{$row->bathnum}}</span>
                                          <span><i class="fa fa-chart-area"></i>{{$row->area}} متر<sup>2</sup></span>
                                      </p>
                                      <p class="text-muted"> آخر تحديث {{$row->date}} </p>
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="p-2">
                                  <p class="text-center">
                                      <span class="badge bg-secondary justify-content-center">only4eve</span>
                                  </p>
                                  <img src="images/logo.png" class="imgCompany mx-auto d-block" alt="img">
                                  @if((new \Jenssegers\Agent\Agent())->isDesktop())
                                      <div class="row d-none d-md-block">
                                          <div class="col-12 pb-2">
                                              <button class="btn btnCard w-100" id="{{$row->unit_id}}" onclick="show_phone('{{$row->unit_id}}' , '{{$row->mobile}}')"><i class="fa fa-phone"></i> إتصل</button>
                                          </div>
    {{--                                      <div class="col-12">--}}
    {{--                                          <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i> البريد الإلكتروني</button>--}}
    {{--                                      </div>--}}
                                      </div>
                                  @else
                                      <div class="row d-sm-none">
                                          <div class="col-4">
                                              <a class="btn btn-success px-1 w-100" href="https://api.whatsapp.com/send?phone=2{{$row->video_img}}"><i class="fab fa-whatsapp"></i></a>
{{--                                              <button class="btn btn-success px-1 w-100" href="https://api.whatsapp.com/send?phone=2{{$row->video_img}}"><i class="fab fa-whatsapp"></i></button>--}}
                                          </div>
                                          <div class="col-4 pb-2">
                                              <button class="btn btnCard w-100" id="{{$row->unit_id}}" onClick="show_phone2('{{$row->unit_id}}', '{{$row->mobile}}');"><i class="fa fa-phone"></i></button>
                                          </div>
    {{--                                      <div class="col-4">--}}
    {{--                                          <button class="btn btnCard px-1 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-envelope"></i></button>--}}
    {{--                                      </div>--}}
                                      </div>
                                  @endif
                              </div>
                          </div>

                      </div>
                  </div>

              @endforeach
          @endif
          <div class="d-flex">
              <div class="mx-auto">
                  {{$units->links()}}
              </div>
          </div>
      </div>
    </div>
  </div>


