<?php

header('Content-Type: text/html; charset=utf-8');

include "../model/config.php";

include "../model/postgres.class.php";

include "../model/functions.php";

if(checkOnline('https://www.shof3qar.com/'))
{ echo "yesrrrss";
// connect to shof3qar db

$date = date("Y-m-d",time()-60*60*24) ;

$cn2 = mysqli_connect('198.57.214.78', 'egaraton_3qar', 'Hggialrahman@2Smart@') ;

$db=mysqli_select_db("egaraton_shof3qar" , $cn2);

mysqli_set_charset('utf8',$cn2);



//Connect to database

$db=new PostgresManager();

$db->setConstring();

$con=$db->connect();

/*-- projects_reg --*/

$db->del("projects_reg","1=1") ;

$query = "select * from projects_reg ";

$result = mysqli_query($query , $cn2);

while ($row = mysqli_fetch_assoc($result))

{
	//echo '<pre>';print_r($row);'</pre>';
    $db->replace("projects_reg" ,$row );

}
echo 'table projects_reg featched successfully <br/>';

echo mysqli_error();

/*-- users --*/
$db->del("users","1=1") ;
$query = "select * from users ";

$result = mysqli_query($query , $cn2);

while ($row = mysqli_fetch_assoc($result))

{
	//echo '<pre>';print_r($row);'</pre>';

    $db->replace("users" ,$row );

}
echo 'table users featched successfully <br/>';

echo mysqli_error();

/*-- projects --*/

$db->del("projects","1=1") ;

$query = "select * from projects ";

$result = mysqli_query($query  , $cn2);
while ($row = mysqli_fetch_assoc($result))
{
	//echo "<pre/>";print_r($row);exit();
	$db->replace("projects" ,$row );
	$img=$row['project_img'];
	if(strpos($img,'/compounds/') == false){
		if($img != NULL || $img != ""){
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../uploads/'.$img)){
			$source='https://www.shof3qar.com/uploads/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des = '../uploads/'.$img;
			save_image($source,$des);
			$sourceth = '../uploads/'.$img;
			$desth = '../uploads/thumb/'.$img;
			$markedimage='../images/homz_watermark.png';
			make_watermark($markedimage,$sourceth,$desth,297,247.5);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
		}
	}
}
echo 'table projects featched successfully <br/>';
echo mysqli_error();



/*-- projects_img --*/

$db->del("projects_img","1=1") ;

$query = "select * from projects_img ";

$result = mysql_query($query , $cn2);
while ($row = mysql_fetch_assoc($result))
{
	//echo "<pre/>";print_r($row);exit();
	$db->replace("projects_img" ,$row );
	$img=$row['img'];
	if(strpos($img,'/compounds/') == false){
		if($img != NULL || $img != ""){
			$img = str_replace(' ', '%20', $img);
			//echo $img;exit();
			if(!file_exists('../uploads/'.$img)){
			$source='https://www.shof3qar.com/uploads/'.$img;
			$img = str_replace('%20', ' ', $img);
			$des = '../uploads/'.$img;
			save_image($source,$des);
			$sourceth = '../uploads/'.$img;
			$desth = '../uploads/thumb/'.$img;
			$markedimage='../images/homz_watermark.png';
			make_watermark($markedimage,$sourceth,$desth,297,247.5);
			//echo '<img src="http://www.lelbey3.com/images/'. $img.'"/>';echo '<br/>';
			}
		}
	}
}
echo mysql_error();
echo 'table projects_img featched successfully <br/>';

mysql_close();
mysql_close($cn2);
exit();
}
?>
