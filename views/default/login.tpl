<link rel="stylesheet" href="{$templateWebPath}css/login.css" type="text/css">

<div class="img-parent">
    <img src="{$templateWebPath}css/img/logo.png">
</div>
<form method="POST" action="/user/login/" class="old-user" id="login-form">
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="email"  placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
    </div>
    <br/>
    <button type="submit" class="btn btn-primary" id="loginBtn">Sign in</button>
</form>
<br/>

<script src="js/login.js"></script>







