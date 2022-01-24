<html>
 <head>
  <title>
   Wyniki
  </title>
 </head>

 <body>
 

  Zamówienie: <?php switch($_GET['nazwa']){
   case "id1":
     echo "MO.KACZKA";
     echo "   ";
     echo "Do zapłaty 37 PLN";
     break;
   case "id2":
     echo "PISTOU";
     echo "   ";
     echo "Do zapłaty 24 PLN";
     break;
   case "id3":
     echo "Frytki z batatów";
     echo "   ";
     echo "Do zapłaty 30 PLN";
     break;
   }
?>
 </body>
</html>