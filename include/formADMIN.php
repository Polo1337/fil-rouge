<div id="container">
    <form action="../admin.php" method="POST">
        <h2>Ajouter un film à la bdd</h2>

        <label><b>Nom du film</b></label>
        <input class="login" type="text" placeholder=" . . ." name="name" required> <br>

        <label><b>synopsis</b></label>
        <input class="login" type="text" placeholder=" . . ." name="synop" required> <br>

        <label><b>acteurs</b></label>
        <input class="login" type="text" placeholder=" . . ." name="actos" required><br>

        <label><b>réalisateur</b></label>
        <input class="login" type="text" placeholder=" . . ." name="reals" required><br>

        <label><b>genre</b></label>
        <input class="login" type="text" placeholder=" . . ." name="genres" required><br>

        <label><b>note du film</b></label>
        <input class="login" type="text" placeholder=" . . ." name="note" required><br>

        <input class="ok" type="submit" id='submit' value='envoyer'> <br>
    </form>
</div>