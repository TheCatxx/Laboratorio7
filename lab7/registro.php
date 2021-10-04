<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!-- Nuestra hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>Biblioteca Virtual</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fluid w-100">
      <div class="container">
            <a class="navbar-brand fw-bold" href="home.php">Biblioteca<span class="tit-span">Virtual</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-itemd-flex">
                      <a class="nav-link active align-self-center" aria-current="page" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-itemd-flex">
                      <a class="nav-link active align-self-center" href="registrar.php">Registrar</a>
                    </li>
                    <li class="nav-itemd-flex">
                      <a class="nav-link active align-self-center" href="registro.php">Libros</a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>

	<main>
		<div class="table-responsive-lg">
		<table class="table table-striped table-sm">
		  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">TITULO</th>
			      <th scope="col">AUTOR</th>
			      <th scope="col">AÑO</th>
			      <th scope="col">URL</th>
			      <th scope="col">EDITORIAL</th>
			      <th scope="col">ESPECIALIDAD</th>
			      <th scope="col" colspan="2">ACCIONES</th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
			      <?php
					$res = $MySQLiconn->query('SELECT * FROM data');
					while ($row=$res->fetch_array()) {
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['tit']; ?></td>
						<td><?php echo $row['aut']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><a href="<?php echo $row['URL']; ?>">Leer Libro </a></td>
						<td><?php echo $row['edito']; ?></td>
						<td><?php echo $row['Espe']; ?></td>
						<td><a href="editar.php?edit=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar edicion')" >Editar</a></td>
						<td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar eliminacion')">Eliminar</a></td>
					</tr>
					<?php
					}
					?>
			    </tr>
			</tbody>
		</table>
	</div>
	</main>
	
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
</html>