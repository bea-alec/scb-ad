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
  <title>Survey of Current Business Digital Archives</title>
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
  <script type="text/javascript">
    $(function() {
      table = $('#table1').DataTable({
        //"sScrollX": "99%",
        //"sScrollY":240,
        "bDestroy": true,
        "bPaginate": true,
        "lengthMenu": [[10, 25, 50, -1],[10, 25, 50, "All"]],
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false,
        "iDisplayLength": 12,
        "order": [
          [0, "asc"]
        ]
      });
    });
  </script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1>Survey of Current Business Archives Database</h1>
        <p class="lead">This application centralizes information about articles and issues of the <em>Survey of Current Business</em> from 1996 to 2016.</p>
        <p class="lead">Using data from <a href="http://bea.gov/scb">BEA.GOV</a>, an inventory of SCB articles (1996-2016) was created and stored in a MySQL database. Information about each article including the author(s), description, date published, volume and issue in which it appeared, as well as any links to supplemental materials were stored in the database to create a machine-readable, canonical repository of <em>Survey</em> archives. It is our intention that this inventory will help to support future efforts to migrate the archives to a Web Content Management System.</p>
        <ul class="list-group">
          <li class="list-group-item"><h2><i class="fa fa-search" aria-hidden="true"></i><a href="article-inventory.php">Browse and search the inventory of articles</a> or <a href="dpages-inventory.php">D-Pages</a></h2></li>
          <li class="list-group-item"><h2><i class="fa fa-book" aria-hidden="true"></i><a href="issue-archive">Look up a specific issue of the <em>Survey</em></a></h2></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
