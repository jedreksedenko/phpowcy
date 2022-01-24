<!DOCTYPE html>





<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>alepysznee - Zamawiaj/oceniaj jedzenie</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oceniaj restauracje, dania, loguj się i dokonaj zakupu pysznych produktów">
    <meta  name="keywords" content="restauracje, dania, kuchnie, ocena, opinia">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Author" content="Bartosz Sarnacki, Jędrzej Sedeńko, Brian Ważny">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 0px) and (max-width: 481px) " href="mobile.css" />
        <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 800px)" href="tablet.css">
      <script src="https://www.google.com/recaptcha/api.js"></script>


</head>
<body>
    <div id="kontener">
        <div id="gorna_czesc_kontenera">
            <a href="index.html"><img class="logo" src="gfood.jpg" alt="Logo strony.pl" /></a>
            <div id="gorne_menu">
                <ul id="wlasciwe_gorne_menu">
                  <li style="border-left: 1px solid black;"> <a href="logowanie.php"><span class="link"></span>Logowanie</a></li>
                  <li> <a href="rejestracja.php"><span class="link"></span>Rejestracja</a></li>
                  <li> <a href="profile.php"><span class="link"></span>Konto</a></li>

                </ul>
            </div>
           <div id="kontakt_box">
               <table>
                   <tr><td>Kontakt:</td></tr>
                   <tr><td>alepysznee.pl</td></tr>
                   <tr><td>ul. Internet</td></tr>
                   <tr><td>tel kom. 123 456 789<td></tr>
                   <tr><td>e-mail: <a href="mailto:alepysznee.pl">alepysznee@alepysznee.pl</a></td></tr>
               </table>
           </div>
        </div>
        <!-- koniec div gorna czesc kontenera-->
        <div id="srodkowe_menu">
            <ul id="pierwszy_poziom">
                <li><a href="restauracje.php"><span class="link2">Restauracje</span></a></li>
                <li><span class="odstepik">: - :</span></li>
                <li><a href="#"><span class="link2">Kuchnia Świata</span></a>
                    <ul class="drugi_poziom">
                        <li class="pierwszy_element_menu"><li><a href="amerykanska.html">Amerykańska </a></li>
                        <li><a href="azjatycka.html">Azjatycka </a></li>
                        <li><a href="Polska.html">Polska </a></li>
                        <li><a href="turecka.html">Turecka </a></li>
                        <li><a href="wloska.html">Włoska </a></li>
                     </ul>
                </li>
                <li><span class="odstepik">: - :</span></li>
                <li><a href="#"><span class="link2">Posiłki</span></a>
                    <ul class="trzeci_poziom">
                        <li class="pierwszy_element_menu"><a href="burgery.html">Burgery </a></li>
                        <li><a href="desery.html">Desery </a></li>
                        <li><a href="kebab.html">Kebab </a></li>
                        <li><a href="kolacje.html">Kolacje </a></li>
                        <li><a href="obiady.html">Obiady </a></li>
                        <li><a href="pizza.html">Pizza </a></li>
                        <li><a href="przekaski.html">Przekąski </a></li>
                        <li><a href="sushi.html">Sushi </a></li>
                        <li><a href="sniadania.html">Śniadania </a></li>
                        <li><a href="wegetarianska.html">Wegetariańska </a></li>
                     </ul>
                </li>
                <li><span class="odstepik">: - :</span></li>
                <li><a href="zamowienie.html"><span class="link2">Zamówienie</span></a></li>
                <li><span class="odstepik">: - :</span></li>
                <li><a href="kontakt.html"><span class="link2">Kontakt</span></a></li>
            </ul>
        </div>
    <!-- Koniec div srodkowe menu-->
    <div id="zawartosc">
        <div id="gorna_czesc_zawartosci"></div>
        <div id="srodkowa_czesc_zawartosci">
            <div id="tekst">
                <body>
                    <body style="background-color:white">
                        <form action="restauracje.php" method="post"></form>
                        <fieldset>

                          <?php

