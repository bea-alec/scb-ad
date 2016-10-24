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
  <title>Back Issue: Survey of Current Business Digital Archives</title>
  <!--Bootstrap-->
  <link rel='stylesheet' type='text/css' href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css" />
  <!--Jquery-->
  <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
  <!--Datatables-->
  <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css" />
  <script type="text/javascript" src="assets/js/datatables.min.js"></script>
  <!-- Font Awesome-->
  <link rel="stylesheet" href="../../../assets/css/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1><a href="index.php">Survey of Current Business Archives Database</a></h1>
<?php
$servername = 'localhost';
$username = 'gov-cat';
$password = 'govcat';
$dbname = 'bea_scb';
$year = $_GET['y'];
$month = $_GET['m'];

echo '<h2><a href="issue-archive.php">Issue Archive</a> > '.$month.'&nbsp;'.$year.'</h2>';
echo '<hr>';
echo '</div>';
echo '</div>';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

$sql = "SELECT title, id, author, url, category, publication_date, description, volume, issue, supp1_url, supp1_title, supp2_url, supp2_title, supp3_url, supp3_title, supp4_url, supp4_title, supp5_url, supp6_title, supp7_url, supp7_title, supp8_url, supp8_title FROM articles WHERE year = $year and month like '$month'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

// output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<div class='paper panel panel-default'>";
      echo "<div class='panel-heading'>";
        echo "<h2> <a href='".$row['url']."' target='blank'>".$row['title'].'</a></h2>';
      echo '</div>';
      echo "<div class='panel-body'>";
        echo "<div class='col-md-7'>";
          echo "<p class='lead'>".$row['description'].'</p>';
          echo "<h3><small><a href='".$row['supp1_url']."' target='blank'>".$row['supp1_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp2_url']."' target='blank'>".$row['supp2_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp3_url']."' target='blank'>".$row['supp3_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp4_url']."' target='blank'>".$row['supp4_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp5_url']."' target='blank'>".$row['supp5_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp6_url']."' target='blank'>".$row['supp6_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp7_url']."' target='blank'>".$row['supp7_title'].'</a></small></h3>';
          echo "<h3><small><a href='".$row['supp8_url']."' target='blank'>".$row['supp8_title'].'</a></small></h3>';
        echo '</div>';
        echo "<div class='col-md-5'>";
          echo '<h4>Additional Information</h4>';
          echo '<p><strong>Author</strong>:&nbsp;'.$row['author'].'</p>';
          echo '<p><strong>Article Category</strong>:&nbsp;'.$row['category'].'</p>';
          echo '<p><strong>Volume</strong>:&nbsp;'.$row['volume'].'&nbsp;';
          echo '<strong>Issue</strong>:&nbsp;'.$row['issue'].'</p>';
          echo '<p><strong>Publication Date</strong>:&nbsp;'.$row['publication_date'].'</p>';
          echo '<p><strong>ID</strong>:&nbsp;'.$row['id'].'</p>';
        echo '</div>';
      echo '</div>';
      echo "<div class='panel-footer'>";
        echo "<p> <a href='".$row['url']."' target='blank'>".$row['url'].'</a></p>';
      echo '</div>';
    echo '</div>';
}
} else {
    echo '0 results';
}
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

$sql = "SELECT id,title, url, category FROM dpages WHERE year = $year and month like '$month'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '<h3>D Pages</h3>';
echo '<table class="table table-striped table-condensed">';
  echo '<thead>';
    echo '<th class="col-md-2">ID</th>';
    echo '<th class="col-md-3">Title</th>';
    echo '<th class="col-md-2">Category</th>';
    echo '<th class="col-md-3">URL</th>';
  echo '</thead>';
echo '<tbody>';
// output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr><td><small>".$row['id'].'</small></td>';
    echo "<td><small><a href='".$row['url']."' target='blank'>".$row['title'].'</a></small></td>';
    echo "<td><small>".$row['category'].'</small></td>';
    echo "<td><small><a href='".$row['url']."' target='blank'>".$row['url'].'</a></small></td>';

}
echo '</tbody>';
echo '</table>';
} else {
    echo '<h2>D Pages</h2>';
    echo 'No D-Pages for this issue';
}
$conn->close();
?>
</div>
</div>
</body>
</html>
