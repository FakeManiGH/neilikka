

<footer>
    <div class="flex_container spaced_around">
        <div class="footer_links">
            <h4>Sivukartta</h4>
            <a href="index.php">Etusivu</a>
            <a href="tuotteet.php">Tuotteet</a>
            <a href="myymalat.php">Myymälät</a>
            <a href="tietoa.php">Tietoa Meistä</a>
            <a href="ota_yhetytta.php">Ota Yhteyttä</a>
        </div>

        <div class="footer_links">
            <h4>Yhteistyökumppanit</h4>
            <a href="#">Kekkilä</a>
            <a href="#">Bauhaus</a>
            <a href="#">K-Rauta</a>
            <a href="#">Biolan</a>
            <a href="#">Raimon Rentukka Oy</a>
        </div>

        <div class="footer_links">
            <h4>Yhteystiedot</h4>
            <p><strong>Puutarhaliike Neilikka, Helsinki</strong></p>
            <p>Fabianinkatu 42</p>
            <p>00100 Helsinki</p>
            <p>Puh. xx-xxxxxxx</p>
            <p>Sähköposti: helsinki@puutarhaliikeneilikka.fi</p>
            <a href="myymalat.php">Katso aukioloajat</a>
        <span class="footer_gap"></span>
            <p><strong>Puutarhaliike Neilikka, Espoo</strong></p>
            <p>Kivenlahdentie 10</p>
            <p>02320 Espoo</p>
            <p>Puh. xx-xxxxxxx</p>
            <p>Sähköposti: espoo@puutarhaliikeneilikka.fi</p>
            <a href="myymalat.php">Katso aukioloajat</a>
        </div>

        <p>
            <?php
            $year = date('Y');
            echo "Copyright &copy; Puutarhaliike Neilikka $year";
            ?>
        </p>
    </div>
</footer>
</body>
</html>