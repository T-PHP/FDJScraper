<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FDJ Scraper / Euromillions & Loto Scraper</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body cz-shortcut-listen="true">

    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FDJ PHP SCRAPER</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
        <div class="well">
            <h1>PHP EUROMILLIONS &amp; LOTO SCRAPER</h1>
           <div class="alert alert-info">
                <p><strong>EN : </strong>PHP example to scrap Euromillions numbers.</p>
                <p><strong>FR : </strong>Exemple PHP permettant de récupérer les résultats Euromillions via le site de la FDJ</p>
            </div>
            <div class="text-center">
                <button id="btn_euromillions" type="button" class="btn btn-lg btn-success text-uppercase">View Euromillions Results</button>
                <button id="btn_loto" type="button" class="btn btn-lg btn-success text-uppercase">View Loto Results</button>
            </div>
            <p class="alert text-right">Javascript must be enabled to use this demonstration</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6" id="content-euromillions"></div>
            <div class="col-xs-12 col-md-6" id="content-loto"></div>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $( document ).ready(function() {
            $( "#btn_euromillions" ).click(function() {
                $( "#content-euromillions" ).load( "scrap-euromillions.php" );
            });
            $( "#btn_loto" ).click(function() {
                $( "#content-loto" ).load( "scrap-loto.php" );
            });
        });
    </script>
</body>
</html>