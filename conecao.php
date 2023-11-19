<?php
echo"<center>";
	
$hostname="localhost";
$username="root";
$password="";
$dbname="imc";
$con = mysqli_connect($hostname,$username,$password,$dbname);
$query = "SELECT * FROM informacao";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0 )
    echo"<table border=2>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Nome</th>"; 
    echo "<th>Nome da escola </th>";
    echo "<th>Idade </th>";
    echo "<th>Sexo</th>";
    echo "<th>Peso</th>";  
    echo "<th>Altura</th>";  
    echo "<th>imc</th>";  
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>"; 
        echo "<td>" . $row["nomedaescola"] . "</td>"; 
        echo "<td>" . $row["idade"] . "</td>"; 
        echo "<td>" . $row["genero"] . "</td>"; 
        echo "<td>" . $row["peso"] . "</td>"; 
        echo "<td>" . $row["altura"] . "</td>"; 
        echo "<td>" . $row["imc"] . "</td>"; 
    }
   echo "</table>";
  ?>