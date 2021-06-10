<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{url('style_fgpw_admin.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="logo"> </div>
        <span class="title">Reset Password</span class="title">
            <form class="form-container">
            <span class="subtitle-alert">Please enter your new password</span>
            <div class="form-field">
                <label>Password </label>
                <input type="password" name="password">
            </div>

            <div class="form-field">
                <label>Confirm Password</label>
                <input type="password" name="confirm-password">
            </div>

            <input class="submit-btn" type="submit" name="login" value="Reset Password">

        </form>
    </div>
</body>

</html>