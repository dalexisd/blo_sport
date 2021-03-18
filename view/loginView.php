<?php
include "partials/header.php";
?>

<form method="post">
                <h5>Email</h5>
                <input type="email" name="email" id="email" required>

                <h5>Password</h5>
                <input type="password" name="password" id="password" required>
                
                <div class="text-center mt-2">
                <span class="btn btn-primary"><a href="login.php">Register</a></span>
                </div>
</form>
<?php
include "partials/footer.php";
?>