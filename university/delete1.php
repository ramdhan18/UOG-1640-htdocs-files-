<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link href="dropdown.css" rel="stylesheet" type= "text/css" >
    <link href ="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <style>


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333
            ;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;

        }

        .show {display:block;}
    </style>
</head>

<body>

    <ul>
         <li><a href="Registration Form.php"> Registration Form </a></li>
            <li><a href="Logout.php"> Logout </a></li>
            <li><a href="search.php"> Search </a></li>
            <li><a href="MainPage.php">Main Page</a></li>
</ul>
</body>

<body>

    <div class="sidebar">

        <h2>Menu </h2>
        <ul>
          <li><a href="Registration Form.php"> Registration Form </a></li>
            <li><a href="Logout.php"> Logout </a></li>
            <li><a href="search.php"> Search </a></li>
            <li><a href="MainPage.php">Main Page</a></li>
          </ul>
  </div>


  <div class="contenido">
     <img src="menu icon.png" alt="" class="menu-bar">
 </div>

 <script src="abrir.js"> </script>
</body>
<body bgcolor ="gray" body text="white">

<table cellpadding="15" width="700" align="center">
        <center>
            <caption align="top">
                

                    <h2 align="center"><font color = "skyblue">Delete</font></h2>
                    </caption>
                    </center>
                    </table>
                     <ul>
                <li><a href=MainPage.php>View</a></li>
                <li><a href=add.html>Add</a></li>
                <li><a href=edit.php>Edit</a></li>
                <li><a href=delete.php>Delete</a></li>
            </ul>

<?php


$itemid = $_POST["itemid"];

$host = 'localhost';
$user = 'root';
$passwd = 'root';
$database = 'assignment';
$table_name = 'item';
$connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to
database");

mysqli_select_db($connect,$database);


$query = "SELECT * FROM $table_name WHERE itemid='".$itemid."'";
$sql = "DELETE FROM $table_name WHERE itemid='".$itemid."'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);


$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!$myrow){
 print "<p>No such record</p>";
}
else {
 mysqli_query($connect,$sql);
 print "ID '$itemid' has been deleted from the Database";
}
mysqli_close($connect);
?>
</body>
</html>