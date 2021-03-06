<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tétrico - Beta</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=URL::to('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=URL::to('css/sb-admin.css'); ?>" rel="stylesheet">
    <!--link rel="stylesheet" type="text/css" href="<?=URL::to('css/book.css'); ?>" /-->
    <!-- Morris Charts CSS -->
    <link href="<?=URL::to('css/plugins/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="">

        @include('nav')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
            <div class="row">
            	<div class="col-lg-2"></div>
            <!-- Parte central -->
            <div class="col-lg-8">
            		 <div class="row">
                   		 <div class="col-lg-12">
                        	<h1 class="page-header">
                            Nuevos relatos enviados
                        	</h1>
                    	</div>
                	</div>
                	<table class="table table-hover table-striped">
                		<thead><tr><th>Nombre</th><th>Autor</th><th>Tiempo</th><th>Acción</th>
                		</tr>
                		</thead>
                		<tbody>
					       @if($enviados)
						   	@foreach($enviados as $enviado)
						   	<tr>
					                    <td> <a href="{{$enviado->ubicacion}}">
					                           
					                           <i class="fa fa-fw fa-file"></i> {{$enviado->nom_rel}}
						                       </a>
                						</td>
                						<td><i class="fa fa-fw fa-user"></i>{{$enviado->user}}</td>
                						<td><span class="badge"><i class="fa fa-fw fa-clock-o"></i> just now</span></td>
                						<td><a href="publicar/{{$enviado->pk}}"><i class="fa fa-fw fa-pencil"></i> Pasar a edición</a>
                						</td>
                			</tr>
					               @endforeach
					       @endif
					    </tbody>
					</table>
					<h1 class="page-header">
                            Por publicar
                    </h1>
                    <table class="table table-hover table-striped">
                		<thead><tr><th>Nombre</th><th>Autor</th><th>Tiempo</th><th>Acción</th>
                		</tr>
                		</thead>
                		<tbody>
                    @if($rEditados)
                    	@foreach($rEditados as $relato)
                    		<tr>
                    			<td><i class="fa fa-fw fa-pencil"></i> {{$relato->nombre}}</td>
                    			<td><i class="fa fa-fw fa-user"></i> {{$relato->autor}}</td>
                    			<td><span class="badge"><i class="fa fa-fw fa-clock-o"></i> just now</span></td>
                    			<td><a href="crearPaginas/{{$relato->id}}"><i class="fa fa-fw fa-arrow-circle-o-up"></i> Última edición</a>
                    			</td>
                    		</tr>
                    	@endforeach
                    @endif
                     </tbody>
					</table>
		    </div>
                <!--ul class="align">
                <li>
               			<figure class='book'>
							<ul class='hardcover_front'>
								<li>
									<img src="<?=URL::to('img/el-color-lovecraft.jpg'); ?>" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>
							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="leer/1">Leer</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>El color que cayó del cielo</h1>
								<span>H.P. Lovecraft</span>
							</figcaption>
						</figure>
						</li>
						<li>
						<figure class='book'>
							<ul class='hardcover_front'>
								<li>
									<img src="<?=URL::to('img/el-color-lovecraft.png'); ?>" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>
							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" href="#">Leer</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>La Música de Erich Zann</h1>
								<span>H.P. Lovecraft</span>
							</figcaption>
						</figure>
						</li>
						</ul--><div class="col-lg-2">Usuarios de la pagina</div>
            </div>
            <!--fin parte central -->

                	
            </div>
               
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
