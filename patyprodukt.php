<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image" src="images/vitaminc.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Vitamín C
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Vitamín C je silný antioxidant, který podporuje imunitní systém a přirozenou obranyschopnost organismu.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Pomáhá snižovat únavu, zlepšuje vstřebávání železa a podporuje tvorbu kolagenu pro zdravou pokožku, zuby a cévy.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Vyrobeno s důrazem na kvalitu, čistotu a maximální účinnost.
                ForHealth – vaše každodenní dávka vitality.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                549 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Vitamín C', 549, 'images/vitaminc.png')">
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