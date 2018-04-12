  <?php
  require("doa.php");
  $connect = connectDB();
  $id = $_POST["adelete"];

  $query = "SELECT * FROM feedback WHERE id='".$id."'";
  $sql = "DELETE FROM feedback WHERE id='".$id."'";
  $result = mysqli_query($connect,$query);

  $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if (!$myrow){
   print "<p>No such record</p>";
  }
  else {
  mysqli_query($connect,$sql);
  echo "Feedback deleted.";
  header("Refresh:3;url=http://localhost/university/mine.php", true,303);
  }
  mysqli_close($connect);
  ?>
  </body>
  </html>