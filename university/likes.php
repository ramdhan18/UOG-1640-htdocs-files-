<?php
require("doa.php");
  $id = $_GET['id'];
  $connect = connectDB();
  $query = "SELECT * FROM feedback WHERE id='".$id."'";
  $sql = "UPDATE feedback set `likes` = `likes`+1 WHERE id='".$id."'";
  $result = mysqli_query($connect,$query);

  $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if (!$myrow){
    print "<p>No such record</p>";
  }
  else {
    mysqli_query($connect,$sql);
    echo "You have liked the feedback.";
    header("Refresh:1;url=other.php", true,303);
  }
  mysqli_close($connect);
?>