<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{url('style_fgpw_admin.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="logo"> </div>
        <span class="title">Forgot Password?</span class="title">
        <span class="subtitle-alert">Bad things happen <br> We hope everything will be okay </span>
        <form class="form-container" method="GET">
            <div class="form-field">
                <label>E-mail Address</label>
                <input type="email" name="email">
            </div>

            <input class="submit-btn" type="submit" name="login" value="Send Link">
        </form>
        <span class="bottom-msg">Just Remebered? <a href="#">SIGN IN</a></span>
    </div>
</body>

</html>