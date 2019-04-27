<link rel="stylesheet" href="{$templateWebPath}css/register.css" type="text/css">

<br/>
<form method="POST" action="/user/register/" class="new-user" id="register-form">
    <div class="form-row">
        <div class="form-group col-md-12">
            <input type="email" class="form-control" id="new-email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="password" class="form-control" id="pass1" name="passNew" placeholder="Password">
        </div>
        <div class="form-group col-md-6">
            <input type="password" class="form-control" id="pass2" name="passConf" placeholder="Confirm password">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input class="form-control" id="first-name" name="firstName"  placeholder="First name">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" id="last-name" name="lastName" placeholder="Last name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input id="birth-date" placeholder="Birth date" name="birthDate" class="form-group col-md-10"/>
        </div>
        <div class="form-group col-md-6">
            <select id="sex" placeholder="Sex" name="sex" class="form-control">
                <option selected>Not specified</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
    </div>
    <button id="registerBtn" type="submit" class="btn btn-primary">Submit</button>
</form>
<br/>

<script src="js/register.js"></script>