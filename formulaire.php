<?php
include 'header.php'

?>

        <div class=row>
            <div class="col md-12 md-6">

            <form method="post" action="traitement.php">

            <h4>lastname</h4>
            <input type="text" id="lastname" required>

            <h4>firstname</h4>
            <input type="text" id="firstname" required>

            <h4>pseudo</h4>
            <input type="text" id="pseudo" required>

            <h4>email</h4>
            <input type="mail" id="mail" required>

            <h4>password</h4>
            <input type="password" id="password" required>
           
            <h4>date-inscrition</h4>
            <?php
                $date = date("d-m-Y");
                $heure = date("H:i");
                Print(" Le $date à $heure");
            ?>

            

        <div class=form2>
        <div class=row>
            <div class="col -12 md-6">

        <input type="radio" id="genderH"
            name="homme" value="homme">
            <label for="contactChoice1">H</label>

            <input type="radio" id="genderF"
            name="femme" value="femme">
            <label for="contactChoice2">F</label>


            <button type="button">Envoyer</button>

        
            </div>
        </div>

</div>
</form>
<?php
include 'footer.php'

?>
