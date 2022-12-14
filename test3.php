<?php
$conn= new mysqli('localhost','root','','ajax')or die("Could not connect to mysql".mysqli_error($conn));
$qry = $conn->query("SELECT * FROM test");
echo"<table border= 1>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>age</th>
              ";
while ($row = mysqli_fetch_array($qry)){
  
    echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nom']."</td>
                <td>".$row['prenom']."</td>
                <td>".$row['age']."</td>
          </tr>";  
}
echo"</table>";
?>
