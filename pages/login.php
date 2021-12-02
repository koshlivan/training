<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>title</title>
</head>
<body>
    <div class="contain">
        <nav class="menu">
            <a href="#">Main Page</a>
            <a href="#">Edit</a>
            <a href="login.php">Login</a>
            <a href="#">Register</a>
            <a href="#">Logout</a>
        </nav>
        <div>
            <div class="reg-wind">
                <form id="log_form">
                    <label for="inpLog">Login<input type="text" name="inpLog"></label>
                    
                    <label for="inpPass">Pass<input type="text" name="inpPass"></label>
                    
                    <input type="submit" name="btnSubmit" id="btnSubm" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>