<?php
	echo "<form action = 'testbarcode.php' method='post'>";
	echo "<input type = 'text' name = 'barcode'>";
	echo "<input type = 'submit' name = 'sub'>";
	if(isset($_POST['sub'])){
		echo "<img src = 'barcode.php?text=$_POST[barcode]' alt = 'hello' />";
	}
?>
