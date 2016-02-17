 <?php
			include_once 'dbconfig.php';
			if(isset($_POST['btn-save']))
			{
			 $nombre = $_POST['nombre'];
			 $aPaterno = $_POST['aPaterno'];
			 $aMaterno = $_POST['aMaterno'];
			 
			 if($crud->create($nombre,$aPaterno,$aMaterno))
			 {
			  header("Location: agregar.php?inserted");
			 }
			 else
			 {
			  header("Location: agregar.php?failure");
			 }
			}
			?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="css/agency.css" rel="stylesheet">-->
	<link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Ing. Juan Manuel Mu�oz Perez</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">Acerca de</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
  

    <!-- Services Section -->
    <section id="services">
        <div class="container">
          <div class="row">
           
		   
		  
			
			<?php
			if(isset($_GET['inserted']))
			{
			 ?>
				<div class="container">
			 <div class="alert alert-info">
				<strong>Bien !</strong> Registro guardado correctamete <a href="index.php">HOME</a>!
			 </div>
			 </div>
				<?php
			}
			else if(isset($_GET['failure']))
			{
			 ?>
				<div class="container">
			 <div class="alert alert-warning">
				<strong>SORRY!</strong> ERROR No se pudo guardar !
			 </div>
			 </div>
				<?php
			}
			?>
			
			<div class="clearfix"></div><br />
			
			<div class="container">
			
			  
			  <form method='post'>
			 
				<table class='table table-bordered'>
			 
					<tr>
						<td>Nombre</td>
						<td><input type='text' name='nombre' class='form-control' required></td>
					</tr>
			 
					<tr>
						<td>Apellido paterno</td>
						<td><input type='text' name='aPaterno' class='form-control' required></td>
					</tr>
			 
					<tr>
						<td>Apellido materno</td>
						<td><input type='text' name='aMaterno' class='form-control' required></td>
					</tr>
			 
			 
					<tr>
						<td colspan="2">
						<button type="submit" class="btn btn-primary" name="btn-save">
				  <span class="glyphicon glyphicon-plus"></span> Nuevo registro
			   </button>  
						<a href="crudp.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar a principal</a>
						</td>
					</tr>
			 
				</table>
			</form>
				 
				 
			</div>

		   
		   
		   
          </div>
        </div>
    </section>

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>

