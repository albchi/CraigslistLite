

   echo "<br>";
   $conn = new mysqli("localhost", "root", "", "lamp_final_project");
   // $conn = new mysqli("localhost", "root", "", "dbHW3");
   if ($conn->connect_error) {
      die("Failed to connect to MySQL Server " . $conn->connecterror);
   }
   print "Success to connect to MySQL Server";

   // $conn->close();
