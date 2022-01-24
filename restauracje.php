<!DOCTYPE html>
<?php
session_start();



 ?>
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
</head>
<body>
    <div id="kontener">
        <div id="gorna_czesc_kontenera">
            <a href="index.html"><img class="logo" src="gfood.jpg" alt="Logo strony.pl" /></a>
            <div id="gorne_menu">
                <ul id="wlasciwe_gorne_menu">
                  <li style="border-left: 1px solid black;"> <a href="logowanie.php"><span class="link"></span>Logowanie</a></li>
                  <li> <a href="rejestracja.php"><span class="link"></span>Rejestracja</a></li>
                  <li> <a href="profile.html"><span class="link"></span>Konto</a></li>

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
                <li><a href="restauracje.html"><span class="link2">Restauracje</span></a></li>
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
               <h1> Zamów szybko i wygodnie ulubione jedzenie z dowozem na alepysznee.pl</h1>

                <p> Wybierz restauracje </p>

                <p> <a href="mobar.html">MO.BAR Food & Drinks</a>
                    ul. Wroniecka 18, 61-763 Poznań  </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.820074731025!2d16.931996915364472!3d52.40993705213324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b47312064a7%3A0x485385ae77a8d588!2sMO.BAR%20%2F%20Pozna%C5%84!5e0!3m2!1sen!2spl!4v1624666925545!5m2!1sen!2spl" width="80%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p>  <a href="ratuszova.html">Ratuszova Restaurant A.D. </a>Stary Rynek 55, Poznan 61-772 </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77937.51420721834!2d16.826725141991687!3d52.37862780162557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b3f51f2176b%3A0x99ef80d597a26e3f!2sRestauracja%20Ratuszova%20A.D.%201954!5e0!3m2!1sen!2spl!4v1624666827101!5m2!1sen!2spl" width="80%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p>  <a href="whisky.html">Whiskey in the Jar</a>Stary Rynek 100, Poznan 61-772 </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.882001456767!2d16.932473115364363!3d52.40881475221621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b3f51e1e065%3A0x6cedc03a7afb8ba5!2sWhiskey%20in%20the%20Jar!5e0!3m2!1sen!2spl!4v1624666971213!5m2!1sen!2spl" width="80%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
        <!-- koniec div srodkowa czesc zawartosci -->
        <div id="dolna_czesc_zawartosci"></div>

    </div>
    		<!-- koniec div zawartosc -->
			<div id="dolna_czesc_strony">
				<img id="newsletter_icon" src="newsletter_icon.gif" alt="Newsletter Icon" />
				<div id="tekst_newsletter">
					<div id="naglowek_newsletter">Zapisz się do Newslettera i bądź na bieżąco z nowościami :-)</div>
					<div id="form_newsletter">
						<form action="#" method="post">
							<div>
							Twój e-mail: <input class="input_text" type="text" name="email" />
							<input class="submit_button" type="submit" value="Zapisuje się*" />
							</div>
						</form>
					</div>
					<div id="newsletter_info">
					*Szanujemy Ciebie i tak samo nie lubimy spamu jak Ty, będziemy informowali Cię tylko o samych nowościach. W każdym momencie, możesz wypisać się z Newsletera wysyłając do nas e-mail'a. Dla formalności przyciskając button "Zapisuje się*" akceptujesz nasze <a href="Zasady.html">zasady prywatności</a>.
					</div>
				</div>
			</div>
			<!-- koniec dolna_czesc_strony -->
			<div id="copyright">
				&copy; 2021, <strong>alepysznee.pl</strong> created by <em>GoodFood BJB</em>
			</div>
		</div>
    <!-- koniec div kontener-->
  </body>
</html>
