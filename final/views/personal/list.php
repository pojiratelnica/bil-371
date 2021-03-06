<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Список людей</title>

    <!-- Bootstrap Core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/static/css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Главная</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="/index.php/personal/">Список людей</a>
                    </li>
                    <li>
                        <a href="/index.php/inventar/">Список инвертарей</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container margination">
        <!-- Page Heading -->
        <div class="row">
            <?php foreach ($booksList as $bookItem): ?>
            <div class="col-lg-12">
                <h3><a href="<?php echo '/index.php/personal/'.$bookItem['id']; ?>"><?php echo $bookItem['name']; ?></a></h3>
                <h4><?php echo $bookItem['department']; ?></h4>
                <!-- <h4></h4> -->
                <a href="<?php echo '/index.php/personal/delete/'.$bookItem['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?php echo '/index.php/personal/update/'.$bookItem['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
            <hr>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/static/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/static/js/bootstrap.min.js"></script>

</body>

</html>
