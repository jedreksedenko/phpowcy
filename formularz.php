<?php
/*********************************************
* plik formularz.php
*********************************************/

$pole1 = trim($_POST['pole1']);
$pole2 = trim($_POST['pole2']);

if(empty($pole1) and empty($pole2)) {
    
// prosty formularz zawierający dwa pola
echo '<form action="" method="post">
<input type="text" name="pole1" style="width: 200px;" /><br />
<textarea name="pole2" style="width: 200px; height: 100px;">
</textarea><br />
<input type="submit" value="Zapisz" />
</form>';
}
else {
    
    // dane pochodzące z formularza
    $dane = $pole1."`".$pole2."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "baza.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // blokada pliku do zapisu
    flock($fp, 2);
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // odblokowanie pliku
    flock($fp, 3);
    // zamknięcie pliku
    fclose($fp);
    
    echo "Dane zostały zapisane!<br />";
    echo "<a href=\"podglad.php\">Zobacz wpisane dane</a>";
?>