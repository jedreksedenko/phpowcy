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
     break;
   case "wartość2":
     echo "Country Burger";
     break;
   case "wartość3":
     echo "grillowane żeberka";
     break;
   }
?>
 </body>
</html>