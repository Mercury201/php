<pre>
<?php
echo "<table border>";
for($i  = 0; $i < 2; $i++){
	echo "<tr>";
	for($j = 0; $j < 5; $j++){
		$n  = 5 * $i + $j ;
		printf("<td>%05d</td>", $n);
	}
	echo "</tr>";
}
echo "</table>";
?>
</pre>