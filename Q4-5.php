<meta charset = 'utf-8'>
<pre>
<?php
$num = array(56, 23, 78, 83, 91);
$sum = 0; $n = 0;
foreach ($num as $f){
	$sum += $f;
	$n = $sum / count($num);
}
printf('合計 = '  ."$sum\n");
printf('平均 = '  ."$n\n");
?>
</pre>