<pre>
<?php
$girl = array("Ann", "Machilda", "Elisa");
$age = array(19, 21, 18);
printf("<table border>");
for($i = 0; $i < count($girl); $i++){
	echo "<tr>";
	printf("<td>%s</td>", $girl[$i]);
	printf("<td>%d</td>", $age[$i]);
	echo "</tr>";
}
echo "</table>";
?>
</pre>