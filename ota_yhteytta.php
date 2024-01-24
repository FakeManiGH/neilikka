<?php
    $title = "Ota Yhteyttä";
    include "header.php";
?>

<main>
<section class="flex_container">
    <img src="img/kirje.jpg" class="card_img" alt="">

    <div class="flex_container column">
        <h2 class="gap20">Ota Meihin Yhteyttä</h2>
        
        <ul class="yhteydenotto gap20">
            <li>Puhelimitse yksittäisiin <a href="myymalat.php">myymälöihin</a>.</li>
            <li>Sähköpostitse: <a href="mailto:asiakaspalvelu@puutarhaliikeneilikka.fi">asiakaspalvelu@puutarhaliikeneilikka.fi</a></li>
            <li>Alla olevalla lomakkeella.</li>
        </ul>

        <form class="yh_lomake" action="/submit" method="post">
            
            <span class="lomake_lohko">
                <label for="nimi">Nimi:</label>
                <input type="text" id="nimi" name="nimi" required>
            </span>

            <span class="lomake_lohko">
                <label for="sahkoposti">Sähköposti:</label>
                <input type="email" id="sahkoposti" name="sahkoposti" required>
            </span>

            <span class="lomake_lohko">
                <label for="aihe">Aihe:</label>
                <select id="aihe" name="aihe" required>
                    <option value="kysymys">Kysymys tuotteista</option>
                    <option value="tilaus">Tilaus</option>
                    <option value="yhteydenotto">Yhteydenottopyyntö</option>
                    <option value="muu">Muu</option>
                </select>
            </span>

            <span class="lomake_lohko">
                <label for="viesti">Viesti:</label>
                <textarea id="viesti" name="viesti" rows="4" cols="25" required></textarea>
            </span>

            <span class="lomake_lohko inline">
                <label for="uutiskirje">Haluan tilata Puutarhaliike Neilikan uutiskirjeen:</label>
                <input type="checkbox" id="uutiskirje" name="uutiskirje" value="kylla">
            </span>
                
            <input class="btn" type="submit" value="Lähetä">

        </form>
    </div>
</section>

</main>

<?php
    include "footer.php";
?>