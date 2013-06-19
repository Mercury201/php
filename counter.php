<?php
echo ($n = file_get_contents('count.txt')).'人目';
file_put_contents('count.txt',--$n);
?>
