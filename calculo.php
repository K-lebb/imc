<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="teste.css">
        <title>Document</title>
</head>
<body>
<div id="informacoes">
        <?php

        $nome = urldecode($_GET['nome']);
        $altura = urldecode($_GET['altura']);
        $peso = urldecode($_GET['peso']);
        $sexo = urldecode($_GET['sexo']);
        $idade = urldecode($_GET['idade']);
        $escola = urldecode($_GET['escola']);
        ?>
        
</div>
        <div id="cor">
        <div id="cor2">
                

</body>
</html>
<?php
      
echo"<center>";
$imc = $peso/($altura*$altura);
$imc = number_format($imc, 2, '.', '');
echo "<h3>";
if($sexo == "Masculino" && $idade < 20)
{
if($idade == 10)
{
if($imc < 15)
{
    echo "Desnutrido";
}
if($imc >= 15 && $imc <=17){
    echo "Saudavel";
}
if($imc > 17.1)
{
    echo "Sobrepeso";
}
}
if($idade == 11)
{
if($imc < 15)
{
echo "Desnutrido";
}
if($imc >= 15 && $imc <= 17.28)
{
        echo "Saudavel";
}
if($imc > 17.29)
{
        echo "Sobrepeso";
}
}
if($idade == 12)
{
if($imc < 16)
{
        echo "Desnutrido";
}
if($imc > 15 && $imc < 18)
{
        echo "Saudavel";
}
if($imc >= 18 
){
        echo "Sobrepeso";
}
}
if($idade == 13)
{
if($imc < 16)
{
        echo "Desnutrido";
}
if($imc >= 16 && $imc < 19)
{
        echo "Saudavel";
}
if($imc >= 19)
{
        echo "Sobrepeso";
}
  }
if($idade == 14)
{
if($imc < 17)
{
        echo "Desnutrido";
}
if($imc >= 17 && $imc <= 19.99)
{
        echo "Saudavel";
}
if($imc >= 20)
{
        echo "Sobrepeso";
}
  }
if($idade == 15)
{
if($imc < 17)
{
        echo "Desnutrido";
}
if($imc >= 17 && $imc <= 19.99)
{
        echo "Saudavel";
}
if($imc >= 20)
{
        echo "Sobrepeso";
}
}
if($idade == 16)
{
if($imc < 18)
{
        echo "Desnutrido";
} 
if($imc >= 18 && $imc <= 21)
{
        echo "Saudavel";
}
if($imc >= 21.1)
{
        echo "Sobrepeso";
}
}
if($idade == 17)
{
if($imc < 18)
{
        echo "Desnutrido";
}
if($imc >= 18 && $imc <= 22)
{
        echo "Saudavel";
}
if($imc >= 22.1)
{
        echo "Sobrepeso";
}
}
if($idade == 18)
{
if($imc < 18)
{
        echo "Desnutrido";
}
if($imc >= 18&& $imc < 22)
{
        echo "Saudavel";
}
if($imc >= 22)
{
        echo "Sobrepeso";
}
}
if($idade == 19)
{
if($imc < 18)
{
        echo "Desnutrido";
}
if($imc >= 18 && $imc < 22)
{
        echo "Saudavel";
}
if($imc >= 22)
{
        echo "Sobrepeso";
}
}
}

if($sexo == "Feminino" && $idade < 20){
    if($idade == 10)
    {
    if($imc < 15)
    {
        echo "Desnutrido";
    }
    if($imc >= 15 && $imc <=17){
        echo "Saudavel";
    }
    if($imc > 17.1)
    {
        echo "Sobrepeso";
    }
    }
    if($idade == 11)
    {
    if($imc < 15)
    {
    echo "Desnutrido";
    }
    if($imc >= 15 && $imc < 18)
    {
            echo "Saudavel";
    }
    if($imc >= 18)
    {
            echo "Sobrepeso";
    }
    }
    if($idade == 12)
    {
    if($imc < 15)
    {
            echo "Desnutrido";
    }
    if($imc >= 15 && $imc < 19)
    {
            echo "Saudavel";
    }
    if($imc >= 19 )
    {
            echo "Sobrepeso";
    }
    }
    if($idade == 13)
    {
    if($imc < 16)
    {
            echo "Desnutrido";
    }
    if($imc >= 16 && $imc < 19)
    {
            echo "Saudavel";
    }
    if($imc >= 19)
    {
            echo "Sobrepeso";
    }
      }
    if($idade == 14)
    {
    if($imc < 16)
    {
            echo "Desnutrido";
    }
    if($imc >= 16 && $imc <= 19.99)
    {
            echo "Saudavel";
    }
    if($imc >= 20)
    {
            echo "Sobrepeso"; 

    }
      }
    if($idade == 15)
    {
    if($imc < 17)
    {
            echo "Desnutrido";
    }
    if($imc >= 17 && $imc <= 19.99)
    {
            echo "Saudavel";
    }
    if($imc >= 20)
    {
            echo "Sobrepeso";
    }
    }
    if($idade == 16)
    {
    if($imc < 17)
    {
            echo "Desnutrido";
    }
    if($imc >= 17 && $imc < 21)
    {
            echo "Saudavel";
    }
    if($imc >= 21)
    {
            echo "Sobrepeso";
    }
    }
    if($idade == 17)
    {
    if($imc < 17)
    {
            echo "Desnutrido";
    }
    if($imc >= 17 && $imc <= 21)
    {
            echo "Saudavel";
    }
    if($imc >= 21.1)

            echo "Sobrepeso";
    }
    }
    if($idade == 18)
    {
    if($imc < 17)
    {
            echo "Desnutrido";
    }
    if($imc >= 17&& $imc < 21)
    {
            echo "Saudavel";
    }
    if($imc >= 21.1)
    {
            echo "Sobrepeso";
    }
    }
    if($idade == 19)
    {
    if($imc < 17)
    {
            echo "Desnutrido";
    }
    if($imc >= 17 && $imc < 20.90)
    {
            echo "Saudavel";
    }
    if($imc >= 20.90)
    {
            echo "Sobrepeso";
    }
    }

