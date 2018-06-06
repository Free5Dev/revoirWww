<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
 --><link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/moveme.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="sectionC">
	<div class="container">
		<h2 id="competence">Compétences Techniques</h2>
		<p>Les différents domaines que je maîtrise</p>
		<div class="row tpad myTooltip">
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence html5-css3: 100%" class="thumbnail">
                <img src="images/html5css3.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence Github: 50%" class="thumbnail">
                <img src="images/github.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence Bootstrap: 80%" class="thumbnail">
                <img src="images/Bootstrap.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence Php-Mysql: 70%" class="thumbnail">
                <img src="images/phpMysql.png" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence Wordpress: 50%" class="thumbnail">
                <img src="images/wordpress.jpg" alt="logo">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 bpad">
            <a href="#" data-toggle="tooltip" title data-original-title="compétence SQL: 100%" class="thumbnail">
                <img src="images/SQL.png" alt="logo">
            </a>
        </div>
    </div>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>  
<script>
    $(function () {
        $('.myTooltip').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
    })
</script>
</body>
</html>