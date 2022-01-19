<?php
header('Content-Type: text/html; charset=utf-8');

include "../model/config.php";
include "../model/postgres.class.php";
include "../model/functions.php";

if(checkOnline('https://www.shof3qar.com/'))
{ echo "yesrrrss";
// connect to shof3qar db

//$date = date("Y-m-d",time()-60*60*24) ;

$cn2 = mysqli_connect('198.57.214.78', 'egaraton_3qar', 'Hggialrahman@2Smart@') ;

$db=mysqli_select_db("egaraton_shof3qar" , $cn2);
mysqli_set_charset('utf8',$cn2);

//Connect to database
$db = new PostgresManager();
$db->setConstring();
$con = $db->connect();

featch_spunit($db,$cn2);
featch_sponsorsusers($db,$cn2);
//featch_cronjob($db,$cn2);
featch_adsregions($db, $cn2);
featch_rightbanner($db,$cn2);
featch_users($db, $cn2);
featch_paiduserlimited($db, $cn2);  // watting apllay .............


//__________ sp_unit __________
//1-delete all sp unit
//2- select all from shof3qar
//3-insert all into homz
function featch_spunit($db,$cn2)
{
    /* -- sp_unit -- */
    $db->del("sp_unit", "1=1");
    $query = "select * from sp_unit where online !=5 ";
    $result = mysqli_query($query, $cn2);
    while ($row = mysqli_fetch_assoc($result))
    {
        $db->replace("sp_unit", $row);
    }
     $inserted_rows= mysqli_affected_rows();
    if ( $inserted_rows > 0)
    {
		$date = date("Y-m-d",time()) ;
		$query_dashbord="update dashboard_sites_status set date_spunit_transfer='".$date."' where sitename='homz4sale'";
		$result=mysqli_query($query_dashbord);
		echo '#sp units added to dashboard <br />';
		echo mysqli_error();
    }
    else
    {
      echo '#sp units dosnot added to dashboard ';
    }
    echo mysqli_error();
    echo 'Table " sp_unit " has been featched ! <br />';
}
//##############################################################################



//__________ sponsors_users __________
//1-delete all sponsors_users
//2- select all from shof3qar
//3-insert all into homz
function featch_sponsorsusers($db,$cn2)
{
    /* -- sponsors_users -- */
    $db->del("sponsors_users", "1=1");
    $query = "select * from sponsors_users ";
    $result = mysqli_query($query, $cn2);
	while ($row = mysqli_fetch_assoc($result))
	{
		//echo "<pre/>";print_r($row);exit();
		$db->replace("sponsors_users" ,$row );
		$img =$row['img'];
		if($img != NULL || $img != ""){
			$img = str_replace('./images/', '', $img);
			$img = str_replace('images/', '', $img);
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../images/'.$img)){
			$source='https://www.shof3qar.com/images/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des='../images/'.$img;
			save_image($source,$des);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
		}
		$img=$row['banner'];
		if($img != NULL || $img != ""){
			$img = str_replace('./images/', '', $img);
			$img = str_replace('images/', '', $img);
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../images/'.$img)){
			$source='https://www.shof3qar.com/images/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des='../images/'.$img;
			save_image($source,$des);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
		}
	}
    echo mysqli_error();
    echo 'Table " sponsors_users " has been featched ! <br />';
}
//##############################################################################



//__________ cronjob __________
//1-delete all cronjob
//2- select all from shof3qar
//3-insert all into homz
function featch_cronjob($db,$cn2)
{
    /* -- cronjob -- */
    $query = "select * from cronjob where copy=0 and homz4sale=1 ";
    $result = mysqli_query($query, $cn2);

    $i=1;
    $ins_id=array();
    while ($row = mysqli_fetch_assoc($result))
    {

        $db->replace("cronjob", $row);
        echo mysqli_error();
        if(mysqli_insert_id() > 0){
            $ins_id[]=  mysqli_insert_id();
        }
        $i++;
    }

    foreach($ins_id as $id):
        $query="update cronjob set copy=1 where id=$id";

        mysqli_query($query, $cn2);
    endforeach;
    echo mysqli_error();
    echo '<br/>Table " cronjob " has been featched ! <br />';
}
//##############################################################################



//__________ ads_regions __________
//1- select all from shof3qar
//2-insert all into homz
function featch_adsregions($db,$cn2)
{
    /* -- ads_regions -- */
    $db->del("ads_regions", "1=1");
    $query = "select ads_regions.* from ads_regions inner join paid_user_limited pl on ads_regions.uid = pl.uid where pl.archive=0 ";
    $result = mysqli_query($query, $cn2);
    while ($row = mysqli_fetch_assoc($result))
	{
		//echo "<pre/>";print_r($row);exit();
		$img=$row['img'];
		$db->replace("ads_regions" ,$row );
		if($img != NULL || $img != ""){
			$img = str_replace('./images/', '', $img);
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../images/'.$img)){

			$source='https://www.shof3qar.com/images/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des='../images/'.$img;
			save_image($source,$des);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
			else {
				//echo 'exist <br/>';
			}
		}
	}
    $inserted_rows= mysqli_affected_rows();
    if ( $inserted_rows > 0)
    {
		$date = date("Y-m-d",time()) ;
		$query_dashbord="update dashboard_sites_status set date_adsregions_transfer='".$date."' where sitename='homz4sale'";
		$result=mysqli_query($query_dashbord);
	   echo '#super banner added to dashboard <br />';
    }
     else
    {
		echo '#super banner dosnot added to dashboard ';
    }
  echo mysqli_error();
  echo 'Table " ads_regions " has been featched ! <br />';
}
//##############################################################################

//__________ right_banner __________
//1- select all from shof3qar
//2-insert all into homz
function featch_rightbanner($db,$cn2)
{
    /* -- right_banner -- */
    $db->del("right_banner", "1=1");
    $query = "select right_banner.* from right_banner inner join paid_user_limited pl on right_banner.uid = pl.uid where pl.archive=0 ";

    $result = mysqli_query($query, $cn2);
    echo mysqli_error();
    while ($row = mysqli_fetch_assoc($result))
{
	//echo "<pre/>";print_r($row);exit();
	$db->replace("right_banner" ,$row );
	$img=$row['img'];
	if($img != NULL || $img != ""){
		$img = str_replace('./images/', '', $img);
		$img = str_replace(' ', '%20', $img);
		//echo $img;exit();
		if(!file_exists('../images/'.$img)){

		$source='https://www.shof3qar.com/images/'.$img;
		$img = str_replace('%20', ' ', $img);
		$des='../images/'.$img;
		save_image($source,$des);
		//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
		}
		else {
			//echo 'exist <br/>';
		}
	}

}

  $inserted_rows= mysqli_affected_rows();
    if ( $inserted_rows > 0)
    {
$date = date("Y-m-d",time()) ;
$query_dashbord="update dashboard_sites_status set date_rightbanner_transfer='".$date."' where sitename='homz4sale'";
$result=mysqli_query($query_dashbord);
echo '#right_banner added to dashboard <br />';
    }
     else
    {
      echo '#right_banner dosnot added to dashboard ';
    }
        echo mysqli_error();
echo 'Table " right_banner " has been featched ! <br />';
}
//##############################################################################
//__________ users __________
//1- select all from shof3qar
//2-insert all into homz

function featch_users($db, $cn2)
{
    $db->del("users","1=1");
    $query = "select * from users ";
    $result = mysqli_query($query, $cn2);
    while ($row = mysqli_fetch_assoc($result))
    {
        $db->replace("users ", $row);
    }
    echo 'Table " users " has been featched ! <br />';
	$db->del("admin_privileges","1=1") ;
/*-- admin_privileges --*/
$query = "select * from admin_privileges ";
$result = mysqli_query($query , $cn2);
while ($row = mysqli_fetch_assoc($result))
{
    $db->replace("admin_privileges " ,$row );
}
echo mysqli_error();
 echo 'Table " admin_privileges " has been featched ! <br />';
}
//##############################################################################


//__________ paid_user_limited __________
//1- select all from shof3qar
//2-insert all into homz
function featch_paiduserlimited($db, $cn2)
{
    $db->del("paid_user_limited","1=1");
    $query = "select * from paid_user_limited";
    $result = mysqli_query($query, $cn2);
    while ($row = mysqli_fetch_assoc($result))
	{
	//echo "<pre/>";print_r($row);exit();
	unset($row['idd']);
	$db->replace("paid_user_limited" ,$row );
	$img=$row['banner'];
		if($img != NULL || $img != ""){
			$img = str_replace('./images/', '', $img);
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../uploads/'.$img)){
			$source='https://www.shof3qar.com/uploads/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des = '../uploads/'.$img;
			save_image($source,$des);
			$sourceth = '../uploads/'.$img;
			$desth = '../uploads/thumb/'.$img;
			make_thumb($sourceth,$desth, 100);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
			else {
				//echo 'exist <br/>';
			}
		}
	}
    echo 'Table " paid_user_limited " has been featched ! <br />';
}
//##############################################################################
mysqli_close();
mysqli_close($cn2);
exit();
}
?>
