<?php

include 'view/partials/header.php';

?>
<div class="container">
    <div class=row>
        <div class="col-12 text-center">
            <h1 class="text-center">Inscription</h1>
        </div>
    </div>
    <form method ="post" action="traitement.php">
        <div class=row>
            <div class="col-6 text-center">
            
                <h5>Lastname</h5>
                <input type="text" name="lastname"class="text-center" id="lastname" required>

                <h5>Firstname</h5>
                <input type="text" name="firstname" class="text-center" id="firstname" required>

                <h5>Pseudo</h5>
                <input type="text" name="pseudo" class="text-center" id="pseudo" required>
            </div>
        
            <div class="col-6 text-center">
                <h5>Email</h5>
                <input type="mail" name="mail" id="mail" required>

                <h5>Password</h5>
                <input type="password" name="password" id="password" required>
                <br><br>
            
                <div class="col-12 text-center">
                    <h5>Registration-date :</h5>
                    <?php
                        $date = date("d-m-Y");
                        $heure = date("H:i");
                        Print("$date à $heure");
                    ?>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h5> Gender </h5>

                        <input type="radio" id="genderH" 
                        name="homme" value="homme">
                        <label for="contactChoice1">Man</label>

                        <input type="radio" id="genderF"
                        name="femme" value="femme">
                        <label for="contactChoice2">Woman</label>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




