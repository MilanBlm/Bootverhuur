<?php } else { ?>
                        <h1>Login</h1>
            <form action="#" method="post">
                <label for="email">Email</label>
                <input type="email" name="email">
                <br><br>

                <label for="password">Wachtwoord</label>
                <input type="password" name="password">
                <br><br>

                <input type="submit" value="Login" name="login">

            </form>
            <?php }?>
            </div>
    </div>
</div>
<script>
function myFunction() {
var x = document.getElementById("Inputt");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}  


<?php if($user !== "No user found" && $user !== null){ ?>
</script>