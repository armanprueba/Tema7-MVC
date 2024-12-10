<h1>Editar Videojuego</h1>
<form method="POST" action="index.php?action=edit&id=<?= $videojuego['id']
?>">
<label for="titulo">Título:</label>
<input type="text" name="titulo" value="<?= $videojuego['title'] ?>"
required>
<br>
<label for="descripcion">Género:</label>
<input type="text" name="descripcion" value="<?= $videojuego['description'] ?>"
required>
<br>
<button type="submit">Actualizar</button>
</form>