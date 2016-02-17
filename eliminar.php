<?php
				include_once 'dbconfig.php';

				if(isset($_POST['btn-del']))
				{
					 $id = $_GET['delete_id'];
				 $crud->delete($id);
				 header("Location: eliminar.php?deleted"); 
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
                <a class="navbar-brand page-scroll" href="#page-top">Ing. Juan Manuel Muñoz Perez</a>
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
           
		   
		  
			
				
				<div class="container">
				
				 <?php
				 if(isset($_GET['deleted']))
				 {
				  ?>
						<div class="alert alert-success">
					 <strong>Exitoso!</strong> El registro fue eliminado... 
				  </div>
						<?php
				 }
				 else
				 {
				  ?>
						<div class="alert alert-danger">
					 <strong>Cuidado !</strong> Seguro de elimiar el registro ? 
				  </div>
						<?php
				 }
				 ?> 
				</div>
				
				<div class="clearfix"></div>
				
				<div class="container">
				  
				  <?php
				  if(isset($_GET['delete_id']))
				  {
				   ?>
						 <table class='table table-bordered'>
						 <tr>
						 <th>#</th>
						 <th>Nombre</th>
						 <th>Apellido paterno</th>
						 <th>Apellido materno</th>
						 </tr>
						 <?php
						 $stmt = $DB_con->prepare("SELECT * FROM usuarios WHERE id=:id");
						 $stmt->execute(array(":id"=>$_GET['delete_id']));
						 while($row=$stmt->fetch(PDO::FETCH_BOTH))
						 {
							 ?>
							 <tr>
							 <td><?php print($row['id']); ?></td>
							 <td><?php print($row['nombre']); ?></td>
							 <td><?php print($row['a_paterno']); ?></td>
							 <td><?php print($row['a_materno']); ?></td>
							 </tr>
							 <?php
						 }
						 ?>
						 </table>
						 <?php
				  }
				  ?>
				</div>
				
				<div class="container">
				<p>
				<?php
				if(isset($_GET['delete_id']))
				{
				 ?>
				   <form method="post">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
					<button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SI</button>
					<a href="crudp.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
					</form>  
				 <?php
				}
				else
				{
				 ?>
					<a href="crudp.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar a principal</a>
					<?php
				}
				?>
				</p>
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

