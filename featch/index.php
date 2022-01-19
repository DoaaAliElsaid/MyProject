<?php
ini_set("max_execution_time", 0);
header('Content-Type: text/html; charset=utf-8');


include "../model/config.php";
include "../model/postgres.class.php";
include "../model/functions.php";



// connect to shof3qar db
$date = date("Y-m-d",time()-60*60*12);
$cn2 = mysqli_connect('198.57.214.78', 'egaraton_fads', 'fadsfads') ;
$db=mysqli_select_db("egaraton_shof3qar" , $cn2);
mysqli_set_charset('utf8',$cn2);
if(!$cn2):
    echo "can not connect ";
    exit();
    endif;
//$query = "select u.* , c.action , c.id , c.c_unit_id from cronjob c left join units u on u.unit_id=c.unit_id
//     where c.homz4sale=0 order by c.id desc ";

$query="select * from ( select c.action , c.id , c.unit_id as c_unit_id , u.* from cronjob c left join units u on u.unit_id=c.unit_id
where c.elbyoot=0 order by c.id desc )as mytable group by c_unit_id";

$result = mysqli_query($query , $cn2);
echo mysqli_error();

//$query2 = "select * from cronjob where action ='delete' and homz4sale=0";
//$result2 = mysql_query($query2 , $cn2);


$affected_unit_id=array();

//Connect to database
$db=new PostgresManager();
$db->setConstring();
$con=$db->connect();

$i=0;
$_insert=0;
$_delete=0;
$_update=0;
while ($row = mysqli_fetch_assoc($result))
{
//if($row['title']=='') continue ;
    $i++ ;
     $action = $row['action'];
     $id = $row['id'];
     $unit_id =$row['c_unit_id'];
     unset ($row['c_unit_id']);
     unset ($row['action']);
     unset ($row['id']);
     //if(!in_array($unit_id, $affected_unit_id))
     //{
            switch ($action)
            {
                //##############################################################
                case 'insert':
                   $add = $db->add("units",$row);
                    for($image_num=1;$image_num <= 8;$image_num++)
                    {
                        if(!file_exists('../uploads/'.$row['image'.$image_num.'name']))
                        {
							$source='https://www.shof3qar.com/thumb_watermark/'.$row['image'.$image_num.'name'];
							$des='../uploads/'.$row['image'.$image_num.'name'];
							echo 'insert <br>source = '.$source.'<br>';
                                                        echo 'des = '.$des.'<br>';
                                                        save_image($source,$des);
							$sourceth='../uploads/'.$row['image'.$image_num.'name'];
							$desth='../uploads/thumb/'.$row['image'.$image_num.'name'];
							echo 'sourceth = '.$sourceth.'<br>';
                                                        echo 'desth = '.$desth.'<br>';
                                                        //$markedimage='../images/homz_watermark.png';
							//make_watermark($markedimage,$sourceth,$desth,297,247.5);
                                                        save_image($sourceth,$desth);
                        }
                    }
                    $_insert++;
                break;

                //##############################################################
                case 'delete':
                       //old$db->del("units", "unit_id = $unit_id");
					   $db->query("call archive($unit_id,0,1)");

						$deleted_ads = $db->select('archive',"", 'unit_id='.$unit_id);

                       //$db->del("units", "unit_id = $unit_id");
						for($image_num=1;$image_num <= 8;$image_num++)
						{
							if($deleted_ads[0]['image'.$image_num.'name']!=null){
									$source_uploads='../uploads/'.$deleted_ads[0]['image'.$image_num.'name'];
									$source_thumb='../uploads/thumb/'.$deleted_ads[0]['image'.$image_num.'name'];
									unlink($source_uploads);
									unlink($source_thumb);
							}
						}
						echo mysqli_error();
						$_delete++;
                break;

                //##############################################################
                case 'update':
					$add = $db->replace("units",$row);
                    for($image_num=1;$image_num <= 8;$image_num++)
                    {
                        if(!file_exists('../uploads/'.$row['image'.$image_num.'name']))
                        {
							$source='https://www.shof3qar.com/thumb_watermark/'.$row['image'.$image_num.'name'];
							$des='../uploads/'.$row['image'.$image_num.'name'];
							echo 'update <br>source = '.$source.'<br>';
                                                        echo 'des = '.$des.'<br>';
                                                        save_image($source,$des);
							$sourceth='../uploads/'.$row['image'.$image_num.'name'];
							$desth='../uploads/thumb/'.$row['image'.$image_num.'name'];
							echo ' <br>$sourceth = '.$sourceth.'<br>';
                                                        echo 'desth = '.$desth.'<br>';
                                                        //$markedimage='../images/homz_watermark.png';
							//make_watermark($markedimage,$sourceth,$desth,297,247.5);
                                                        save_image($sourceth,$desth);
                        }
                    }
                    $_update++;
                break;
            } // end switch case

             $query_upd = "update cronjob set homz4sale=1 where unit_id='".$unit_id."' ";
             mysqli_query($query_upd , $cn2);
             echo mysqli_error();


            // $affected_unit_id[]=$unit_id;
     //}// end if unit_id not in affected_unit_id

}
echo mysqli_error();


if($_insert==0 && $_update==0 && $_delete==0)
{
    $data=  date("y-m-d");
    $subject="تقرير نقل الاعلانات المميزة على homz4sale.com";
    $message="insert ==> $_insert \n
              delete ==> $_delete \n
              update ==> $_update \n
              date   ==> $data \n
              موقع homz4sale";
    $to="aya.gispioneers@gmail.com,amany.masoud19@yahoo.com";
    mail($to, $subject, $message);
}
 else
{

     echo " inserted >> $_insert <br />";
     echo " updated >> $_update <br />";
     echo " deleted >> $_delete <br />";
$date = date("Y-m-d",time()) ;
$query_dashbord="update dashboard_sites_status set date_unit_transfer='".$date."' where sitename='homz4sale'";
$result=mysqli_query($query_dashbord);
echo '#main page units added to dashboard <br />';
}


$sel = $db->select("units",array('count( * ) AS counter')," (special >0 OR private >0) and unit_id < 750000 ");
$count_un = $sel[0]['counter'];

$sel = $db->select("units",array('count( * ) AS counter')," special >0 OR private >0 ");
$count_all = $sel[0]['counter'];


$db->edit("units_moving", array("nu_units" => $count_un , "allunits" => $count_all  ), " sitename = 'homz4sale' ");


 echo 'Number of units updated ! <br />';
 mysqli_close();
 exit();

?>
