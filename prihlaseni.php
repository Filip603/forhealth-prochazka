<?php 
    include "includes/menu.php";
?>

<div class="login">
    <section class="contact-section2">
        <h2>Přihlášení</h2>
            <form class="contact-form" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Váš email např. vas@email.cz" required>
                </div>

                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input type="password" id="password" name="password" placeholder="Heslo" required>
                </div>
                <button type="submit">Přihlásit se</button>
            </form>
  </section>
</div>

<script src="js/index.js"></script>

<?php 
    include "includes/footer.php";
?>