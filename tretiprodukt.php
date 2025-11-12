<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image" src="images/vitaminb.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Vitamín B3
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Vitamín B3 podporuje správnou činnost nervového systému, psychickou pohodu a přispívá k udržení zdravé pokožky.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Pomáhá přeměňovat potravu na energii a snižuje únavu i vyčerpání, takže tělo funguje přirozeně a efektivně.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Vyrobeno s důrazem na kvalitu, čistotu a maximální vstřebatelnost.
                ForHealth – energie pro tělo i mysl.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                599 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Vitamín B3', 599, 'images/vitaminb.png')">
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