<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Список</title>

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
                    <li>
                        <a href="/index.php/inventar/filter">Фильтрация</a>
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
        <h1>Фильтрация </h1>
        <div class="row">
            <div class="col-lg-5">
                <select class="form-control">
                    <?php foreach ($personal as $i): ?>
                        <h3><?php echo $i['name']; ?></h3>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-success" name="save">Save</button
            </div>
        </div>
        <?php foreach ($booksList as $bookItem): ?>
        <div class="row">
            <div class="col-lg-1">
                <?php echo $bookItem['id']; ?>
            </div>
            <div class="col-lg-3">
                <?php echo $bookItem['title']; ?>
            </div>
            <div class="col-lg-4">
                <?php echo $bookItem['description']; ?>
            </div>
            <div class="col-lg-1">
                <?php echo $bookItem['responsable']; ?>
            </div>
            <div class="col-lg-1">
                <a href="<?php echo '/index.php/inventar/delete/'.$bookItem['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
            <div class="col-lg-1">
                <a href="<?php echo '/index.php/personal/update/'.$bookItem['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
            </div>
            <hr>
        </div>
        <?php endforeach; ?>
        <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/static/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/static/js/bootstrap.min.js"></script>

</body>

</html>
