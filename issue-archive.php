<html lang="en-US">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Homepage">
  <meta name="keywords" content="Survey of Current Business Digital Archives">
  <meta name="author" content="PJ Urquilla">
  <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png?v=9BBR3Ay64e" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/img/favicon-194x194.png?v=9BBR3Ay64e" sizes="194x194">
  <link rel="icon" type="image/png" href="assets/img/favicon-96x96.png?v=9BBR3Ay64e" sizes="96x96">
  <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png?v=9BBR3Ay64e" sizes="16x16">
  <link rel="shortcut icon" href="img/favicon.ico?v=9BBR3Ay64e">
  <title>Issue Archive: Survey of Current Business Digital Archives</title>
  <!--Bootstrap-->
  <link rel='stylesheet' type='text/css' href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css" />
  <!--Jquery-->
  <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
  <!--Datatables-->
  <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css" />
  <script type="text/javascript" src="assets/js/datatables.min.js"></script>
  <!--Highcharts-->
  <!--<script type="text/javascript" src="../../../assets/js/highcharts.js"></script>
  <script type="text/javascript" src="../../../assets/js/modules/exporting.js"></script>
  <script type="text/javascript" src="../../../assets/js/highcharts-more.js"></script>
  <script type="text/javascript" src="../../../assets/js/modules/solid-gauge.js"></script>
  <script type="text/javascript" src="../../../assets/js/modules/data.js"></script>-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Font Awesome-->
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
  <!-- Inititalize some scripts on document ready-->
  <!-- Data tables -->
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1><a href="index.php">Survey of Current Business Archives Database</a></h1>
        <h2>Issue Archive</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="lead">Use this form to retrieve an issue of the <em>Survey of Current Business</em> from 1994-2016. Alternatively, you can <a href="article-inventory.php">search the article inventory.</a></p>
        <form class="form-horizontal" method = "get" action="issue.php">
          <div class="form-group">
            <label for "year" class="col-md-2 control-label">Year:&nbsp;</label>
            <div class="col-md-4">
              <select class="form-control" id="year" name = "y">
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>

            </select>
            </div>
          </div>
          <div class="form-group">
            <label for "month" class="col-md-2 control-label">Month: &nbsp;</label>
            <div class="col-md-4">
              <select class="form-control" id="month" name = "m">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
