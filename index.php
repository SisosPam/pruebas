<?php
try{

	$db=new mysqli("localhost","siso","1234","casino");
	$sql="select * from socis";
	$result=$db->query($sql);
	$fila=$result->fetch_assoc();
	echo "<pre>";
	print_r($fila);
	echo "</pre>";
}catch(throwable $e){
	var_dump($e);;
}

?>
<!HTML>
<html>
<head>
<meta charset="utf-8">
<title>probando</title>
</head>
<body lang="es">
<p>párrafo de pruebas</p>
</body>
</html>
