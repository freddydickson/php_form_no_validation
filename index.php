<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <form action="config.php" method="post" class="Attachment">
            <h4>Fill in the form</h4>

            <div>
                <label for="firstname">Firstname:</label> <br>
                <input type="text" name="firstName" required id="">
            </div>

            <div>
                <label for="lastname">lastname:</label><br>
                <input type="text" name="lastName" required id="">
            </div>

            <div>
                <label for="email">email:</label><br>
                <input type="text" name="email" required id="">
            </div><br>
            
            <div>
                <label for="gender">Gender:</label>
                <label for ="">Male
                    <input type="radio" name="gender" id="male" value="M" required>
                </label>
<!-- 
                <label for="gender">Female:</label> -->
                <label for ="">Female
                    <input type="radio" name="gender" id="feMale" value="F" required>
                </label>
            </div><br>

            <div>
                <label for="Password"> Password:</label><br>
                <input type="password" name="password" required="Password">
            </div>
            <input type="submit" name="Submit" class="btn" name="submit">
        </form>
    </div>
</body>
</html>