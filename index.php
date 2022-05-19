<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Product of Numbers in PHP</title>
  </head>
  <body>
    <?php echo "<h1>Product of Numbers in PHP</h1>"; ?>
		<?php echo "<h3>This program will calculate and display the product of numbers using addition only:</h3>"; ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="results">						
						<label for="userNum">Enter a Positive Integer:</label>
						<input type="number" step="1" min="0" name="userNum"><br><br>		
						<label for="userNum">Enter another Positive Integer:</label>
						<input type="number" step="1" min="0" name="secNum"><br><br>		
						<input type="submit" value="Calculate Product">
					</form>
        </td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
    <iframe id="results" name="results">
    </iframe>
    <br>
	<img src="./images/integer.jpg" alt="Numbers" width="30%">
  </body>
</html>
