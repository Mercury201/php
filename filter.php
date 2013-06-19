<?php
$us =$_SERVER['HTTP_USER_AGENT'];
echo $us;
?>
<p> <br/>
<?php
if( strpos($us, 'Android') !== false  &&  strpos($us, 'Mobile') !== false || strpos($us, 'iPhone') !== false
		||  strpos($us, 'Windows Phone') !== false){
	echo 'Phone true';
} else{
	echo 'Tablet or PC false';
}
?>
</p>