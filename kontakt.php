<?php 
    include "includes/menu.php";
?>

<div class="content">
    <h1 class="content__maintext">
        Kontakty
    </h1>

    <div class="content__form">
        <div class="content__text">
            <h2>
                Napiš nám
            </h2>

            <p>
                <a href="#"> 
                    ForHealtSRO@gmail.com
                </a> 
            </p>
        </div>

        <section class="contact-section">
            <h2>Máte nějaké dotazy?</h2>
            <p>Ozvěte se nám pomocí formuláře níže.</p>
 
            <form class="contact-form" method="POST">
                <div class="form-group">
                    <label for="name">Jméno</label>
                    <input type="text" id="name" name="name" placeholder="Vaše jméno" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="vas@email.cz" required>
                </div>

                <div class="form-group">
                    <label for="message">Zpráva</label>
                    <textarea id="message" name="message" rows="5" placeholder="Vaše zpráva..." required></textarea>
                </div>

                <button type="submit">Odeslat</button>
            </form>
  </section>
    </div>
</div>

<script src="js/index.js"></script>
<?php 
    include "includes/footer.php";
?>