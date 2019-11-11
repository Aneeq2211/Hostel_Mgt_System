<?php 
include "nav.php";
include "config.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Rooms</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="view.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="details">
    <form method="post" action="">
    <?php
      $sql="SELECT * FROM room";
      $result=$conn->query($sql);
    ?>
    <div class="table-inverse table-responsive table-bordered table-hover">
    
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Room No</th>
          <th>Room Type</th>
          <th>Total Beds</th>
          <th>Vacant Beds</th>
          


        </tr>
        </thead>
        <tbody>
        <?php
          while( $row= $result->fetch_assoc()){
            echo
            " <tr>
              <td>{$row ['room_id']}</td>
              <td>{$row ['room_type']}</td>
              <td>{$row ['no_of_beds']}</td>
              <td>{$row ['vacant_beds']}</td>
              
                </tr>\n";
          }
          ?>
          
          
          
        </tbody>
    </table> 
    </div> 
    </form>
    
    </div>
    <?php $conn->close(); ?>
  </body>
</html>