@include('header')
  <!-- Section Result -->
  <div class="resultSearch py-4">
    <div class="container" dir="rtl">
        <?php
        global $_moh_b, $_type, $_type_s ,$_type_en,$_purp_en, $_purp_l , $_purp_l , $_moh ,$_moh_in ,$_hay ,$_hay_in,$_reg_in, $_reg , $_reg_b , $_reg_en , $_hay_en  , $_moh_en;
        ?>
        <a href="/">عقارات مصر</a>
        <?php if (isset($config['type'])){ ?>
            >
            <a href="./searches/<?=$_type_en[$config['type']]."/".$_purp_en[$config['purp']] ?>">{{ $_type_s[$config['type']]}}</a>
        <?php }if(isset($config['moh'])){
            if(empty($config['type']))
            {
                $config['type']= 1;
            }
            if(empty($config['purp']))
            {
                $config['purp']= 1;
            }
            $moh=$_type_s[$config['type']]." ".$_purp_l[$config['purp']]." ".$_moh_in[$config['moh']];
        ?> >
            <a href="./searches/<?=$_moh_en[$config['moh']]."/".$_type_en[$config['type']]."/".$_purp_en[$config['purp']] ?>">{{$moh}}</a>
        <?php }if(isset($config['hay'])){
            $hay=$_type_s[$config['type']]." ".$_purp_l[$config['purp']]." ".$_hay_in[$config['hay']] ;
        ?> >
            <a href="./searches/<?=$_moh_en[$config['moh']]."/".$_hay_en[$config['hay']]."/".$_type_en[$config['type']]."/".$_purp_en[$config['purp']] ?>">{{$hay}}</a>
        <?php }if(isset($config['reg'])){
            $reg=$_type_s[$config['type']]." ".$_purp_l[$config['purp']].$_reg_in[$config['reg']] ;
        ?> >
            <a href="./searches/<?=$_moh_en[$config['moh']]."/".$_hay_en[$config['hay']]."/".$_reg_en[$config['reg']]."/".$_type_en[$config['type']]."/".$_purp_en[$config['purp']] ?>">{{$reg}}</a>
        <?php } ?>
    <br>
            @include('data_table')
    </div>
  </div>

@include('footer')
