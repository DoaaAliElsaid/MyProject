@include('header')
<?php
    $sponsors = $sponser[0];
if((new \Jenssegers\Agent\Agent())->isMobile()){
    $s='width: 100%';
}else{
    $s='';
}

$title = $sponsors->title ." ".$u->total;
$title .=" | "."البيوت - elbyoot.com ";
//echo $title;
//exit();
//var_dump($sponsors->img);
//exit();
?>
<!-- Section Result -->
<div class="resultSearch py-4">
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col-md-7"  style=" margin: auto;">
                <img class="d-block mx-auto" src='https://www.shoqaq4sale.com/{{$sponsors->banner}}' alt='{{$sponsors->title}}' style='{{$s}}'/>
                <br/><br/>
                <h1 style='float:none;text-align: center;' class='leftcontent_box_titlelink'><b>{{$sponsors->title}}</b></h1>
                <br>
            </div>
        </div>
        @include('data_table')
    </div>
</div>
@include('footer')
