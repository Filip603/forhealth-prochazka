<?php 
    include "includes/menu.php";
?>

<div class="eachprodukt">

    <img class="eachprodukt__image" src="images/rybiolej.png" alt="">

    <div class="eachprodukt__text">
        <div class="eachprodukt__maintext">
            <h1>
                Rybí olej
            </h1>

            <h2 class="eachprodukt__text--textík">
                ForHealth Rybí olej je bohatým zdrojem omega-3 mastných kyselin, které podporují zdraví srdce, mozku i zraku.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Pomáhá udržovat normální hladinu cholesterolu, podporuje soustředění a přispívá k celkové vitalitě organismu.
            </h2>

            <h2 class="eachprodukt__text--textík">
                Vyrobeno z kvalitních rybích zdrojů s důrazem na čistotu a vysokou vstřebatelnost.
                ForHealth – síla přírody pro vaše zdraví.
            </h2>
        </div>

        <div class="eachprodukt__text--bottom">
            <h2 class="eachprodukt__text--price">
                499 Kč
            </h2>

            <a href="kosik.php">
                <button onclick="pridatDoKosiku('Rybí olej', 499, 'images/rybiolej.png')">
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