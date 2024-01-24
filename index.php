<?php
    $title = "Tervetuloa Neilikkaan";
    include "header.php";
?>

<main>
    <section class="flex_container">
        <img src="img/ruukut.jpg" class="card_img" alt="">
        <div class="flex_container column spaced_around">
            <h2>Tervetuloa Puutarhaliike Neilikan kotisivuille!</h2>
            <p>Meiltä löydät sekä sisä- että ulkokasvit ja kaiken tarvitsemasi kasvien hoitoon.</p>
            <button onclick="window.location.href='tuotteet.php'">Lue lisää tuotteistamme</button>
        </div>
    </section>

    <hr>

    <section class="flex_container column gap20">
        <h2>Viimeisimmät uutiset</h2>
        <div class="flex_container">
            <div class="flex_container column news_card spaced">
                <img src="img/new_year.jpg" class="card_img" alt="">
                <p>2.1.2016</p>
                <h6>Hyvää uutta vuotta! Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia.</h6>
                <a href="#">Lue lisää...</a>
            </div>
            <div class="flex_container column news_card spaced">
                <img src="img/joululahjat.jpg" class="card_img" alt="">
                <p>14.12.2015</p>
                <h6>Joulukukat edullisesti meiltä. Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.</h6>
                <a href="#">Lue lisää...</a>
            </div>
            <div class="flex_container column news_card spaced">
                <img src="img/syksyn_lehti.jpg" class="card_img" alt="">
                <p>1.9.2015</p>
                <h6>Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät kaikki työkalut ja tarvikkeet.</h6>
                <a href="#">Lue lisää...</a>
            </div>
        </div>
        
    </section>
</main>

<?php
    include "footer.php";
?>