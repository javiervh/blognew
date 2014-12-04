<?php
	/*foreach($order as $var){
		echo '<p>'.$var->review.'</p>';
	}
	echo '<p>Hola!<p>';
	foreach($order2 as $var){
		echo '<p>'.$var->title.'</p>';
	}*/
	/*for($i=0;$i< count($order);$i++){
		for($j=0;$j<count($order2);$j++){
			if($order2[i]->isbn==$order[j]->isbn)
				echo '<p>'.$order2[j]->title.'</p>';
		}
	}*/
?>
	<h2>Tabla Título de Libro - Review</h2>	
	<table border="1"><tr>
	<td><b>Título</b></td><td><b>Review</b></td>
	</tr>
	<tr>	
<?php	foreach($order as $var){
		foreach($order2 as $var2){
			if($var->isbn == $var2->isbn)
				echo '<td>'.$var2->title.'</td><td>'.$var->review.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>
