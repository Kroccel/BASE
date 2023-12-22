<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
	<style>
		table {
			width:100%;
			height:50vh;
			border:1px solid darkblue;
			color:red;
		}
	</style>
</head>
<body>
    <h1>Таблица умножения от 0 до 10</h1>
    <table border=1>
		
		<tr>
			
			<?php
				for ($i = 0; $i <= 10; $i++) {
					
					for ($j=1;$j<=10;$j++) {
						echo "<td> $i x $j =". ($i*$j). "</td>";
					}
					echo "<tr></tr>";
				}
			?>			

			
		</tr>
    </table>
</body>
</html>