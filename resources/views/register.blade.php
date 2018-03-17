<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Register
        </div>
        <form method="post" action="/save_register" onsubmit="return validateForm()">
            {{ csrf_field() }}
            <div>
                <input type="text" name="email" class="email input" placeholder="Email">
            </div>
            <div>
                <input type="password" name="password" class="password input" placeholder="Password">
            </div>
            <div>
                <input type="password" class="confirm_password input" placeholder="Confirm password">
            </div>
            <div class="submit_div">
                <a href="/login">
                    <button>Cancel</button>
                </a>
                <button>Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script>
    function validateForm() {
        var email = $('.email').val();
        var password = $('.password').val();
        var confirm_password = $('.confirm_password').val();

        if (email.trim() == "") {
            alert("Enter your email");
            return false;
        }

        if (password.trim() == "") {
            alert("Enter your password");
            return false;
        }
        if (confirm_password.trim() == "") {
            alert("Re-enter your password");
            return false;
        }

        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            alert("Not a valid e-mail address");
            return false;
        }

        if (password != confirm_password) {
            alert("Passwords don't match");
            return false;
        }

        return true;
    }


</script>
