<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image2" src="images/vitamind.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Vitamín D3
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Vitamín D3 podporuje imunitní systém, správnou činnost svalů a přirozenou pevnost kostí i zubů.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Pomáhá tělu vstřebávat vápník a přispívá k celkové vitalitě, zejména v obdobích s nedostatkem slunečního záření.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Vyrobeno s důrazem na kvalitu a vstřebatelnost.
                ForHealth – síla slunce pro vaše zdraví.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                649 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Vitamín D3', 649, 'images/vitamind.png')">
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