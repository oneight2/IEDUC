<?php 
	$gallery = query("SELECT * FROM gallery");
	$tahun = query("SELECT DISTINCT tahun FROM gallery ORDER BY tahun ASC");
 ?>