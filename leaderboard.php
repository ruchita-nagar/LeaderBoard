<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="leaderboard.css">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Saira" rel="stylesheet"> 
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
     <header>
        <div class="row">
          <div class="col-md-1">
            <a href="#" onclick="window.open('https://www.nitt.edu/')"><img src="images/nitlogo2.png" class="logo"></a>
          </div>
          <div class="col-md-10" align="center">
            <h1 style="

    font-family: 'El Messiri', sans-serif;

    font-family: 'Saira', sans-serif;

">Leaderboard</h1>
         </div>
          <div class="col-md-1">
             <a href="#" onclick="window.open('http://osoc.nitt.edu/')"><img src="images/osoc.png" class="logo2"></a>
          </div>
        </div>
     </header>
    <div class="container" style="margin-top: 5%;">
            <div class="row">
                <table class="table">
                      <thead style="background-color: #14234d;">
                        <tr>
                          <th>Sno</th>
                          <th>Name</th>
                          <th>Score</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'database.php';
                       $pdo = Database::connect();
                       $sno=0;
                       $sql = 'SELECT * FROM leaderboard ORDER BY score DESC limit 10';
                       foreach ($pdo->query($sql) as $row) {
                       $sno = $sno + 1;
                                echo '<tr>';
                                echo '<td>'. $sno . '</td>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['score'] . '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>