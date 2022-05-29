<!DOCTYPE html>
<html>
  <head>
  <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Product of Numbers, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
  <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Sum of Numbers in PHP</title>
  </head>
  <body>
	  <center>
   <center><h1><?php 
			echo "Sum of Numbers in PHP";?></h1></center>
   <center><h4><?php 
			echo "This program will help you calculate the sum of two numbers.";?></h4></center>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
        <form action="./results.php" method="post" target="results">  
            <!-- Min number text field -->
						<label for="userNum1">Enter a Positive Number:</label>
						<input type="text" step="1" name="userNum1" id="userNum1"><br><br>	
            <!-- Max number text field -->
    				<label for="userNum2">Please Enter a Second Positive Number:</label>
    			<input type="text" step="1" name="userNum2" id="userNum2"><br><br>	
    		  <input type="submit" name="The sum">
    		</form>
    		</td>
    	  <td valign="top" align="left">
    <!-- Image -->
    <?php
      echo '<center><img src= "./images/math.png" alt="Math" width="80%" height="auto"></center>';
    ?>
    	</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
      <iframe id="results" name="results">	
      </iframe>
    </center>
  </body>
</html>