<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "bookmyshow";
  
    $con = mysqli_connect($server,$user,$password,$db);
  if($con){
    ?>
    <script>
        // alert("connection sucseesfull");
    </script>
    <?php
}else{
    ?>
    <script>
        // alert("No connection");
    </script>
    <?php
}
?>