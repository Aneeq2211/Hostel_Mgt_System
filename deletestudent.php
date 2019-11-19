<?php 
include "config.php";
include "nav.php";

$result1 = "";
if(isset($_POST['Submit']))
{
        $usn1=$_POST['Search'];
        $sql= "DELETE FROM student WHERE usn='$usn1'";
        $result1= mysqli_query($conn,$sql);		
        echo 'Record Deleted.';
}        
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Delete Student</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="login">
    <h1>Delete Student Record</h1>
    <form method="post" action="deletestudent.php">
      <input type="text" name="Search" value="" placeholder="Enter USN">
      <p class="submit"><input type="submit" name="Submit" value="Delete" ></p>
    </form>
    </div>
    
    


</body>
</html>