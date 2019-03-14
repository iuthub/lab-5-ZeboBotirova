<?php
	/*echo "<pre>";
	print_r ($_SERVER);
	echo "</pre>";
	*/	
	#define variables and aet to empty values
	$name=$select=$field=$card="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(isset($_POST['name']) && isset($_POST['select']) && isset($_POST['field']) && isset($_POST['card'])){
				$name=$_POST["name"];
				$select=$_POST["select"];
				$field=$_POST["field"];
				$card=$_POST["card"];
			}
		}

		?>

       <!DOCTYPE html>
		<html>
		<head>
		<title>Sucker</title>
		<link rel="stylesheet" type="text/css" href="buyagrade.css">
		</head>
		<body>
		<?php
		if(isset($_REQUEST["name"])&&isset($_REQUEST["select"])&&isset($_REQUEST["field"])&&isset($_REQUEST["card"])){
		file_put_contents("sucker.txt", $name.";".$select.";".$field.";".$card.";<br>",FILE_APPEND);		
		
?>


	<h1>Thanks, Sucker!</h1>
	<p>Your information has been recorded.</p>
	<table>
		<dl>
			<dt>Name</dt>
			<dd>
				<?=$name ?>
			</dd>

			<dt>Section</dt>
			<dd>
				<?=$select ?>
			</dd>
			<dt>Credit Card</dt>
			<dd>
				<?=$field." ({$card})" ?>
			</dd>
		</dl>
	</table>

<p>Here are all the suckers who have submitted here: </p>

<?php
	$myfile=fopen("sucker.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)){
			echo fgets($myfile) . "<br>";
		}
		fclose($myfile);
?>

<?php
	}else{
?>
<h1 align="center">Sorry</h1>
<p>You didn't fill out the form completely. <a href="buyagrade.html">Try again!</a>></p>


<?php
	}
?>


	





</body>
</html>