if($idade >= 20) {
        if($imc <= 18.5){
              echo "Abaixo do peso";
        }
        if($imc >= 18.6 && $imc < 25){
              echo "Peso normal";
      }
      }
      if($imc > 25 && $imc < 30){
              echo "Pré-obesidade";
      }
      if($imc >= 30 && $imc < 35){
              echo "Obesidade Grau 1";
      }
      if($imc >= 35 && $imc < 40){
              echo "Obesidade Grau 2";
      }
      if($imc >=40){
              echo "Obesidade Grau 3";
      }

      echo "</h3>";

echo "<h3>";

echo "Seu IMC é  ". $imc;
echo "</h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="teste.css">
        <lin

        
      <div id="cor2">
        <table border="1">
        <tr id="tr">
            <th id="th"></th>
            <th id="th">5</th>
            <th id="th">15</th>
            <th id="th">50</th>
            <th id="th">85</th>
            <th id="th">95</th>
        </tr>
        <?php
echo "<h3>";
        if($sexo == "Feminino"){
                echo"Tabela FEMININO";
        $data1 = array(
            array(10, 14.23, 15.09, 17.00, 20.19, 23.20),
            array(11, 14.60, 15.53, 17.67, 21.18, 24.59),
            array(12, 14.98, 15.98, 18.35, 22.17, 25.95),
            array(13, 15.36, 16.43, 18.95, 23.08, 27.07),
            array(14, 15.67, 16.79, 19.32, 23.88, 27.97),
            array(15, 16.01, 17.16, 19.69, 24.29, 28.51),
            array(16, 16.37, 17.54, 20.09, 24.74, 29.10),
            array(17, 16.59, 17.81, 20.36, 25.23, 29.72),
            array(18, 16.71, 17.99, 20.57, 25.56, 30.22),
            array(19, 16.87, 18.20, 20.80, 25.85, 30.72)
        );

        foreach ($data1 as $row) {
            echo "<tr id='tr'>";
            foreach ($row as $value) {
                echo "<td id = 'td'>" . $value . "</td>";
            }}
        }
if($sexo == "Masculino"){
                echo"Tabela MASCULINO";
        $data2 = array(
                array(10, 14.42, 15.15, 16.72, 19.60, 22.60),
                array(11, 14.83, 15.59, 17.28, 20.35, 23.70),
                array(12, 15.24, 16.06, 17.87, 21.12, 24.89),
                array(13, 15.73, 16.62, 18.53, 21.93, 25.93),
                array(14, 16.18, 17.20, 19.22, 22.77, 26.93),
                array(15, 16.59, 17.76, 19.92, 23.63, 27.76),
                array(16, 17.01, 18.32, 20.63, 24.45, 28.53),
                array(17, 17.31, 18.68, 21.12, 25.28, 29.32),
                array(18, 17.54, 18.89, 21.45, 25.95, 30.02),
                array(19, 17.80, 19.20, 21.86, 26.36, 30.66)
            );
    
            foreach ($data2 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td id = 'td'>" . $value . "</td>";
                }
                echo "</tr>";
            }
        }
echo "</h3>";
        ?>
    </table>
    </div>
    </div>
    <div id="informacoes">
    <div id="cor3">
        <div id="cor4">
        
        <?php
echo "<h3>";
echo "<center>";

        echo "Informações";
        echo "</center>";
        echo "</h3>";
        
        include "conecao.php";
  
        ?>
        </div>
</div>
                
    
   
</body>
</html>
