<?php



   echo "<br>";
   $conn = new mysqli("localhost", "root", "", "lamp_final_project");
   if ($conn->connect_error) {
      die("Failed to connect to MySQL Server " . $conn->connecterror);
   }
   // print "Success to connect to MySQL Server";

   // echo "<br>";
   // $new_un = $_POST['username']; 
   // $new_pw = $_POST['password'];
   // print "You passed username and password of: " . $new_un . " " . $new_pw;

   // echo "<br>";
   // print "Woo hoo";
   // echo "<br>";

   // $tName = "tOrder";
   // $results = $conn->query("SELECT * FROM tOrder");
   // $results = $conn->query("SELECT * FROM tPassword"); // works
   $results = $conn->query("SELECT * FROM tPosts WHERE SubCategory_ID = 7");  // SubCategory = 0 : books
   // $results = $conn->query("SELECT * FROM tPosts"); 


   // fetch_row() will grab 1 row of data and return 1 if the row was not empty
   //$rowrow=$results->fetch_row();
   //print" $rowrow[0]    ";
   //print" $rowrow[1]    ";
   //print" $rowrow[2]    ";
   //print "<br>";

   //echo "<table>";
   //echo "<tr>";
   //print "<td>ID</td>";
   //print "<td>UN</td>";
   //print "<td>PW</td>";
   //echo "</tr>";


   // fetch_row() will grab 1 row of data and return 1 if the row was not empty
   // print "detected this number of columns of data per row:" . $results->num_rows . "<br>";

   echo "<table border=\"1\" style=\"width:100%\">";
   while($row=$results->fetch_row()) {
      // foreach($row as $tmp)
      echo "<tr>";
      // $nor=$results->num_rows;
      // for($i=0;$i<=$nor-2;$i++) { 
      //    echo "<td>";
      //    print $row[$i];
      //    echo "</td>";
      // }
      print "<td>";
      print $row[0];
      print "</td>";
      print "<td>";
      print $row[1];
      print "</td>";
      print "<td>";
      print $row[2];
      print "</td>";
      print "<td>";
      print $row[3];
      print "</td>";
      print "<td>";
      print $row[11];
      print "</td>";


      echo "</tr>";
   }
   echo "</table>";


   // $status = $conn->query( "INSERT INTO tPassword VALUES (103, \$new_un, \$new_pw)"); // works

   // $status = $conn->query("INSERT INTO tPassword VALUES (102, 'foo', 'bar')"); // works

   // echo "insert status is " . $status;

   echo "<br>";
   echo "<br>";
   print "<a href=\"cll.html\"> Go Back To Main</a>";

   $conn->close();
?>
