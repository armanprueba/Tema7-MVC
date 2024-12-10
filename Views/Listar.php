<h1>Lista de Videojuegos</h1>
<a href="index.php?action=create">Agregar Videojuego</a>
<table border="1">
<tr>
<th>ID</th>
<th>Título</th>
<th>Descripción</th>
<th>Fecha de creación</th>
</tr>
<?php foreach ($videojuegos as $videojuego): ?>
<tr>
<td><?= $videojuego['id'] ?></td>
<td><?= $videojuego['title'] ?></td>
<td><?= $videojuego['description'] ?></td>
<td><?= $videojuego['created_at'] ?></td>
<td>
<a href="index.php?action=edit&id=<?= $videojuego['id'] ?>
">Editar</a>
<a href="index.php?action=delete&id=<?= $videojuego['id']
?>" onclick="return confirm('¿Estás seguro?')">Eliminar
</a>
</td>
</tr>
<?php endforeach; ?>
</table>