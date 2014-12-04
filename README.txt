*	Para poder ingresar ir al siguiente link:

http://localhost/blognew/yii/blog2/index.php

*	Luego iniciar sesión con el usuario 'admin' y password 'admin'.
*	Una vez logeado ir a la siguiente dirección para poder agregar libros en la base de datos:

http://localhost/blognew/yii/blog2/index.php?r=Books/

*	Una vez dentro, en la parte superior derecha tendrá las diferentes opciones para poder agregar (crear) y manejar(borrar) libros.

*	Crear algún libro.

*	Luego ir a la siguiente dirección para poder agregar un review

http://localhost/blognew/yii/blog2/index.php?r=BookReviews/

*	Similar a Books, podrá crear un review de un libro, sugerencia: Usar el mismo id (isbn) del libro creado anteriormente y agregar un pequeño review.

*	Para poder ver la tabla donde relacionamos los reviews con los titulos de los libros mediante la clave primaria, ir a la siguiente direccion:

http://localhost/blognew/yii/blog2/index.php?r=BookReviews/listar


Para esta tarea se modificaron :

Archivos de Modelos
	BookReviews.php
	Books.php

Archivos de Controladores
	BookReviewsController.php //se agregó el método actionListar
	BooksController.php

Archivos de vistas
	listar.php //donde se guarda la tabla final ya relacionada.

Dato aparte en la pestaña 'Acerca de' podrá encontrar información del curso, nombre del alumno y código.

Si hace click en la pestaña usuario, le saldrá un error pues esa pestaña esta relacionada con la base de datos blog.sql cuya tabla es tblUsers, y en la base de datos usada para este proyecto es books.sql, así que usar directamente los links dados para agregar y manejar los archivos para no tener ningun inconveniente.
