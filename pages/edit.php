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
        <form class="wraper">
            <div class="side-info">
                <div class="for-photo">
                    <button id="ld_photo">File input here</button>
                </div>
                <h3 class="lblCont">Contact</h3>
                <input type="text" class="inp-edit" placeholder="Phone" name="inpPhone"></input>
                <input type="text" class="inp-edit" placeholder="E-Mail" name="inpMail"></input>
                <input type="text" class="inp-edit" placeholder="Address" name="inpAddr"></input>
                <input type="text" class="inp-edit" placeholder="LinkedIn" name="inpLd"></input>
                <h3 class="lblCont">Education</h3>
                <textarea  class="inp-edit" placeholder="Degree name, University name, Period" cols="9" wrap="soft" name="inpUniver"></textarea>
                
                <h3 class="lblCont">Skills</h3>
                <input type="text" class="inp-edit" placeholder="php, html, css, javascript" name="inpSkill"></input>
            </div>

            <div class="main-info">
                <div class="head">
                <input type="text" class="inp-edit-name" placeholder="Your name" name="inpName"></input>
                    <h2>web developer</h2>
                </div>
                <div class="remain-info">  
                    <h3>Profile</h3>
                    <textarea  class="inp-edit-main" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta placeat quis iure modi nobis, repellat illum blanditiis, laboriosam, debitis ipsam eveniet saepe. Exercitationem, libero repellendus perferendis eveniet assumenda" cols="20"  name="inpProfile"></textarea>

                    <h3>Professional experiance</h3>
                    <textarea  class="inp-edit-main" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta placeat quis iure modi nobis, repellat illum blanditiis, laboriosam, debitis ipsam eveniet saepe. Exercitationem, libero repellendus perferendis eveniet assumenda" cols="20"  name="inpProfile"></textarea>
                </div> 
            </div>
        </form>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>