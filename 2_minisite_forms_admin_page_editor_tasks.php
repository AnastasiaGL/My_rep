<?php
	require_once "lib.php";
	$arr = array('red', 'green', 'blue', 'yellow', 'orange');
	$rand_key = array_rand($arr);
	$color = $arr[$rand_key];
?>
<h1>Главное меню</h1><br>
	<?php
	$nav=array (
 array ("url"=>"/?act=about", "title"=>"About"),
  array ("url"=>"http:/?act=contact", "title"=>"Contacts"),
  array ("url"=>"http:/?act=main", "title"=>"Main"),
  array ("url"=>"http:/?act=products", "title"=>"Products"),
);
  echo "<ul>";
foreach ($nav as $item) {   
  echo "<li>";
  echo "<a href={$item["url"]}>{$item["title"]}  </a>";
  echo "</li>";
}
echo "</ul>";
?>
<br>

<?php 
	$filename = 'main.php';
	if ( isset($_GET['act']) ){
		$filename = $_GET['act'].'.php';
	}
	
	$filename = 'pages' . DIRECTORY_SEPARATOR . $filename;
	
	//include_once($filename);
	//include_once $filename;
	require $filename;
?>

<br>
<h1>Подвал сайта</h1>
