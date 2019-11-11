<?php 
include "nav.php";
include "config.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Student Details</title>
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
      $sql="SELECT * FROM student";
      $result=$conn->query($sql);
    ?>
    <div class="table-inverse table-responsive table-bordered table-hover">
    
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Registration Id</th>
          <th>Student Name</th>
          <th>USN</th>
          <th>Room No</th>
          <th>Branch</th>
          <th>Gender</th>
          <th>Contact No</th>
          <th>Blood Group</th>
          <th>Date of Birth</th>
          <th>Father Name</th>
          <th>Mother Name</th>
          <th>Parent No</th>


        </tr>
        </thead>
        <tbody>
        <?php
          while( $row= $result->fetch_assoc()){
            echo
            " <tr>
              <td>{$row ['reg_id']}</td>
              <td>{$row ['sname']}</td>
              <td>{$row ['usn']}</td>
              <td>{$row ['room_id']}</td>
              <td>{$row ['branch']}</td>
              <td>{$row ['gender']}</td>
              <td>{$row ['contact_no']}</td>
              <td>{$row ['blood group']}</td>
              <td>{$row ['dob']}</td>
              <td>{$row ['f_name']}</td>
              <td>{$row ['m_name']}</td>
              <td>{$row ['parent_no']}</td>
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