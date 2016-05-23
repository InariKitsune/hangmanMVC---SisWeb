<html lang="es-BO">
  <head>
    <title>El ahorcado - Categoría</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>
  <body>
    <h1>Palabras para Categoría</h1>
	<ul>
		<?php		
		foreach ($words as $word): ?>
		<li><?= $word["text"] ?></a></li>
		<?php endforeach; ?>	  
		<form method="POST" action="/category/create?id=<?php echo $cID; ?>">
		  <input type="text" name="newWordTextBox" maxlength="50" />
		  <input type="submit" name="createNewWordButton" value="Crear" />
		</form>	  
	</ul>	
	<div>	   
	</div>
  </body>
</html>