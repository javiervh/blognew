<?php
/* @var $this SiteController */
/*
$this->pageTitle=Yii::app()->name . ' - AgregarLibro';
$this->breadcrumbs=array(
	'Agregar Libro',
);*/
?>
<h1>Insertar Libro</h1>
<p>Formulario</p>
<body>
          <form action="resultado.php" method="post">
          Buscar por:
          <select name="searchtype">
          <option value="author">Autor
          <option value="title">Titulo
          <option value="isbn">COD. ISBN
          </select>
          <br />    <br />
          Ingrese código de libro:<br />
          <input name="searchterm" type="text" size="40">
          <br />    <br />
          <input type="submit" name="submit" value="Buscador">
          </form>
</body>
</html>
