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
  <title>D Pages Inventory: Survey of Current Business Digital Archives</title>
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
      <h1><a href="index.php">Survey of Current Business Archives Database</a></h1>
      <h2>D-Pages Inventory</h2>
        <p class="lead">This page presents a searchable inventory of <em>Survey</em> D-Pages from 1994-2014. Alternatively, you can <a href="issue-archive.php">browse the archives by issue</a> or <a href="article-inventory.php">search the article inventory.</a></p>
        <br>
        <br>
<?php
          //Open a new connection to the MySQL server
          $mysqli = new mysqli('localhost', 'gov-cat', 'govcat', 'bea_scb');

          //Output any connection error
          if ($mysqli->connect_error) {
              die('Error : ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
          }

          //MySqli Select Query
          $results = $mysqli->query('SELECT id,title,year,url,month,category FROM dpages');

          echo '<table class="table table-condensed table-striped table-bordered" id="table1">';
          echo '<thead>';
          echo '<th class="col-md-1">Year</th>';
          echo '<th class="col-md-1">Month</th>';
          echo '<th class="col-md-4">Title</th>';
          echo '<th class="col-md-3">Category</th>';
          echo '</thead>';
          while ($row = $results->fetch_assoc()) {
              echo '<tr>';
              echo '<td>'.$row['year'].'</td>';
              echo '<td>'.$row['month'].'</td>';
              echo '<td><a href="'.$row['url'].'" target="blank">'.$row['title'].'</a></td>';
              echo '<td>'.$row['category'].'</td>';
              echo '</tr>';
          }
          echo '</table>';

          // Frees the memory associated with a result
          $results->free();

          // close connection
          $mysqli->close();
          ?>
</div>
</div>
</div>
        </body>
        </html>
