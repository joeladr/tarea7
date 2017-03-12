<?php

  if($_POST){
    file_put_contents('config.txt', json_encode($_POST));
  }

    $datos = json_decode(file_get_contents('config.txt'),1);

 ?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
		<title>Configuracion</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
    <form method="post" action="">

    	Tiempo en verde: <input type="text" value="<?php echo $datos['verde']; ?>" name="verde" />
      Tiempo en rojo:  <input type="text" value="<?php echo $datos['rojo']; ?>" name="rojo" />
      <button type="submit">Guardar</button>
    </form>
	</body>
</html>
