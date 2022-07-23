<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<style>
	/* Sticky footer styles-------------------------------------------------- */
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 60px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  background-color: #f5f5f5;
	}

	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */

	body > .container {
	  padding: 60px 15px 0;
	}
	.container .text-muted {
	  margin: 20px 0;
	}

	.footer > .container {
	  padding-right: 15px;
	  padding-left: 15px;
	}

	code {
	  font-size: 80%;
	}



	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */

	.container {
	  width: auto;
	  max-width: 680px;
	  padding: 0 15px;
	}
	.container .text-muted {
	  margin: 20px 0;
	}
	</style>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
         
        </div>
    </nav>

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row mt-3">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @section('sidebar')
                    <h2>Barra lateral</h2>
                @show
            </div>
        </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>