<?php
const nama = "Siti Rismawati";
$umur = "21" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
</head>
<body>
<table border = "1" cellspacing = "0" cellpadding="7px">
				<tr>
					<td> Nama </td>
					<td> : </td>
					<td> <?php echo nama ?> </td>
				</tr> 
				<tr>
					<td> umur </td>
					<td> :  </td>
					<td> <?php echo $umur ?> </td>
				</tr>
				<tr>
					<td> Tinggi Badan</td>
					<td> : </td>
					<td> 168 Cm </td>
				</tr> 
				<tr>
					<td> Berat Badan</td>
					<td> : </td>
					<td> 49 </td>

				</tr>
		<table>
</body>
</html>