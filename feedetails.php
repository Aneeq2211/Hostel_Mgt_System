<?php 
include "config.php";
include "nav.php";

$result1 = "";
if(isset($_POST['Submit']))
{
        $usn1=$_POST['Search'];
        $sql= "SELECT S.sname,F.total_fee,F.fee_paid,F.balance_fee FROM student S, fees F WHERE S.usn=F.usn AND S.usn='$usn1'";
        $result1= mysqli_query($conn,$sql);		
        //echo '$result1';
}        //echo $result1;
     //$result2=$result1;
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Fee Details</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="login">
    <h1>Fee Enquiry</h1>
    <form method="post" action="">
      <input type="text" name="Search" value="" placeholder="Enter USN">
      <p class="submit"><input type="submit" name="Submit" value="submit" action="feedetails.php"></p>
    </form>
    </div>
    
    <?php/*
     $sql= "SELECT S.sname,F.total_fee,F.fee_paid,F.balance_fee FROM student S, fees f WHERE S.usn=F.usn AND S.usn='1ga16cs014'";
        $result1= mysqli_query($conn,$sql);*/
    ?>
    <div class="table-inverse table-responsive table-bordered table-hover">
    
    <table class="table">
      <thead class="thead-dark">
        <tr>

          <th>Student Name</th>
          <th>Total Fee</th>
          <th>Fee Paid</th>
          <th>Balance Fee</th>
          

        </tr>
        </thead>
        <tbody>
        <?php
        
        //$result = mysqli_num_rows($result2);
        if($result1==true)
        {
          while( $row= $result1->fetch_assoc()) {
            echo
            " <tr>
              <td>{$row ['sname']}</td>
              <td>{$row ['total_fee']}</td>
              <td>{$row ['fee_paid']}</td>
              <td>{$row ['balance_fee']}</td>
              
            </tr>\n";
          }
        }
    
        $conn->close();
          ?>

          
          
        </tbody>
    </table> 
    </div> 
    


</body>
</html>