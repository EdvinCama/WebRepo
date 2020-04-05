<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


</head>

<body>

<h1>REGISTER FORM</h1>
<form method="post" id="registerForm" action="register.php">
    <input type="text" id="username" placeholder="Username"><br>
    <input type="text" id="firstName" placeholder="First name"><br>
    <input type="text" id="lastName" placeholder="Last name"><br>
    <input type="text" id="email" placeholder="E-mail"><br>
    <input type="text" id="phoneNumber" placeholder="Phone number"><br>
    <input type="text" id="password" placeholder="Password"><br>
    <input type="text" id="confirmPassword" placeholder="Re-type password"><br>
    <input type="checkbox" name="checkBox">Accept privacy policy<br>
    <input type="submit" value="Register">
</form>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#registerForm").validate({
            rules: {
                username: {
                    required: true
                },
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phoneNumber: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#password"
                },

            },
            messages: {

            }
        });
    });
</script>
</body>
</html>
