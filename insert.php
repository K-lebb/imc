<?php
        $altura=$_POST['altura'];
        $peso=$_POST['peso'];
        $sexo=$_POST['sexo'];
        $idade=$_POST['idade'];
        $nome=$_POST['nome'];
        $escola=$_POST['escola'];
        $imc= $peso /($altura*$altura);
        $imc = number_format($imc, 2, '.', '');
        $nome2 = urlencode($nome);
        $peso2 = urlencode($peso);
        $altura2 = urlencode($altura);
        $sexo2 = urlencode($sexo);
        $escola2 = urlencode($escola);
        $idade2 = urlencode($idade);
echo"<center>";
$hostname="localhost";
$username="root";
$password="";
$dbname="imc";
$con = mysqli_connect($hostname,$username,$password,$dbname);
$query2 = "INSERT into informacao(nomedaescola,nome,idade,genero,peso,altura,imc) values ('$escola','$nome','$idade','$sexo','$peso','$altura','$imc'); ";
$result = mysqli_query($con,$query2);
session_start();
header("Location:calculo.php?nome=$nome2&peso=$peso2&altura=$altura2&sexo=$sexo2&escola=$escola2&idade=$idade2");
?>