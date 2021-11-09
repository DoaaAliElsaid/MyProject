 <!-- Akar Good -->
  <div class="cardAkarDetails border-bottom pb-4">
    <div class="container" dir="rtl">
      <h4 class="text-center py-4">العقارات المميزة</h4>
      <div class="row">
            <?php global $_type , $_purp_l , $_type_s , $_hay ,$_hay_en ,$_reg , $_reg_en,$_moh ;?>
          @if(!empty($units))
              @foreach($units as $row)


         <div class="col-lg-4 col-md-6">
          <div class="card mb-3">
              <a href="#" class="heightDev">
              <img src="https://www.tqsyet.com/uploads/{{$row->image1name}}" class="img-fluid mx-auto d-block" alt="card-image">
            </a>
            <div class="card-body pb-0">
              <a href="./realestate/{{$row->unit_id}}" class="text-decoration-none linkCard">
                  <p title={{$row->title}} class="card-text pt-2 fw-bold">
                        {{$row->title}}
                  </p>
                <span class="textPrice fw-bold">   جنيه {{$row->price}}</span>
                <!--<span class="badge bg-secondary float-start">البلاتينية</span>-->
                <!--<p class="card-text pt-2"> <i class="fa fa-map-marker"></i> {{$row->region_code , $row->ahyaacode , $row->mohafzacode}} </p>
                <p><i class="fa fa-home"></i> {{$row->type}}-->
                  <!--<img src="images/company.jpeg" class="imgComapny" alt="comapny">-->
                </p>
                <p class="text-center">
                  <span> <i class="fa fa-bed"></i> {{$row->roomnum}}</span>
                  <span class="px-3"><i class="fa fa-toilet"></i> {{$row->bathnum}}</span>
                  <span><i class="fa fa-chart-area"></i> {{$row->area}} متر<sup>2</sup></span>
                </p>
              </a>
              <div class="row d-none d-md-flex">
                <div class="col-sm-6 pb-2">
                  <button class="btn btnCard w-100" onclick="{{$row->mobile}}"><i class="fa fa-phone"></i> {{$row->mobile}}</button>
                </div>
                <div class="col-sm-6">
                  <a class="btn btnCard px-1 w-100" href="./realestate/{{$row->unit_id}}" title="تفاصيل الاعلان"><i class="fas fa-info-circle"></i> تفاصيل الاعلان</a>
                </div>
              </div>
              <div class="row d-sm-none">
                <div class="col-4">
                  <button class="btn btn-success px-1 w-100" ><i class="fab fa-whatsapp"></i></button>
                </div>
                <div class="col-4 pb-2">
                  <button class="btn btnCard w-100"><i class="fa fa-phone"></i></button>
                </div>
                <div class="col-4">
                    <a class="btn btnCard px-1 w-100" href="./realestate/{{$row->unit_id}}" title="تفاصيل الاعلان"><i class="fas fa-info-circle"></i> تفاصيل الاعلان</a>
                </div>
              </div>
              <p class="text-start pt-2">آخر تحديث {{$row->date}}</p>
            </div>
          </div>
        </div>
              @endforeach
          @endif

      </div>
    </div>
  </div>


