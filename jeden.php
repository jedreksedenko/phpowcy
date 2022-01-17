<html>
 <head>
  <title>
   Wyniki
  </title>
 </head>

 <body>
 

  Zamówienie: <?php switch($_GET['nazwa']){
   case "wartość1":
     echo "Rock'N'Steak";
     echo "   ";
     echo"Do zapłaty 37 PLN ";
     break;
   case "wartość2":
     echo "Country Burger";
     echo "   ";
     echo"Do zapłaty 89 PLN ";
     break;
   case "wartość3":
     echo "grillowane żeberka";
     echo "   ";
     echo"Do zapłaty 85 PLN ";
     break;
   }
?>
 </body>
</html>