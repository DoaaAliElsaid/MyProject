<?php
global $_type_s_en , $_purp_l_en ,
       $_type_s , $_purp_l , $_reg_in , $_hay,$_reg ,$_moh,
       $_type , $_hay_b , $_hay_in  ,$imgthumb  , $imglogo;
//$u = json_encode($units);
//$u = json_Decode($u);
?>
<div class="col-md-7">
    <h1 class="text-end pb-2"> {{$title}} </h1>
{{--    <p class="text-end">{{$u->total}} عقار </p>--}}
</div>
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
                    ?>
                  <div class="card cardDetails mb-2" dir="rtl">
                      <div class="row g-0">
                          <div class="col-md-4">
{{--                              <div id="carouselExa" class="carousel slide" data-bs-ride="carousel">--}}
{{--                                  <div class="carousel-inner">--}}
                                      <div class="carousel-item heightDev active">
                                          <a href="./realestate/{{$row->unit_id}}" class="heightDev">
                                              <img src="{{$img}}" class="img-fluid mx-auto d-block" alt="{{$row->title}}">
                                          </a>
                                      </div>
{{--                                  </div>--}}
{{--                              </div>--}}
                          </div>
                            <?php
                                $typ = $row->type;
                                $purp = $row->purp;
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
                                $term = $_type[$typ]." ".$_purp_l[$purp]." ".$_hay_b[$h1];
                                $term2 = $_type_s[$typ]." ".$_purp_l[$purp]." ".$_hay_in[$h1];
                                $Allterm =  $term.' - '.$term2;
                                $Edit =  str_replace($Allterm,'',$row->details);
                                if (strlen($Edit) <= 200){
                                    $row->details = strip_tags($Edit);
                                }else{
                                    $row->details =  strip_tags(substr($Edit,0, strpos($Edit, ' ', 135)));
                                }if(! $Edit){
                                    $row->details =  app('App\Http\Controllers\Controllers')->ReplacePhones(strip_tags($row->details),0,50);
                                }
                            ?>
                          <div class="col-md-6">
                              <div class="card-body contentCard">
                                  <a href="./realestate/{{$row->unit_id}}" class="text-decoration-none linkCard">
                                      <h2 title="{{$row->title}}" class="card-text fw-bold" style="height: 25px;color: black;">
                                          {{strip_tags(substr($row->title,0,50))}}
                                      </h2>
                                      @if((new \Jenssegers\Agent\Agent())->isMobile())
                                          <br>
                                      @endif
                                      <p title="{{$row->details}}" class="card-text" style="height: 25px;">
{{--                                          {{substr($row->details, 0, 150)}}...--}}
                                          {{$row->details}}...
                                      </p>
                                      @if((new \Jenssegers\Agent\Agent())->isMobile())
                                          <br>
                                      @endif
                                      <span class="text-danger fw-bold">   جنيه {{$row->price}}</span>
                                      <p class="card-text pt-2"> <i class="fa fa-map-marker"></i>  {{$_type_s[$typ]}} {{$_reg[$r1]}},{{$_hay[$h1]}},{{$_moh[$m1]}}  </p>
{{--                                      <p><i class="fa fa-home"></i> {{$_type_s[$typ]}} </p>--}}
                                      <p class="text-center">
                                          <span> <i class="fa fa-bed"></i> {{$row->roomnum}}</span>
                                          <span class="px-3"><i class="fa fa-toilet"></i>{{$row->bathnum}}</span>
                                          <span><i class="fa fa-chart-area"></i>{{$row->area}} متر<sup>2</sup></span>
                                      </p>
{{--                                      <p class="text-muted"> آخر تحديث {{$row->date}} </p>--}}
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="p-2">
                                  <p class="text-center">
                                      <span class="badge bg-secondary justify-content-center">elbyoot</span>
                                  </p>
                                  <img src="./public/images/logo.png" class="imgCompany mx-auto d-block" alt="{{$row->title}}">
                                  @if((new \Jenssegers\Agent\Agent())->isDesktop())
                                      <div class="row d-none d-md-block">
                                          <div class="col-12 pb-2">
                                              <button class="btn btnCard w-100" id="{{$row->unit_id}}" onclick="show_phone('{{$row->unit_id}}' , '{{$row->mobile}}')"><i class="fa fa-phone"></i> إتصل</button>
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
                              </div>
                          </div>

                      </div>
                  </div>
              @endforeach
          @endif
          <div class="d-flex">
              <div class="mx-auto">
{{--                  {{$units->onEachSide(1)->links()}}--}}
              </div>
          </div>
      </div>
    </div>
  </div>


