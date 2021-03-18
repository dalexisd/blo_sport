
<?php

include 'partials/header.php';
include 'view/navView.php';

?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="text-center">Registration</h3>
        </div>
    </div>
        <form method ="post" action="">
            <div class="row">
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
                    <input type="email" name="email" id="email" required>

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
            <div class="text-center col-12">
                <h6>Gender</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M">
                    <label class="form-check-label" for="male">
                        Man
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                    <label class="form-check-label" for="female">
                        Woman
                    </label>
                    <br><br>
                    <div class="text-center">
                        <input type="submit" name="register" class="btn btn-primary" value="register">
                    </div>
                </div>
            </div>

        </form>
</div>