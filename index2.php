<?php include 'Includes/Header.php' ; ?>
<br>
<br>
<html>
    <head>
        <link rel="stylesheet" href="Part2.css">
    </head>
    <body>
        <br>
        <br>
        <br>

        <h1>Welcome to Canoe Kayak log In page!!</h1>



        <br>
        <br>
        <br>
        <?php

        

        ?>
        <br>
        <h2 style= "text-align: center;">Veuillez entrer vos informations s'il vous plait.</h2>
        <br>
        <br>

        <form action="Problem.php">
            <div class="FillTab">
                <select name="gender" id="gender">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>

                <div><input type="text" name="firstname" placeholder="FirstName"></div>
                <div><input type="text" name="lastname" placeholder="LastName"></div>
            
                <select name="role">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
                <input type="submit">   
            </div>
        </form>

        <br>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>
<?php include 'Includes/Footer.php' ; ?>