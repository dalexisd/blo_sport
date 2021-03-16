<?php

include 'view/partials/header.php';


?>

<h1>Inscription</h1>
        <div class=row>
            <div class="col-3 text-center">

                <form method="post" action="traitement.php">

                <h5>lastname</h5>
                <input type="text" id="lastname" required>

                <h5>firstname</h5>
                <input type="text" id="firstname" required>

                <h5>pseudo</h5>
                <input type="text" id="pseudo" required>
            </div> 
                <div class="col-9">
                <h5>email</h5>
                <input type="mail" id="mail" required>

                <h5>password</h5>
                <input type="password" id="password" required>
            
                <h5>date-inscrition :</h5>
                <?php
                    $date = date("d-m-Y");
                    $heure = date("H:i");
                    Print("$date à $heure");
                ?>
            <h5>Gender</h5>

                <input type="radio" id="genderH"
                name="homme" value="homme">
                <label for="contactChoice1">H</label>

                <input type="radio" id="genderF"
                name="femme" value="femme">
                <label for="contactChoice2">F</label>

                <button type="submit">Envoyer</button>

            </div>
        </div>


</form>

