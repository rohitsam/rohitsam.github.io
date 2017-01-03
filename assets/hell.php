
<html>
<head>
	<title>EXAMPLE</title>
</head>
<body style="width: 960px; margin: 25px auto 0;">
	<?php
             echo 'some Code';

             ?>


             

<form method="get" action="hell.php">
	<input type="text" name="name"/>
	<input type="text" name="age"/>
	<input type="submit" value="submit"/>

</form>
<?php
       $name = $_GET['name'];
       $age = $_GET['age'];

       echo '<p>'. $name .'</p>';
       echo '<p>'. $age .'</p>'   ;

?>
 
	</script>
	</body>
	</html>
