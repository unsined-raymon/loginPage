<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Page</title>
</head>
<body>
    <section>
        <div class="box">
            <div class="form">
                <h1><span class="logoTxt">StubNet</span>Radius</h1>
                <h2>Login</h2>
                <form action="#">
                    <!-- <span class="errorMsg">Invalid Username Or Password</span> -->
                    <div class="inputBx">
                        <input type="text" placeholder="Username" />
                        <img src="./img/user.png" />
                    </div>
                    <div class="inputBx">
                        <input type="text" placeholder="Password" />
                        <img src="./img/lock.png" />
                    </div>
                    <label class="remember"><input type="checkbox" checked> Remember Me</label>
                    <div class="inputBx">
                        <input type="submit" value="Login">
                    </div>
                <p>Forget <a href="#">Password</a></p>
                <p class="copyright">Copyright &copy; <?php echo date('Y'); ?>, StubNetRadius, All Right Reserved.</p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>