<?php
$dsn = "mysql:host = localhost; dbname = 1cars";
$username = "edvincama";
$password = "1Marlboro.";

try{

    $db = new PDO($dsn, $username, $password);


}catch (PDOException $exception){

    $error_message = $exception -> getMessage();
    echo $error_message;
    exit();

}
?>

<html>

    <head>
        <title>Login</title>
    </head>

    <body>
        <div>
            <h1 class="container-fluid">Login</h1>
            <form method="post" action="login.php">
                <input type="text" id="username" placeholder="Username"><br>
                <input type="password" id="password" placeholder="Password"><br>
                <input type="button" value="Login" id="login">
            </form>
        </div>


        <p id ="response"> </p>



        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#login").on('click', function () {
                    var username = $("#username").val();
                    var password = $("#password").val();

                    if (username =="" || password == "")
                        alert('Please input username and password');
                    else {
                        $.ajax({
                            url: 'login.php',
                            method: 'POST',
                            data: {
                                login: 1,
                                usernamePHP: username,
                                passwordPHP: password
                            },
                            success: function (response) {
                                $("#response").html(response);
                            },
                            dataType: 'text'
                        });
                    }
                });
            });
        </script>
    </body>
</html>
