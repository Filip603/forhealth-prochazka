<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image" src="images/vitaminb6.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Vitamín B6
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Vitamín B6 podporuje správnou činnost nervového systému a přispívá k psychické pohodě i lepšímu soustředění.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Pomáhá snižovat únavu, podporuje tvorbu energie a přirozenou obranyschopnost organismu.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Vyrobeno s důrazem na kvalitu, čistotu a optimální vstřebatelnost.
                ForHealth – energie a rovnováha pro každý den.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                599 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Vitamín B6', 599, 'images/vitaminb6.png')">
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