<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Transparent Login Form</title>
    <style>
    p {
        color: red;
    }
    </style>
</head>

<body>



    <div class="box">
        <div class="header">
            <h2>Login</h2>
        </div>


        <form action="<?php echo htmlspecialchars("result.php") ?>" method='POST'>
            <div class="inputBox">
                <input type="text" name='user_name' required="">
                <?php if(isset($user_nameErr)){
                    echo $user_nameErr;
                } ?>
                <label for="">Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name='user_Password' required="">
                <?php if(isset($user_passwordErr)){
                    echo $user_passwordErr;
                } ?>
                <label for="">Password</label>
            </div>
            <input type="submit" name='sub' value="Submit">
        </form>


    </div>










    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
    VanillaTilt.init(document.querySelector(".box"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });

    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".your-element"));
    </script>
</body>

</html>