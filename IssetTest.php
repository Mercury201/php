$array = array(<br/>
		1 => 'one',<br/>
		3 => 'three'<br/>
		);
		
<?php
$array = array(
		1 => 'one',
		3 => 'three'
		);

// print_r($array);
 echo '<br/>';

if(isset($array[1])){
	print('$array[1]の中身は'."$array[1]".'<br/>');
}else{
	print('中身はないです'.'<br/>');
}

if(isset($array[2])){
	print('$array[2]の中身は'."$array[2]".'<br/>');
}else{
	print('$array[2]の中身はないです'.'<br/>');
}

if(isset($array[3])){
	print('$array[3]の中身は'."$array[3]".'<br/>');
}else{
	print('中身はないです'.'<br/>');
}
?>