session_start();

                          	if (isset($_POST['email']))
                          	{
                          		//Udana walidacja? Załóżmy, że tak!
                          		$wszystko_OK=true;

                          		//Sprawdź poprawność nickname'a
                          		$nick = $_POST['nick'];

                          		//Sprawdzenie długości nicka
                          		if ((strlen($nick)<3) || (strlen($nick)>20))
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
                          		}

                          		if (ctype_alnum($nick)==false)
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
                          		}

                          		// Sprawdź poprawność adresu email
                          		$email = $_POST['email'];
                          		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

                          		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
                          		}

                          		//Sprawdź poprawność hasła


                              $haslo1 = $_POST['haslo1'];
                          		$haslo2 = $_POST['haslo2'];

                          		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
                          		}

                          		if ($haslo1!=$haslo2)
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
                          		}

                          		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

                          		//Czy zaakceptowano regulamin?
                          		if (!isset($_POST['regulamin']))
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
                          		}

                          		//Bot or not? Oto jest pytanie!
                          		$sekret = "6LfkfjQeAAAAAIsrnAn4Xuh6cYp9Kz46aWe_5Uz1";

                          		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

                          		$odpowiedz = json_decode($sprawdz);

                          		if ($odpowiedz->success==false)
                          		{
                          			$wszystko_OK=false;
                          			$_SESSION['e_bot']="Potwierdź, że nie jesteś botem!";
                          		}

                          		//Zapamiętaj wprowadzone dane
                          		$_SESSION['fr_nick'] = $nick;
                          		$_SESSION['fr_email'] = $email;
                          		$_SESSION['fr_haslo1'] = $haslo1;
                          		$_SESSION['fr_haslo2'] = $haslo2;
                          		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;

                          		require_once "connect.php";
                          		mysqli_report(MYSQLI_REPORT_STRICT);

                          		try
                          		{
                          			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                          			if ($polaczenie->connect_errno!=0)
                          			{
                          				throw new Exception(mysqli_connect_errno());
                          			}
                          			else
                          			{
                          				//Czy email już istnieje?
                          				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

                          				if (!$rezultat) throw new Exception($polaczenie->error);

                          				$ile_takich_maili = $rezultat->num_rows;
                          				if($ile_takich_maili>0)
                          				{
                          					$wszystko_OK=false;
                          					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
                          				}

                          				//Czy nick jest już zarezerwowany?
                          				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");

                          				if (!$rezultat) throw new Exception($polaczenie->error);

                          				$ile_takich_nickow = $rezultat->num_rows;
                          				if($ile_takich_nickow>0)
                          				{
                          					$wszystko_OK=false;
                          					$_SESSION['e_nick']="Istnieje już konto o takim nicku! Wybierz inny.";
                          				}

                          				if ($wszystko_OK==true)
                          				{
                          					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy

                          					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email', 100, 100, 100, 14)"))
                          					{
                          						$_SESSION['udanarejestracja']=true;
                          						header('Location: restauracje.php');
                          					}
                          					else
                          					{
                          						throw new Exception($polaczenie->error);
                          					}

                          				}

                          				$polaczenie->close();
                          			}

                          		}
                          		catch(Exception $e)
                          		{
                          			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
                          			echo '<br />Informacja developerska: '.$e;
                          		}

                          	}


                          ?>


                          <html lang="pl">
                          <head>
                          	<meta charset="utf-8" />
                          	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

                          	<script src='https://www.google.com/recaptcha/api.js'></script>

                          	<style>
                          		.error
                          		{
                          			color:red;
                          			margin-top: 10px;
                          			margin-bottom: 10px;
                          		}
                          	</style>
                          </head>

                          <body>

                          	<form method="post">

                          		Nickname: <br /> <input type="text" value="<?php
                          			if (isset($_SESSION['fr_nick']))
                          			{
                          				echo $_SESSION['fr_nick'];
                          				unset($_SESSION['fr_nick']);
                          			}
                          		?>" name="nick" /><br />

                          		<?php
                          			if (isset($_SESSION['e_nick']))
                          			{
                          				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                          				unset($_SESSION['e_nick']);
                          			}
                          		?>

                          		E-mail: <br /> <input  type="text" value="<?php
                          			if (isset($_SESSION['fr_email']))
                          			{
                          				echo $_SESSION['fr_email'];
                          				unset($_SESSION['fr_email']);
                          			}
                          		?>" name="email" /><br />

                          		<?php
                          			if (isset($_SESSION['e_email']))
                          			{
                          				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                          				unset($_SESSION['e_email']);
                          			}
                          		?>

                          		Twoje hasło: <br /> <input type="password"  value="<?php
                          			if (isset($_SESSION['fr_haslo1']))
                          			{
                          				echo $_SESSION['fr_haslo1'];
                          				unset($_SESSION['fr_haslo1']);
                          			}
                          		?>" name="haslo1" /><br />

                          		<?php
                          			if (isset($_SESSION['e_haslo']))
                          			{
                          				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                          				unset($_SESSION['e_haslo']);
                          			}
                          		?>

                          		Powtórz hasło: <br /> <input type="password" value="<?php
                          			if (isset($_SESSION['fr_haslo2']))
                          			{
                          				echo $_SESSION['fr_haslo2'];
                          				unset($_SESSION['fr_haslo2']);
                          			}
                          		?>" name="haslo2" /><br />

                          		<label>
                          			<input type="checkbox" name="regulamin" <?php
                          			if (isset($_SESSION['fr_regulamin']))
                          			{
                          				echo "checked";
                          				unset($_SESSION['fr_regulamin']);
                          			}
                          				?>/> Akceptuję regulamin
                          		</label>

                          		<?php
                          			if (isset($_SESSION['e_regulamin']))
                          			{
                          				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                          				unset($_SESSION['e_regulamin']);
                          			}
                          		?>

                          		<div class="g-recaptcha" data-sitekey="6LfkfjQeAAAAAIsrnAn4Xuh6cYp9Kz46aWe_5Uz1"></div>

                          		<?php
                          			if (isset($_SESSION['e_bot']))
                          			{
                          				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
                          				unset($_SESSION['e_bot']);
                          			}
                          		?>

                          		<br />

                          		<input class="submit_button" type="submit" value="Zarejestruj się" />




                  	</form>
            </div>
        </div>
        <!-- koniec div srodkowa czesc zawartosci -->
        <div id="dolna_czesc_zawartosci"></div>

    </div>
    		<!-- koniec div zawartosc -->
			<div id="dolna_czesc_strony">
				<img id="newsletter_icon" src="obrazki/newsletter_icon.gif" alt="Newsletter Icon" />
				<div id="tekst_newsletter">
					<div id="naglowek_newsletter">Zapisz się do Newslettera i bądź na bieżąco z nowościami :-)</div>
					<div id="form_newsletter">
						<form action="#" method="post">
							<div>
							Twój e-mail: <input class="input_text" type="text" name="email" />
							<input  class="submit_button" class="submit_button" type="submit" value="Zapisuje się*" />
							</div>
						</form>
					</div>
					<div id="newsletter_info">
					*Szanujemy Ciebie i tak samo nie lubimy spamu jak Ty, będziemy informowali Cię tylko o samych nowościach związanych z <em>Video Kursami</em>. W każdym momencie, możesz wypisać się z Newsletera wysyłając do nas e-mail'a. Dla formalności przyciskając button "Zapisuje się*" akceptujesz nasze <a href="#">zasady prywatności</a>.
					</div>
				</div>
			</div>
			<!-- koniec dolna_czesc_strony -->
			<div id="copyright">
				&copy; 2021, <strong>alepysznee.pl</strong> created by <em>kto</em>
			</div>
		</div>
    <!-- koniec div kontener-->
    </div>
  </body>

</html>
