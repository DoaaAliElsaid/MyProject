<?php
global $_type_s_en , $_purp_l_en ,  $_dir , $_masa3d , $_finish , $_b_age  , $_reg_in  ;
global   $_hay_en, $_type_s, $_purp_l, $_hay,$_reg , $_reg_en,$_moh ,$imgthumb  , $imglogo;

?>
<!-- Akar Good -->
  <div class="cardAkarDetails border-bottom pb-4">
    <div class="container" dir="rtl">
      <div class="row">

          @if(!empty($units))
              @foreach($units as $row)
                  <?php
                  $img = $imgthumb . $row->image1name;
                  if(@getimagesize($img)&& ! empty($img)){
                      $img = $img;
                  }else{
                      $img = $imglogo;
                  }
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
                  }//echo "r1 ".$r1." h1 ".$h1." m1 ".$m1;exit();
                  ?>
         <div class="col-lg-4 col-md-6">
          <div class="card mb-3">
              <a href="./realestate/{{$row->unit_id}}" class="heightDev" style="position: relative;">
                  <img src="{{$img}}" class="img-fluid" alt="{{$row->title}}">
              </a>
            <div class="card-body pb-0">
              <a href="./realestate/{{$row->unit_id}}" class="text-decoration-none linkCard">
                  <p title="{{$row->title}}" class="card-text fw-bold" style="height: 25px;">
                        {{$row->title}}
                  </p>
                <span class="textPrice fw-bold">   جنيه {{$row->price}}</span>
                <span class="badge bg-secondary float-start">elbyoot</span>
                  <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>   @if($r1 != 0){{$_reg[$r1]}}@endif,{{$_hay[$h1]}},{{$_moh[$m1]}}  </p>
                  <p><i class="fa fa-home"></i> {{$_type_s[$typ]}} </p>
                  <img src="./public/images/logo.png" class="imgComapny" alt="comapny">
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> {{$row->roomnum}}</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> {{$row->bathnum}}</span>
                  <span><i class="fa fa-chart-area"></i> {{$row->area}} متر<sup>2</sup></span>
                </p>
              </a>
                @if((new \Jenssegers\Agent\Agent())->isDesktop())
                     <div class="row d-none d-md-flex">
                        <div class="col-sm-6 pb-2">
                          <button class="btn btnCard w-100" id="{{$row->unit_id}}" onclick="show_phone('{{$row->unit_id}}' , '{{$row->mobile}}')"><i class="fa fa-phone"></i>اتصل</button>
                        </div>
                        <div class="col-sm-6">
                          <a class="btn btnCard px-1 w-100" href="./realestate/{{$row->unit_id}}" title="تفاصيل الاعلان"><i class="fas fa-info-circle"></i> تفاصيل الاعلان</a>
                        </div>
                     </div>
                @else
                      <div class="row d-sm-none">
                            <div class="col-4">
                                <a class="btn btn-success px-1 w-100" href="https://api.whatsapp.com/send?phone=2{{$row->video_img}}"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="col-4 pb-2">
                                <button class="btn btnCard w-100" id="{{$row->unit_id}}" onClick="show_phone2('{{$row->unit_id}}', '{{$row->mobile}}');"><i class="fa fa-phone"></i></button>
                            </div>
                            <div class="col-4">
                                 <a class="btn btnCard px-1 w-100" href="./realestate/{{$row->unit_id}}" title="تفاصيل الاعلان"><i class="fas fa-info-circle"></i> تفاصيل الاعلان</a>
                            </div>
                      </div>
                @endif
              <p class="text-start pt-2">آخر تحديث {{$row->date}}</p>
            </div>
          </div>
        </div>
              @endforeach
          @endif

      </div>
    </div>
  </div>


