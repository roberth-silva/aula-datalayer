<?php 
	require __DIR__ . "/../vendor/autoload.php";

	use Source\Models\ItemType;

	$item = new ItemType();
	$list = $item->find()->fetch(true);	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read do ItemType</title>
</head>
<body>
	<h1>Tipos de Item cadastrados</h1>
	<hr/>

	<table>
		<thead>
			<tr>
				<td>Id</td>
				<td>Descrição</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($list as $objItem) {
					echo "<tr>"; 
					echo "<td>{$objItem->id}</td>";
					echo "<td>{$objItem->description}</td>";
					echo "</tr>";					
				}
			 ?>
		</tbody>
	</table>
</body>
</html>