<?php
    $title = "Tuotevalikoima";
    include "header.php";
?>

<main>
    <section class="flex_container column">
        <h2>Tuotteet</h2>
        <p>Tuotevalikoimaamme kuuluu sisäkasveja, ulkokasveja sekä työkaluja ja muita tarvikkeita kasvien hoitoon.</p>

        <div class="tuotekortit gap40">
            <div class="tuotekortti huonekasvi">
                <img src="img/huonekasvi.jpg" class="tuote_kuva" alt="">
                <h3 class="tuote_otsikko">HUONEKASVIT</h3>

            </div>

            <div class="tuotekortti flex_container">
                <img src="img/siniset_kukat.jpg" class="tuote_kuva" alt="">
                <h3 class="tuote_otsikko">ULKOKASVIT</h3>
            </div>

            <div class="tuotekortti flex_container">
                <img src="img/siemenet.jpg" class="tuote_kuva" alt="">
                <h3 class="tuote_otsikko">SIEMENET</h3>
            </div>

            <div class="tuotekortti flex_container">
                <img src="img/tyokalu.jpg" class="tuote_kuva" alt="">
                <h3 class="tuote_otsikko">TYÖKALUT</h3>
            </div>

            <div class="tuotekortti flex_container">
                <img src="img/robot_leikkuri.jpg" class="tuote_kuva" alt="">
                <h3 class="tuote_otsikko">TYÖKONEET</h3>
            </div>
        </div>

    </section>
</main>

<?php
    include "footer.php";
?>