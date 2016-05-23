<!DOCTYPE html>

<html lang="es-BO">
  <head>
    <title>the hangman - Categorías</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
  </head>
  <body>
    
    <h1>Categorías</h1>
	<ul>
		<?php foreach ($categories as $category): ?>
		<li><a href="category?id=<?= $category["id"] ?>"><?= $category["name"] ?></a>[<a href="/categories/delete?id=<?= $category["id"]?>" onclick="return confirm('¿Está seguro que desea eliminar esta categoría y todas sus palabras?');">X</a>]</li>
		<?php endforeach; ?>	
		<form method="POST" action="/categories/create">
		  <input type="text" name="newCategoryTextBox" maxlength="50" />
		  <input type="submit" name="createNewCategoryButton" value="Crear" />
		</form>
	</ul>
  </body>
</html>