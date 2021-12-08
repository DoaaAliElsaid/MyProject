@include('header')
  <!-- Section Result -->
  <div class="resultSearch py-4">
    <div class="container" dir="rtl">
        <a href="/">عقارات مصر</a>
        <?php
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s  , $_purp_l , $_type_en , $_purp_en ,$_reg ,$_hay ,$_moh;
        if(strpos($_SERVER['REQUEST_URI'],'allrent')== true){
        $purp_ar="للايجار ";$purp_en="allrent";
        }
        elseif(strpos($_SERVER['REQUEST_URI'],'allsale')== true){
        $purp_ar="للبيع ";$purp_en="allsale";
        }
        if(strpos($_SERVER['REQUEST_URI'],'Allrealestate')== true){
        $type_ar="عقارات";$type_en="Allrealestate";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Allapartments')== true){
        $type_ar="شقق وعقارات ";$type_en="Allapartments";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Allvillas')== true){
        $type_ar="فيلات وعقارات ";$type_en="Allvillas";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Alllands')== true){
        $type_ar="اراضى للبناء ";$type_en="Alllands";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Allshops')== true){
        $type_ar="محلات وعقارات تجارية ";$type_en="Allshops";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Alloffices')== true){
        $type_ar="مكاتب و مقرات ادارية ";$type_en="Alloffices";
        }elseif(strpos($_SERVER['REQUEST_URI'],'Allchalet')== true){
        $type_ar="شاليهات و عقارات ساحلية ";$type_en="Allchalet";
        }
        if(isset($type_en) && isset($purp_en)){ ?>
        >
            <a href="./<?=$purp_en."/".$type_en."/"?>" > {{ $type_ar." ".$purp_ar}}</a>
       <?php  } ?>
        @include('data_table')
    </div>
  </div>

@include('footer')
