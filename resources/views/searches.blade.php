@include('header')
  <!-- Section Result -->
  <div class="resultSearch py-4">
    <div class="container" dir="rtl">
        <?php
        global $_moh_b, $_type, $_type_s ,$_type_en,$_purp_en, $_purp_l , $_purp_l , $_moh ,$_moh_in ,$_hay ,$_hay_in,$_reg_in, $_reg , $_reg_b , $_reg_en , $_hay_en  , $_moh_en;
//        $u = json_encode($units);
//        $u = json_Decode($u);
        if(isset($config['purp'])){
            $p = $config['purp'] ;
            $title =' '. $_purp_l[$p];
        }else{
            $title = " للبيع ";
        }
        if(isset($config['reg'])){
            $r = $config['reg'] ;
            $title .=' فى '. $_reg[$r];
        }elseif(isset($config['hay'])){
            $h = $config['hay'] ;
            $title .=' فى '. $_hay[$h];
        }elseif(isset($config['moh'])){
            $m = $config['moh'] ;
            $title .=' فى '. $_moh[$m];
        }else{
            $title .=' فى مصر  ';
        }
//        if(isset($u)){
//            $title .=" - ".$u->total ." ";
//        }
        if(isset($config['type'])){
            $t = $config['type'] ;
            $title .= ' '.$_type_s[$t];
        }else{
            $title .= "عقارات";
        }
        $title .=" | "."البيوت - elbyoot.com ";
        ?>

            @include('data_table')
    </div>
  </div>

@include('footer')
