<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image" src="images/noc-lahvicka.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Melatonin
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Melatonin je přírodní doplněk stravy, který pomáhá tělu obnovit přirozený spánkový rytmus a zajistit klidný, hluboký spánek.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Zlepšuje kvalitu odpočinku a napomáhá regeneraci organismu během noci.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Bez návykových látek, s důrazem na kvalitu a čistotu surovin.
                ForHealth – přirozená cesta k lepšímu spánku a zdraví.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                599 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Melatonin', 599, 'images/noc-lahvicka.png')">
                    Do Košíku
                </button>
            </a>
        </div>
    </div>
</div>




<script src="js/index.js"></script>

<?php 
    include "includes/footer.php";
?>